<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Text extends AbstractFlow
{
    const SIZE_SMALL = 'small';
    const SIZE_NORMAL = 'normal';
    const SIZE_LARGE = 'large';

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
    public $size;

    /**
     * @var string
     */
    public $text;

    public function setAlignment($alignment)
    {
        switch ($alignment) {
            case self::ALIGNMENT_CENTER:
            case self::ALIGNMENT_LEFT:
            case self::ALIGNMENT_RIGHT:
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

    public function setSize($size)
    {
        switch ($size) {
            case self::SIZE_SMALL:
            case self::SIZE_NORMAL:
            case self::SIZE_LARGE:
                $this->size = $size;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}
