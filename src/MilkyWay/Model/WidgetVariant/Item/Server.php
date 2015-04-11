<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Server extends AbstractItem
{
    /**
     * 
     *
     * @var string
     */
    protected $color;

    /**
     * 
     *
     * @var 
     */
    protected $labels = array();

    /**
     * 
     *
     * @var string
     */
    protected $name;

    /**
     * 
     *
     * @var 
     */
    protected $values = array();

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

    public function getValues()
    {
        return $this->values;
    }
}
