<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Status extends AbstractItem
{
    /**
     * @var string
     */
    public $color;

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

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }
}
