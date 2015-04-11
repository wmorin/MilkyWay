<?php

namespace MilkyWay\Model\WidgetVariant;

class Weather extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $location;

    /**
     * 
     *
     * @var 
     */
    protected $temperture;

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setTemperture($temperture)
    {
        $this->temperture = $temperture;
    }

    public function getTemperture()
    {
        return $this->temperture;
    }
}
