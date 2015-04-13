<?php

namespace MilkyWay\Model\WidgetVariant;

class BulletChart extends AbstractFlow
{
    /**
     * @var Item\BulletChart[]
     */
    public $bulletcharts = array();

    public function addBulletChartItem(Item\BulletChart $bullet)
    {
        $this->bulletcharts[] = $bullet;
    }

    public function getBulletCharts()
    {
        return $this->bulletcharts;
    }
}
