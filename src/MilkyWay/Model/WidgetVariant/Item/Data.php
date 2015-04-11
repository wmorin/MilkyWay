<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Data extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $serial;

    /**
     * 
     *
     * @var 
     */
    protected $values = array();

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

    public function getValues()
    {
        return $this->values;
    }
}
