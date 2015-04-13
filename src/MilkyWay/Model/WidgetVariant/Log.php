<?php

namespace MilkyWay\Model\WidgetVariant;

class Log extends AbstractFlow
{
    const SORT_ASC = 'ascending';
    const SORT_DESC = 'descending';

    /**
     * @var Item\LogMessage[]
     */
    public $messages = array();

    /**
     * @var string
     */
    public $sort;

    public function addMessage(Item\LogMessage $message)
    {
        $this->messages[] = $message;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setSortAsc()
    {
        $this->sort = self::SORT_ASC;
    }

    public function setSortDesc()
    {
        $this->sort = self::SORT_DESC;
    }

    public function setSort($sort)
    {
        switch ($sort) {
            case self::SORT_ASC:
            case self::SORT_DESC:
                $this->sort = $sort;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getSort($sort)
    {
        return $this->sort;
    }
}
