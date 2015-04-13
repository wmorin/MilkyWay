<?php

namespace MilkyWay\Model\WidgetVariant\Item;

use MilkyWay\Exception\MilkywayRuntimeException;

class BulletChart extends AbstractItem
{
    const RENDERER_LINE = 'line';
    const RENDERER_DOT = 'dot';

    /**
     * @var string[]
     */
    public $colors = array();

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $marker;

    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var int[]
     */
    public $thresholds = array();

    /**
     * @var
     */
    public $value;

    /**
     * @var
     */
    public $value_type;

    public function addColor($color)
    {
        $this->colors[] = $color;
    }

    public function setColors(array $colors)
    {
        $this->colors = $colors;
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
        $availableRenderer = [
            self::RENDERER_DOT,
            self::RENDERER_LINE,
        ];

        if (! in_array($renderer, $availableRenderer)) {
            throw new MilkywayRuntimeException();
        }

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

    public function setThresholds(array $thresholds)
    {
        $this->thresholds = $threshold;
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

    public function setValueType($type)
    {
        $this->value_type = $type;
    }

    public function getValueType()
    {
        return $this->value_type;
    }
}
