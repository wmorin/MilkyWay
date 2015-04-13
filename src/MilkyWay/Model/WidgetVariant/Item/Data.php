<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Data extends AbstractItem
{
    /**
     * @var float
     */
    public $serial;

    /**
     * @var float[]
     */
    public $values = array();

    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    public function getSerial()
    {
        return $this->serial;
    }

    public function addValue($value)
    {
        $this->values[] = $value;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }

    public function getValues()
    {
        return $this->values;
    }
}
