<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class PieChart extends AbstractFlow
{
    const RENDERER_PIE = 'pie';
    const RENDERER_DONUT = 'donut';

    /**
     * @var string[]
     */
    public $colors = array();

    /**
     * @var string[]
     */
    public $labels = array();

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var float[]
     */
    public $values = array();

    public function addColor($color)
    {
        $this->colors[] = $color;
    }

    public function getColors()
    {
        return $this->colors;
    }

    public function addLabel($label)
    {
        $this->labels[] = $label;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function renderAsDonut()
    {
        $this->renderer = self::RENDERER_DONUT;
    }

    public function renderAsPie()
    {
        $this->renderer = self::RENDERER_PIE;
    }

    public function setRenderer($renderer)
    {
        switch ($renderer) {
            case self::RENDERER_DONUT:
            case self::RENDERER_PIE:
                $this->renderer = $renderer;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getRenderer()
    {
        return $this->renderer;
    }

    public function addValue($value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }
}
