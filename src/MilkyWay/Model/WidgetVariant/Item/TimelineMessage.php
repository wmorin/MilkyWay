<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class TimelineMessage extends AbstractItem
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $icon_url;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $timestamp;

    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function setIconUrl($url)
    {
        $this->icon_url = $url;
    }

    public function getIconUrl()
    {
        return $this->icon_url;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setTimeStamp(\DateTime $dateTime)
    {
        $this->timestamp = $dateTime->getTimeStamp();
    }

    public function getTimeStamp()
    {
        return $this->timestamp;
    }
}
