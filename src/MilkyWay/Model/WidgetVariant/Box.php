<?php

namespace MilkyWay\Model\WidgetVariant;

class Box extends AbstractFlow
{
    /**
     * @var string
     */
    public $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
