<?php

namespace MilkyWay\Model\WidgetVariant;

class Clock extends AbstractFlow
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $timezone;

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setTimeZone(\DateTimeZone $timeZone)
    {
        $this->timezone = $timeZone->getName();
    }

    public function getTimeZone()
    {
        return $this->timezone;
    }
}
