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
    protected $bars = array();

    /**
     * The max possible value of the bar.
     *
     * @var int
     */
    protected $max;

    /**
     * The min possible value of the bar.
     *
     * @var int
     */
    protected $min;

    /**
     * Whether to sort the bars by value or not. The default is true.
     *
     * @var boolean
     */
    protected $sort = true;

    public function addBar(Bar $bar)
    {
        $this->bars[] = $bar;
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
        $this->sort = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }
}
