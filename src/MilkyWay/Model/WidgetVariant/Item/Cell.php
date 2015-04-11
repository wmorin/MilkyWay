<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Cell extends AbstractItem
{
    /**
     * 
     *
     * @var string
     */
    protected $alignment;

    /**
     * 
     *
     * @var string
     */
    protected $color;

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
    protected $sparkline;

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

    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

    public function getAlignment()
    {
        return $this->alignment;
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

    public function setSparkline($sparkline)
    {
        $this->sparkline = $sparkline;
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
        $this->valueType = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }
}
