<?php

namespace MilkyWay\Model\WidgetVariant;

class Grid extends AbstractFlow
{
    /**
     * @var Item\GridData[]
     */
    public $data = array();

    public function addData(Item\GridData $data)
    {
        $this->data[] = $data;
    }

    public function getDatas()
    {
        return $this->data;
    }
}
