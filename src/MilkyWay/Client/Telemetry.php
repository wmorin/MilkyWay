<?php

namespace MilkyWay\Client;

class Telemetry extends \Telemetry implements ClientInterface
{
    const DATA_LIFETIME = 600;

    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
    }

    public function addUpdate($flowTag, $payload)
    {
        $payload = $this->setExpiration($payload);

        parent::addUpdate($flowTag, $payload);
    }

    public function setExpiration($payload)
    {
        $payload['expires_at'] = time() + self::DATA_LIFETIME;

        return $payload;
    }

    public function toArray()
    {
        $array = json_decode(json_encode($this), true);

        return self::array_filter_recursive($array);
    }

    public static function array_filter_recursive($input) 
    { 
        foreach ($input as &$value) {
            if (is_array($value)) { 
                $value = self::array_filter_recursive($value); 
            } 
        } 
        
        return array_filter($input); 
    }
}
