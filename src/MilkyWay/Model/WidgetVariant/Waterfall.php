<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Waterfall extends AbstractFlow
{
    const DIRECTION_UP = 'up';
    const DIRECTION_DOWN = 'down';
    const DIRECTION_LEFT = 'left';
    const DIRECTION_RIGHT = 'right';

    /**
     * @var string
     */
    public $color;

    /**
     * @var Item\WaterfallData[]
     */
    public $data = array();

    /**
     * @var string
     */
    public $direction;

    /**
     * @var float
     */
    public $spread;

    /**
     * @var string
     */
    public $value_type;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addData(Item\WaterfallData $data)
    {
        $this->data[] = $data;
    }

    public function getDatas()
    {
        return $this->data;
    }

    public function setDirection($direction)
    {
        switch ($direction) {
            case self::DIRECTION_DOWN:
            case self::DIRECTION_LEFT:
            case self::DIRECTION_RIGHT:
            case self::DIRECTION_UP:
                $this->direction = $direction;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setSpread($spread)
    {
        $this->spread = $spread;
    }

    public function getSpread()
    {
        return $this->spread;
    }

    public function setValueType($type)
    {
        $this->value_type = $type;
    }

    public function getValueType()
    {
        return $this->value_type;
    }
}
