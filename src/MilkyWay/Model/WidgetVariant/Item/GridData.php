<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class GridData extends AbstractItem
{
    /**
     * 
     *
     * @var string
     */
    protected $backgroundColor;

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
    protected $fill;

    /**
     * 
     *
     * @var string
     */
    protected $fillColor;

    /**
     * 
     *
     * @var 
     */
    protected $label;

    public function setBackgroundColor($color)
    {
        $this->backgroundColor = $color;
    }

    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
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
}
