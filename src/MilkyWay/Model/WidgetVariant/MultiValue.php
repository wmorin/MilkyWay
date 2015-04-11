<?php

namespace MilkyWay\Model\WidgetVariant;

class MultiValue extends AbstractFlow
{
	/**
	 * 
	 *
	 * @var Item\Gauge[]
	 */
    protected $values = array();

    public function addValue(Item\Gauge $value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }
}
