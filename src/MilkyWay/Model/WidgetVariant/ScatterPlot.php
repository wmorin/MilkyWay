<?php

namespace MilkyWay\Model\WidgetVariant;

class ScatterPlot extends AbstractFlow
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var float[]
     */
    public $values = array();

    /**
     * @var string
     */
    public $x_label;

    /**
     * @var string
     */
    public $y_label;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addValues(array $values)
    {
        $this->values[] = $values;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setXLabel($label)
    {
        $this->x_label = $label;
    }

    public function getXLabel()
    {
        return $this->x_label;
    }

    public function setYLabel($label)
    {
        $this->y_label = $label;
    }

    public function getYLabel()
    {
        return $this->y_label;
    }
}
