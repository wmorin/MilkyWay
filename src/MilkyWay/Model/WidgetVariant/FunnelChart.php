<?php

namespace MilkyWay\Model\WidgetVariant;

class FunnelChart extends AbstractFlow
{
    /**
     * @var Item\FunnelValue[]
     */
    public $values = array();

    public function addValue(Item\FunnelValue $value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }
}
