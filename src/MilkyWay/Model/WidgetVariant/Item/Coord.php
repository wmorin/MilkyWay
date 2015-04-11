<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Coord extends AbstractItem
{
    /**
     * 
     *
     * @var float
     */
    protected $latitude;

    /**
     * 
     *
     * @var float
     */
    protected $longitude;

    /**
     * 
     *
     * @var 
     */
    protected $zoom;

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
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
