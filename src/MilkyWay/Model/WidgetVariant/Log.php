<?php

namespace MilkyWay\Model\WidgetVariant;

class Log extends AbstractFlow
{
	/**
	 * 
	 *
	 * @var Item\LogMessage[]
	 */
    protected $messages = array();

    public function addMessage(Item\LogMessage $message)
    {
        $this->messages[] = $message;
    }

    public function getMessages()
    {
        return $this->messages;
    }
}
