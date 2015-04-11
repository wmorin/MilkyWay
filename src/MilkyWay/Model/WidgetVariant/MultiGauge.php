<?php

namespace MilkyWay\Model\WidgetVariant;

class MultiGauge extends AbstractFlow
{
    /**
     * 
     *
     * @var string
     */
    protected $gaugeColor;

    /**
     * 
     *
     * @var Item\Gauge[]
     */
    protected $gauges = array();

    /**
     * 
     *
     * @var 
     */
    protected $layout;

    public function setGaugeColor($color)
    {
        $this->gaugeColor = $color;
    }

    public function getGaugeColor()
    {
        return $this->gaugeColor;
    }

    public function addGauge(Item\Gauge $gauge)
    {
        $this->gauges[] = $gauge;
    }

    public function getGauges()
    {
        return $this->gauges;
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function getLayout()
    {
        return $this->layout;
    }
}
