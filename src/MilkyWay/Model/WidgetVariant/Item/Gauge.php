<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Gauge extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $icon = array();

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
    protected $value;

    /**
     * 
     *
     * @var 
     */
    protected $valueType;

    public function addIcon($icon)
    {
        $this->icon[] = $icon;
    }

    public function getIcons()
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

    public function setValueType($type)
    {
        $this->valueType = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }
}
