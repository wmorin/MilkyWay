<?php

namespace MilkyWay\Model\WidgetVariant;

class PieChart extends AbstractFlow
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
     * @var 
     */
    protected $labels = array();

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
    protected $values = array();

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

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
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
