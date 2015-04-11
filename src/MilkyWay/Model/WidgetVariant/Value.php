<?php

namespace MilkyWay\Model\WidgetVariant;

class Value extends AbstractFlow
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
     * @var 
     */
    protected $color;

    /**
     * 
     *
     * @var 
     */
    protected $delta;

    /**
     * 
     *
     * @var 
     */
    protected $deltaType;

    /**
     * 
     *
     * @var 
     */
    protected $icon;

    /**
     * 
     *
     * @var 
     */
    protected $label;

    /**
     * 
     *
     * @var 
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
    protected $sparkline = array();

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

    public function setDelta($delta)
    {
        $this->delta = $delta;
    }

    public function getDelta()
    {
        return $this->delta;
    }

    public function setDeltaType($type)
    {
        $this->deltaType = $type;
    }

    public function getDeltaType()
    {
        return $this->deltaType;
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

    public function setLabelColor($color)
    {
        $this->labelColor = $color;
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

    public function addSparkline($sparkline)
    {
        $this->sparkline[] = $sparkline;
    }

    public function getSparkline()
    {
        return $this->sparkline;
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
        $this->valueType  = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }
}
