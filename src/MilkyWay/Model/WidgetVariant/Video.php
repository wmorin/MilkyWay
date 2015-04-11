<?php

namespace MilkyWay\Model\WidgetVariant;

class Video extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $mode;

    /**
     * 
     *
     * @var 
     */
    protected $mp4;

    /**
     * 
     *
     * @var 
     */
    protected $muted;

    /**
     * 
     *
     * @var 
     */
    protected $ogg;

    /**
     * 
     *
     * @var 
     */
    protected $poster;

    /**
     * 
     *
     * @var 
     */
    protected $webm;

    public function setMode($mode)
    {
        $this->mode = $mode;
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
        $this->muted = $muted;
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
