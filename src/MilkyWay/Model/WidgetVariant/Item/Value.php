<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Value extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $abbreviate;

    /**
     * 
     *
     * @var string
     */
    protected $color;

    /**
     * 
     *
     * @var string
     */
    protected $icon;

    /**
     * 
     *
     * @var string
     */
    protected $label;

    /**
     * 
     *
     * @var string
     */
    protected $labelColor;

    /**
     * 
     *
     * @var 
     */
    protected $rounding;

    /**
     * 
     *
     * @var 
     */
    protected $value;

    /**
     * 
     *
     * @var 
     */
    protected $valueType;

    public function setAbbreviate($abbreviate)
    {
        $this->abbreviate = $abbreviate;
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
        $this->labelColor = $labelColor;
    }

    public function getLabelColor()
    {
        return $this->labelColor;
    }

    public function setRounding($rounding)
    {
        $this->rounding = $rounding;
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
        $this->valueType = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }
}
