<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Polygon extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $fillColor;

    /**
     * 
     *
     * @var 
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
    protected $strokeColor;

    /**
     * 
     *
     * @var 
     */
    protected $vertices;

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

    public function setStrokeColor($color)
    {
        $this->strokeColor = $color;
    }

    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    public function setVertices(Vertice $vertices)
    {
        $this->vertices = $vertices;
    }

    public function getVertices()
    {
        return $this->vertices;
    }
}
