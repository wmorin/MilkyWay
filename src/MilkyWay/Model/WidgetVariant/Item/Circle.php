<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Circle extends AbstractItem
{
    /**
     * @var \Center
     */
    public $center;

    /**
     * @var string
     */
    public $fill_color;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $line_width;

    /**
     * @var float
     */
    public $radius;

    /**
     * @var
     */
    public $strokeColor;

    public function setCenter(Center $center)
    {
        $this->center = $center;
    }

    public function getCenter()
    {
        return $this->center;
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

    public function setLineWidth($width)
    {
        $this->line_width = $width;
    }

    public function getLineWidth()
    {
        return $this->line_width;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setStrokeColor($color)
    {
        $this->stroke_color = $color;
    }

    public function getStrokeColor()
    {
        return $this->stroke_color;
    }
}
