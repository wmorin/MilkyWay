<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Weather extends AbstractFlow
{
    const TEMPERATURE_CELSIUS = 'celsius';
    const TEMPERATURE_FAHRENHEIT = 'fahrenheit';

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $temperture;

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setTemperature($temperature)
    {
        switch ($temperature) {
            case self::TEMPERATURE_CELSIUS:
            case self::TEMPERATURE_FAHRENHEIT:
                $this->temperature = $temperature;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getTemperature()
    {
        return $this->temperature;
    }
}
