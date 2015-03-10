<?php

namespace Milkyway\Flow;

class Video extends AbstractFlow
{
    protected $mode;
    protected $mp4;
    protected $muted;
    protected $ogg;
    protected $poster;
    protected $webm;

    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setMp4($mp4)
    {
        $this->mp4 = $mp4;

        return $this;
    }

    public function getMp4()
    {
        return $this->mp4;
    }

    public function setMuted($muted)
    {
        $this->muted = $muted;

        return $this;
    }

    public function getMuted()
    {
        return $this->muted;
    }

    public function setOgg($ogg)
    {
        $this->ogg = $ogg;

        return $this;
    }

    public function getOgg()
    {
        return $this->ogg;
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function setWebm($webm)
    {
        $this->webm = $webm;

        return $this;
    }

    public function getWebm()
    {
        return $this->webm;
    }

    public function toArray()
    {
        $a = parent::toArray();
        $a = $this->addOptional($a, 'mode', $this->getMode());
        $a = $this->addOptional($a, 'mp4', $this->getMp4());
        $a = $this->addOptional($a, 'muted', $this->getMuted());
        $a = $this->addOptional($a, 'ogg', $this->getOgg());
        $a = $this->addOptional($a, 'poster', $this->getPoster());
        $a = $this->addOptional($a, 'webm', $this->getWebm());

        return $a;
    }
}
