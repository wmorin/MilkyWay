<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Center extends AbstractItem
{
    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    public function setLatitude($latitude)
    {
        $this->lat = $latitude;
    }

    public function getLatitude()
    {
        return $this->lat;
    }

    public function setLongitude($longitude)
    {
        $this->lon = $longitude;
    }

    public function getLongitude()
    {
        return $this->lon;
    }
}
