<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class MultiGauge extends AbstractFlow
{
    const LAYOUT_PLAIN = 'plain';
    const LAYOUT_STACKED = 'stacked';

    /**
     * @var string
     */
    public $gauge_color;

    /**
     * @var Item\Gauge[]
     */
    public $gauges = array();

    /**
     * @var string
     */
    public $layout;

    public function setGaugeColor($color)
    {
        $this->gauge_color = $color;
    }

    public function getGaugeColor()
    {
        return $this->gauge_color;
    }

    public function addGauge(Item\Gauge $gauge)
    {
        $this->gauges[] = $gauge;
    }

    public function getGauges()
    {
        return $this->gauges;
    }

    public function setLayoutPlain()
    {
        $this->layout = self::LAYOUT_PLAIN;
    }

    public function setLayoutStacked()
    {
        $this->layout = self::LAYOUT_STACKED;
    }

    public function setLayout($layout)
    {
        switch ($layout) {
            case self::LAYOUT_PLAIN:
            case self::LAYOUT_STACKED:
                $this->layout = $layout;
                break;
            default:
            throw new MilkywayRuntimeException();
        }
    }

    public function getLayout()
    {
        return $this->layout;
    }
}
