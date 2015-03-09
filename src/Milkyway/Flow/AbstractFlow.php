<?php

namespace Milkyway\Flow;

abstract class AbstractFlow implements FlowInterface
{
    /**
     * UNIX timestamp in seconds, after which the
     * flow data will expire and the display will
     * blank the data and show expired.
     */
    protected $expiresAt;

    /**
     * The alpha value of the widget as a whole.
     */
    protected $opacity;

    /**
     * A string to display on the top of the widget.
     */
    protected $title;

    public function setExpiresAt(\DateTime $dateTime)
    {
        $this->expiresAt = $dateTime;

        return $this;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function setOpacity($level)
    {
        if (! is_int($level)) {
            throw new \InvalidArgumentException();
        }

        if ($level < 0 or $level > 1) {
            throw new \OutOfBoundsException();
        }

        $this->opacity = $level;

        return $this;
    }

    public function getOpacity()
    {
        return $this->opacity;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function toArray()
    {
        return array(
            'expire'  => $this->getExpiresAt()->getTimestamp(),
            'opacity' => $this->getOpacity(),
            'title'   => $this->getTitle(),
        );
    }

    static protected function elementsToArray(array $elements)
    {
        $array = array();

        foreach ($elements as $element) {
            $array[] = $element->toArray();
        }

        return $array;
    }
}
