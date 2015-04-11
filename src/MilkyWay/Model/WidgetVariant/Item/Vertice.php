<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Vertice extends AbstractItem
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
}
