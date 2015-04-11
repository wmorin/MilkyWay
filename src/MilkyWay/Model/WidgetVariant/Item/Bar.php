<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class Bar extends AbstractItem
{
    /**
     * Color.
     *
     * The CSS color of the bar
     *
     * @var string
     */
    protected $color;

    /**
     * Label.
     *
     * The text to overlay on top of the bar.
     *
     * @var string
     */
    protected $label;

    /**
     * Value.
     *
     * A number representing the value of the barchart. This will determine
     * the length of the bar.
     *
     * @var int
     */
    protected $value;

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

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
