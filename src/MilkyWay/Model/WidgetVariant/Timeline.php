<?php

namespace MilkyWay\Model\WidgetVariant;

class Timeline extends AbstractFlow
{
    /**
     * @var Item\TimelineMessage[]
     */
    public $messages = array();

    public function addMessage(Item\TimelineMessage $message)
    {
        $this->messages[] = $message;
    }

    public function getMessages()
    {
        return $this->messages;
    }
}
