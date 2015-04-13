<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Server extends AbstractItem
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string[]
     */
    public $labels = array();

    /**
     * @var string
     */
    public $name;

    /**
     * @var float[]
     */
    public $values = array();

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addLabel($label)
    {
        $this->labels[] = $label;
    }

    public function setLabels(array $labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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
