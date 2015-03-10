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

    protected function addOptional(array $array, $name, $value)
    {
        return $this->addFieldToArray($array, $name, $value, false);
    }

    protected function addRequired(array $array, $name, $value)
    {
        return $this->addFieldToArray($array, $name, $value, true);
    }

    protected function addFieldToArray(array $array, $name, $value, $required = false)
    {
        if ($required && null === $value) {
            $e = sprintf('Missing required "%s" field.', $name);
            throw new \Exception($e);
        }

        if (null !== $value) {
            $array[$name] = $value;
        }

        return $array;
    }

    public function toArray()
    {
        $expire = null;

        if ($this->getExpiresAt() instanceof \DateTime) {
            $expire = $this->getExpiresAt()->getTimestamp();
        }

        $a = array();
        $a = $this->addRequired($a, 'expire', $expire);
        $a = $this->addRequired($a, 'opacity', $this->getOpacity());
        $a = $this->addRequired($a, 'title', $this->getTitle());

        return $a;
    }

    protected static function elementsToArray(array $elements)
    {
        $array = array();

        foreach ($elements as $element) {
            $array[] = $element->toArray();
        }

        return $array;
    }
}
