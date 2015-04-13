<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Value extends AbstractItem
{
    /**
     * @var bool
     */
    public $abbreviate;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $label_color;

    /**
     * @var int
     */
    public $rounding;

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $value_type;

    public function setAbbreviate($abbreviate)
    {
        $this->abbreviate = (bool) $abbreviate;
    }

    public function getAbbreviate()
    {
        return $this->abbreviate;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
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

    public function setLabelColor($labelColor)
    {
        $this->label_color = $labelColor;
    }

    public function getLabelColor()
    {
        return $this->label_color;
    }

    public function setRounding($decimalCount)
    {
        $this->rounding = $decimalCount;
    }

    public function getRounding()
    {
        return $this->rounding;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValueType($type)
    {
        $this->value_type = $type;
    }

    public function getValueType()
    {
        return $this->value_type;
    }
}
