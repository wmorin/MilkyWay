<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class FunnelValue extends AbstractItem
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $value;

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

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
