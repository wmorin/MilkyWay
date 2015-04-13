<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Gauge extends AbstractFlow
{
    const RENDERER_DOT = 'dot';
    const RENDERER_LINE = 'line';

    /**
     * @var string
     */
    public $gauge_color;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;

    /**
     * @var float
     */
    public $range;

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var float
     */
    public $value;

    /**
     * @var float
     */
    public $value_2;

    /**
     * @var string
     */
    public $value_2_color;

    /**
     * @var string
     */
    public $value_2_label;

    /**
     * @var string
     */
    public $value_color;

    /**
     * @var string
     */
    public $value_type;

    public function setGaugeColor($color)
    {
        $this->gauge_color = $color;
    }

    public function getGaugeColor()
    {
        return $this->gauge_color;
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
        switch ($renderer) {
            case self::RENDERER_DOT:
            case self::RENDERER_LINE:
                break;
                $this->renderer = $renderer;
            default:
                throw new MilkywayRuntimeException();
        }
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
        $this->value_2 = $value;
    }

    public function getValue2()
    {
        return $this->value_2;
    }

    public function setValue2color($color)
    {
        $this->value_2_color = $color;
    }

    public function getValue2Color()
    {
        return $this->value_2_color;
    }

    public function setValue2Label($label)
    {
        $this->value_2_label = $label;
    }

    public function getValue2Label()
    {
        return $this->value_2_label;
    }

    public function setValueColor($color)
    {
        $this->value_color = $color;
    }

    public function getValueColor()
    {
        return $this->value_color;
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
