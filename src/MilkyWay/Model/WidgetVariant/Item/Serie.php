<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Serie extends AbstractItem
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
     * @var float[]
     */
    public $values = array();

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

    public function addValue($value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }
}
