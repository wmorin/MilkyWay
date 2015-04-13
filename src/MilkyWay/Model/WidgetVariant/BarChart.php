<?php

namespace MilkyWay\Model\WidgetVariant;

use Milkyway\Model\WidgetVariant\Item\Bar;

class BarChart extends AbstractFlow
{
    /**
     * Bars in the barchart.
     *
     * @var Bar[]
     */
    public $bars = array();

    /**
     * The max possible value of the bar.
     *
     * @var int
     */
    public $max;

    /**
     * The min possible value of the bar.
     *
     * @var int
     */
    public $min;

    /**
     * Whether to sort the bars by value or not. The default is true.
     *
     * @var boolean
     */
    public $sort = true;

    public function addBar(Bar $bar)
    {
        $this->bars[] = $bar;
    }

    public function setBars(array $bars)
    {
        $this->bars = $bars;
    }

    public function getBars()
    {
        return $this->bars;
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

    public function setSort($sort)
    {
        $this->sort = (bool) $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }
}
