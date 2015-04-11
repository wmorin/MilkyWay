<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class LogMessage extends AbstractItem
{
    /**
     * 
     *
     * @var string
     */
    protected $color;

    /**
     * 
     *
     * @var string
     */
    protected $text;

    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setTimestamp(\DateTime $dateTime)
    {
        $this->timestamp = $dateTime;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
