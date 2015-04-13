<?php

namespace MilkyWay\Model\WidgetVariant;

class Status extends AbstractFlow
{
    /**
     * @var Item\Status[]
     */
    public $statuses = array();

    public function addStatus(Item\Status $status)
    {
        $this->statuses[] = $status;
    }

    public function getStatuses()
    {
        return $this->statuses;
    }
}
