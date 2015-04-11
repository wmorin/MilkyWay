<?php

namespace MilkyWay\Model\WidgetVariant;

class Gauge extends AbstractFlow
{
    /**
     * 
     *
     * @var string
     */
    protected $gaugeColor;

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
     * @var 
     */
    protected $max;

    /**
     * 
     *
     * @var 
     */
    protected $min;

    /**
     * 
     *
     * @var 
     */
    protected $range;

    /**
     * 
     *
     * @var string
     */
    protected $renderer;

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
    protected $value2;

    /**
     * 
     *
     * @var 
     */
    protected $value2Color;

    /**
     * 
     *
     * @var 
     */
    protected $value2Label;

    /**
     * 
     *
     * @var 
     */
    protected $valueColor;

    /**
     * 
     *
     * @var 
     */
    protected $valueType;

    public function setGaugeColor($color)
    {
        $this->gaugeColor = $color;
    }

    public function getGaugeColor()
    {
        return $this->gaugeColor;
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

    public function setMax($max)
    {
        $this->max = $max;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function setMin($min)
    {
        $this->min = $min;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setRange($range)
    {
        $this->range = $range;
    }

    public function getRange()
    {
        return $this->range;
    }

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue2($value)
    {
        $this->value2 = $value;
    }

    public function getValue2()
    {
        return $this->value2;
    }

    public function setValue2color($color)
    {
        $this->value2Color = $color;
    }

    public function getValue2Color()
    {
        return $this->value2Color;
    }

    public function setValue2Label($label)
    {
        $this->value2Label = $label;
    }

    public function getValue2Label()
    {
        return $this->value2Label;
    }

    public function setValueColor($color)
    {
        $this->valueColor = $color;
    }

    public function getValueColor()
    {
        return $this->valueColor;
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
