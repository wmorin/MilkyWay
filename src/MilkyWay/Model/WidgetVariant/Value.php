<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Value extends AbstractFlow
{
    const DELTA_TYPE_ABSOLUTE = 'absolute';
    const DELTA_TYPE_PERCENT = 'percent';

    /**
     * @var bool
     */
    public $abbreviate;

    /**
     * @var string
     */
    public $color;

    /**
     * @var float
     */
    public $delta;

    /**
     * @var string
     */
    public $delta_type;

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
     * @var float
     */
    public $rounding;

    /**
     * @var float[]
     */
    public $sparkline = array();

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
        switch ($type) {
            case self::DELTA_TYPE_ABSOLUTE:
            case self::DELTA_TYPE_PERCENT:
                $this->delta_type = $type;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getDeltaType()
    {
        return $this->delta_type;
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
        $this->label_color = $color;
    }

    public function getLabelColor()
    {
        return $this->label_color;
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
        $this->value_type  = $type;
    }

    public function getValueType()
    {
        return $this->value_type;
    }
}
