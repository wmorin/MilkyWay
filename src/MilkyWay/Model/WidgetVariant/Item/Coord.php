<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Coord extends AbstractItem
{
    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    /**
     * @var float
     */
    public $zoom;

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

    public function setZoom($level)
    {
        $this->zoom = $level;
    }

    public function getZoom()
    {
        return $this->zoom;
    }
}
