<?php

namespace MilkyWay\Client;

use MilkyWay\Model\FlowInterface;

class Telemetry implements ClientInterface
{
    protected $apiKey;

    protected $apiUrl = 'https://api.telemetryapp.com/data';

    protected $updated = array();

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function post()
    {
        if (0 === count($this->updates)) {
            return;
        }

        $request = [ 'data' => $this->updates ];
        $result = $this->getApiResponse($request);
        $this->updates = array();
        $errors = $this->getErrors($result);

        if (count($errors)) {
            //$errors
            print_r($errors);
            throw new \RuntimeException('plop');
        }
    }

    protected function getErrors($result)
    {
        $errors = array();

        if (isset($result->message)) {
            $errors = array(
                '$fatal' => 'Code: '.$result->code.' - Message: '.$result->message,
            ); // Some kind of fatal error occurred.
        }

        if (isset($result->errors) && count($result->errors)) {
            foreach ($result->errors as $k => $err) {
                if (preg_match('/\#([^:]+):\s*(.+)$/', $err, $matches)) {
                    $errors[$matches[1]] = $matches[2];
                }
            }
        }

        return $errors;
    }

    protected function getApiResponse($request)
    {
        $json = json_encode($request, JSON_PRETTY_PRINT);

        $curl = curl_init($this->apiUrl);

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER      => array(
                    'Content-Type: application/json',
                    'Content-Length: '.strlen($json),
                ),
                CURLOPT_CUSTOMREQUEST   => 'POST',
                CURLOPT_USERAGENT       => 'MilkyWay Client v.0.0.1',
                CURLOPT_USERPWD         => $this->apiKey.':',
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_POSTFIELDS      => $json,
            )
        );

        return json_decode(curl_exec($curl));
    }

    public function updateFlow(FlowInterface $flow, $widgetVariant)
    {
        $tag = $flow->getTag();
        $payload = $this->toArray($widgetVariant);

        $this->updates[$tag] = $payload;
    }

    public function toArray($obj)
    {
        if (! is_object($obj)) {
            throw new \Exception();
        }

        $array = json_decode(json_encode($obj), true);

        return self::array_filter_recursive($array);
    }

    public static function array_filter_recursive(array $array)
    {
        foreach ($array as &$value) {
            if (is_array($value)) {
                $value = self::array_filter_recursive($value);
            }
        }

        return array_filter($array, function ($v) {
            return !is_null($v);
        });
    }
}
