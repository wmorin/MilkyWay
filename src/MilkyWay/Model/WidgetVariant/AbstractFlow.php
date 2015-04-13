<?php

namespace MilkyWay\Model\WidgetVariant;

abstract class AbstractFlow
{
    const VALUE_TYPE_CELSIUS = 'celsius';
    const VALUE_TYPE_DOLLAR = 'dollar';
    const VALUE_TYPE_EURO = 'euro';
    const VALUE_TYPE_FAHRENHEIT = 'fahrenheit';
    const VALUE_TYPE_PERCENT = 'percent';
    const VALUE_TYPE_POUND = 'pound';
    const VALUE_TYPE_TEMPERATURE = 'temperature';

    /**
     * UNIX timestamp in seconds, after which the
     * flow data will expire and the display will
     * blank the data and show expired.
     *
     * @var int
     */
    public $expires_at;

    /**
     * The alpha value of the widget as a whole.
     *
     * @var float
     */
    public $opacity;

    /**
     * A string to display on the top of the widget.
     *
     * @var string
     */
    public $title;

    public function setExpiresAt(\DateTime $dateTime)
    {
        $this->expires_at = $dateTime->getTimestamp();
    }

    public function getExpiresAt()
    {
        return $this->expires_at;
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
