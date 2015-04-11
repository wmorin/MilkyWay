<?php

namespace MilkyWay\Model\WidgetVariant;

class Clock extends AbstractFlow
{
    /**
     * 
     *
     * @var string
     */
    protected $label;

    /**
     * 
     *
     * @var \DateTimeZone
     */
    protected $timeZone;

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
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }
}
