<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class SerieMetadata extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $aggregation;

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
    protected $interpolate;

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
    protected $valueType;

    public function setAggregation($aggregation)
    {
        $this->aggregation = $aggregation;
    }

    public function getAggregation()
    {
        return $this->aggregation;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setInterpolate($interpolate)
    {
        $this->interpolate = $interpolate;
    }

    public function getInterpolate()
    {
        return $this->interpolate;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
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
