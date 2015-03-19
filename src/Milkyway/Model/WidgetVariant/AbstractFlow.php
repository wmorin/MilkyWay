<?php

namespace Milkyway\Model\WidgetVariant;

abstract class AbstractFlow
{
    /**
     * UNIX timestamp in seconds, after which the
     * flow data will expire and the display will
     * blank the data and show expired.
     *
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * The alpha value of the widget as a whole.
     *
     * @var float
     */
    protected $opacity;

    /**
     * A string to display on the top of the widget.
     *
     * @var string
     */
    protected $title;

    public function setExpiresAt(\DateTime $dateTime)
    {
        $this->expiresAt = $dateTime;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function setOpacity($level)
    {
        $this->opacity = $level;
    }

    public function getOpacity()
    {
        return $this->opacity;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
