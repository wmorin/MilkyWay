<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Circle extends AbstractItem
{
    /**
     * 
     *
     * @var \Center
     */
    protected $center;

    /**
     * 
     *
     * @var string
     */
    protected $fillColor;

    /**
     * 
     *
     * @var string
     */
    protected $label;

    /**
     * 
     *
     * @var 
     */
    protected $lineWidth;

    /**
     * 
     *
     * @var 
     */
    protected $radius;

    /**
     * 
     *
     * @var 
     */
    protected $strokeColor;

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
        $this->fillColor = $color;
    }

    public function getFillColor()
    {
        return $this->fillColor;
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
        $this->lineWidth = $width;
    }

    public function getLineWidth()
    {
        return $this->lineWidth;
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
        $this->strokeColor = $color;
    }

    public function getStrokeColor()
    {
        return $this->strokeColor;
    }
}
