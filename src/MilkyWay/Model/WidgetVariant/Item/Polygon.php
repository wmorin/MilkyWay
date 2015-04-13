<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Polygon extends AbstractItem
{
    /**
     * @var
     */
    public $fill_color;

    /**
     * @var
     */
    public $label;

    /**
     * @var string
     */
    public $line_width;

    /**
     * @var string
     */
    public $stroke_color;

    /**
     * @var Vertice[]
     */
    public $vertices = array();

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

    public function setStrokeColor($color)
    {
        $this->stroke_color = $color;
    }

    public function getStrokeColor()
    {
        return $this->stroke_color;
    }

    public function addVertice(Vertice $vertice)
    {
        $this->vertices[] = $vertice;
    }

    public function setVertices(array $vertices)
    {
        $this->vertices = $vertices;
    }

    public function getVertices()
    {
        return $this->vertices;
    }
}
