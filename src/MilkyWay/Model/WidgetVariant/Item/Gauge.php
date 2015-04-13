<?php

namespace MilkyWay\Model\WidgetVariant\Item;

use MilkyWay\Exception\MilkywayRuntimeException;

class Gauge extends AbstractItem
{
    const RENDERER_DOT = 'dot';
    const RENDERER_LINE = 'line';

    /**
     * @var string
     */
    public $icon;

    /**
     * @var
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
     * @var string
     */
    public $renderer;

    /**
     * @var float
     */
    public $value;

    /**
     * @var
     */
    public $value_type;

    public function setIcon($icon)
    {
        $this->icon = $icon;
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

    public function renderAsDot()
    {
        $this->renderer = self::RENDERER_DOT;
    }

    public function renderAsLine()
    {
        $this->renderer = self::RENDERER_LINE;
    }

    public function setRenderer($renderer)
    {
        switch ($renderer) {
            case self::RENDERER_DOT:
            case self::RENDERER_LINE:
                $this->renderer = $renderer;
                break;
            default:
                throw new MilkywayRuntimeException();
                break;
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

    public function setValueType($type)
    {
        $this->value_type = $type;
    }

    public function getValueType()
    {
        return $this->value_type;
    }
}
