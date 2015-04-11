<?php

namespace MilkyWay\Model\WidgetVariant;

class Text extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $alignment;

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
    protected $size;

    /**
     * 
     *
     * @var string
     */
    protected $text;

    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

    public function getAlignment()
    {
        return $this->alignment;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}
