<?php

namespace MilkyWay\Model\WidgetVariant\Item;

class TimelineMessage extends AbstractItem
{
    /**
     * 
     *
     * @var 
     */
    protected $from;

    /**
     * 
     *
     * @var string
     */
    protected $iconUrl;

    /**
     * 
     *
     * @var string
     */
    protected $text;

    /**
     * 
     *
     * @var 
     */
    protected $timeStamp;

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
        $this->iconUrl = $url;
    }

    public function getIconUrl()
    {
        return $this->iconUrl;
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
        $this->timeStamp = $dateTime;
    }

    public function getTimeStamp()
    {
        return $this->timeStamp;
    }
}
