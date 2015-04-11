<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class BulletChart extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $colors = array();

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
    protected $marker;

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
    protected $renderer;

    /**
     * 
     *
     * @var 
     */
    protected $thresholds = array();

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

    public function addColor($color)
    {
        $this->colors[] = $color;
    }

    public function getColors()
    {
        return $this->colors;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setMarker($marker)
    {
        $this->marker = $marker;
    }

    public function getMarker()
    {
        return $this->marker;
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

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }

    public function addThreshold($threshold)
    {
        $this->thresholds[] = $threshold;
    }

    public function getThresholds()
    {
        return $this->thresholds;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    public function getValueType()
    {
        return $this->valueType;
    }
}
