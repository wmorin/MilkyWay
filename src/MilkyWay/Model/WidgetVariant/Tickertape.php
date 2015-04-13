<?php

namespace MilkyWay\Model\WidgetVariant;

class Tickertape extends AbstractFlow
{
    /**
     * @var string[]
     */
    public $messages = array();

    /**
     * @var string
     */
    public $color;

    public function addMessage($message)
    {
        $this->messages[] = $message;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
