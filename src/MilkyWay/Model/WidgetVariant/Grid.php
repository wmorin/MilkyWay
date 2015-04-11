<?php

namespace MilkyWay\Model\WidgetVariant;

class Grid extends AbstractFlow
{
	/**
	 * 
	 *
	 * @var Item\GridData[]
	 */
    protected $datas = array();

    public function addData(Item\GridData $data)
    {
        $this->datas[] = $data;
    }

    public function getDatas()
    {
        return $this->datas;
    }
}
