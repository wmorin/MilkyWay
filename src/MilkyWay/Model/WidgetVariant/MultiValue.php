<?php

namespace MilkyWay\Model\WidgetVariant;

class MultiValue extends AbstractFlow
{
    /**
     * @var Item\Value[]
     */
    public $values = array();

    public function addValue(Item\Value $value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }
}
