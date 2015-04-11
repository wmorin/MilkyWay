<?php

namespace MilkyWay\Model\WidgetVariant;

class Countdown extends AbstractFlow
{
    /**
     * 
     *
     * @var string
     */
    protected $message;

    /**
     * 
     *
     * @var 
     */
    protected $time;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getTime()
    {
        return $this->time;
    }
}
