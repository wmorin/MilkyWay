<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Icon extends AbstractItem
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $type;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
