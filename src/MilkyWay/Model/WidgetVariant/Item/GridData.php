<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class GridData extends AbstractItem
{
    /**
     * @var string
     */
    public $bg_color;

    /**
     * @var float
     */
    public $fill;

    /**
     * @var string
     */
    public $fill_color;

    /**
     * @var string
     */
    public $label;

    public function setBackgroundColor($color)
    {
        $this->bg_color = $color;
    }

    public function getBackgroundColor()
    {
        return $this->bg_color;
    }

    public function setFill($fill)
    {
        $this->fill = $fill;
    }

    public function getFill()
    {
        return $this->fill;
    }

    public function setFillColor($color)
    {
        $this->fill_color = $color;
    }

    public function getFillColor()
    {
        return $this->fill_color;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }
}
