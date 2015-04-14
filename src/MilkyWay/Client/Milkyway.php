<?php

namespace MilkyWay\Client;

use MilkyWay\Model\Account;
use MilkyWay\Model\Board;
use MilkyWay\Model\FlowInterface;

class Milkyway implements ClientInterface
{
    protected $apiKey;

    protected $apiUrl = 'https://api.telemetryapp.com';

    protected $updated = array();

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getAccount()
    {
        $obj = $this->getApiResponse('account');

        $account = new Account();
        $account->setId($obj->id);
        $account->setName($obj->name);
        $account->setPlan($obj->plan);

        return $account;
    }

    public function getBoards()
    {
        $obj = $this->getApiResponse('boards');

        $boards = array();

        foreach ($obj as $boardElt) {
            $board = new Board();
            $board->setId($boardElt->id);
            $board->setName($boardElt->name);
            $board->setTheme($boardElt->theme);
            $board->setColumns($boardElt->columns);
            $board->setRows($boardElt->rows);
            $board->setAspectRatio($boardElt->aspect_ratio);
            $board->setDisplayBoardName($boardElt->display_board_name);
            $board->setWidgetMargins($boardElt->widget_margins);
            $board->setWidgetPadding($boardElt->widget_padding);
            $board->setSize($boardElt->size);
            $board->setFontSize($boardElt->font_size);

            array_push($boards, $board);
        }

        return $boards;
    }

    public function post()
    {
        if (0 === count($this->updates)) {
            return;
        }

        $request = [ 'data' => $this->updates ];
        $result = $this->getApiResponse('data', $request);
        $this->updates = array();
        $errors = $this->getErrors($result);

        if (count($errors)) {
            print_r($errors);
            throw new \RuntimeException();
        }
    }

    protected function getErrors($result)
    {
        $errors = array();

        if (isset($result->message)) {
            $msg = sprintf('Code: %d - Message: %s', $result->code, $result->message);
            $errors = array(
                '$fatal' => $msg,
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

    protected function getApiResponse($method, $request = null)
    {
        $curl = curl_init($this->apiUrl.'/'.$method);
        echo $this->apiUrl.'/'.$method;

        $curlOpt = array(
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_USERAGENT       => 'MilkyWay Client v.0.0.1',
            CURLOPT_USERPWD         => $this->apiKey.':',
            CURLOPT_RETURNTRANSFER  => true
        );

        if (null !== $request) {
            $json = json_encode($request, JSON_PRETTY_PRINT);
            $curlOpt[CURLOPT_CUSTOMREQUEST] = 'POST';
            $curlOpt[CURLOPT_POSTFIELDS] = $json;
            $curlOpt[CURLOPT_HTTPHEADER] = array(
                'Content-Type: application/json',
                'Content-Length: '.strlen($json),
            );
        }

        curl_setopt_array($curl, $curlOpt);

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
