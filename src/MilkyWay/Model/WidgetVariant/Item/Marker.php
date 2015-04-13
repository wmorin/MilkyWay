<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Marker extends AbstractItem
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var MarkerCoord
     */
    public $coords;

    /**
     * @var string
     */
    public $icon;

   /**
    * @var string
    */
   public $label;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setCoords(MarkerCoord $coords)
    {
        $this->coords = $coords;
    }

    public function getCoords()
    {
        return $this->coords;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }
}
