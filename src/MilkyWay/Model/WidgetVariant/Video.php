<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Video extends AbstractFlow
{
    const MODE_FILL = 'fill';
    const MODE_FIT = 'fit';
    const MODE_SCALE = 'scale';

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $mp4;

    /**
     * @var bool
     */
    public $muted;

    /**
     * @var string
     */
    public $ogg;

    /**
     * @var string
     */
    public $poster;

    /**
     * @var string
     */
    public $webm;

    public function setMode($mode)
    {
        switch ($mode) {
            case self::MODE_FILL:
            case self::MODE_FIT:
            case self::MODE_SCALE:
                $this->mode = $mode;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setMp4($mp4)
    {
        $this->mp4 = $mp4;
    }

    public function getMp4()
    {
        return $this->mp4;
    }

    public function setMuted($muted)
    {
        $this->muted = (bool) $muted;
    }

    public function getMuted()
    {
        return $this->muted;
    }

    public function setOgg($ogg)
    {
        $this->ogg = $ogg;
    }

    public function getOgg()
    {
        return $this->ogg;
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function setWebm($webm)
    {
        $this->webm = $webm;
    }

    public function getWebm()
    {
        return $this->webm;
    }
}
