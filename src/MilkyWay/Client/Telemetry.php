<?php

namespace MilkyWay\Client;

use MilkyWay\Model\Flow;
use MilkyWay\Model\WidgetVariant\AbstractFlow;

class Telemetry extends \Telemetry implements ClientInterface
{
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
    }

    public function addUpdate(Flow $flow, AbstractFlow $widgetVariant)
    {
        $tag = $flow->getTag();
        $payload = $this->toArray($widgetVariant);

        parent::addUpdate($tag, $payload);
    }

    public function toArray(object $obj)
    {
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

        return array_filter($array);
    }
}
