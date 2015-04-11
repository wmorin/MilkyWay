<?php

namespace MilkyWay\Model\WidgetVariant;

class ScatterPlot extends AbstractFlow
{
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
    protected $values = array();

    /**
     * 
     *
     * @var 
     */
    protected $xLabel;

    /**
     * 
     *
     * @var 
     */
    protected $yLabel;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addValue($value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setXLabel($xLabel)
    {
        $this->xLabel = $xLabel;
    }

    public function getXLabel()
    {
        return $this->xLabel;
    }

    public function setYLabel($yLabel)
    {
        $this->yLabel = $yLabel;
    }

    public function getYLabel()
    {
        return $this->yLabel;
    }
}
