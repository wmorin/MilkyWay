<?php

namespace MilkyWay\Model\WidgetVariant;

class Countdown extends AbstractFlow
{
    /**
     * @var string
     */
    public $message;

    /**
     * The UNIX seconds since epoch representing the time.
     *
     * @var int
     */
    public $time;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setTime($second)
    {
        $this->time = $second;
    }

    public function getTime()
    {
        return $this->time;
    }
}
