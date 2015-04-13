<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class LogMessage extends AbstractItem
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $timestamp;

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
        $this->timestamp = $dateTime->getTimestamp();
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
