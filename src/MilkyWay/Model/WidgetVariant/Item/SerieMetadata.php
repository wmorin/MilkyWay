<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class SerieMetadata extends AbstractItem
{
    const AGGREGATION_FUNCTION_AVG = 'avg';
    const AGGREGATION_FUNCTION_MIN = 'min';
    const AGGREGATION_FUNCTION_MAX = 'max';
    const AGGREGATION_FUNCTION_SUM = 'sum';
    const AGGREGATION_FUNCTION_LATEST = 'latest';

    /**
     * @var
     */
    public $aggregation;

    /**
     * @var string
     */
    public $color;

    /**
     * @var bool
     */
    public $interpolate;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $value_type;

    public function setAggregationAvg()
    {
        $this->aggregation = self::AGGREGATION_FUNCTION_AVG;
    }

    public function setAggregationMin()
    {
        $this->aggregation = self::AGGREGATION_FUNCTION_MIN;
    }

    public function setAggregationMax()
    {
        $this->aggregation = self::AGGREGATION_FUNCTION_MAX;
    }

    public function setAggregationSum()
    {
        $this->aggregation = self::AGGREGATION_FUNCTION_SUM;
    }

    public function setAggregationLatest()
    {
        $this->aggregation = self::AGGREGATION_FUNCTION_LATEST;
    }

    public function setAggregation($function)
    {
        $this->aggregation = $function;
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
        $this->interpolate = (bool) $interpolate;
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
