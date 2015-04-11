<?php

namespace MilkyWay\Model\WidgetVariant;

class BulletChart extends AbstractFlow
{
    /**
	 * 
	 *
	 * @var Item\BulletChart[]
	 */
    protected $bulletCharts = array();

    public function addBulletChartItem(Item\BulletChart $bullet)
    {
        $this->bulletCharts[] = $bullet;
    }

    public function getBulletCharts()
    {
        return $this->bulletCharts;
    }
}
