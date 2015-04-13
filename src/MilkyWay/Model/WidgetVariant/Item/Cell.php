<?php

namespace MilkyWay\Model\WidgetVariant\Item;

use MilkyWay\Exception\MilkywayRuntimeException;

class Cell extends AbstractItem
{
    const ALIGNMENT_LEFT = 'left';
    const ALIGNMENT_RIGHT = 'right';
    const ALIGNMENT_CENTER = 'center';

    /**
     * @var string
     */
    public $alignment;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var
     */
    public $sparkline;

    /**
     * @var
     */
    public $value;

    /**
     * @var string
     */
    public $value_type;

    public function alignLeft()
    {
        $this->alignment = self::ALIGNMENT_LEFT;
    }

    public function alignRight()
    {
        $this->alignment = self::ALIGNMENT_RIGHT;
    }

    public function alignCenter()
    {
        $this->alignment = self::ALIGNMENT_CENTER;
    }

    public function setAlignment($alignment)
    {
        switch ($alignment) {
            case self::ALIGNMENT_LEFT:
            case self::ALIGNMENT_RIGHT:
            case self::ALIGNMENT_CENTER:
                $this->alignment = $alignment;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getAlignment()
    {
        return $this->alignment;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setSparkline($sparkline)
    {
        $this->sparkline = $sparkline;
    }

    public function getSparkline()
    {
        return $this->sparkline;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
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
