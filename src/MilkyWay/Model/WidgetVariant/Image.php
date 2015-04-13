<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Image extends AbstractFlow
{
    const MODE_FILL = 'fill';
    const MODE_FIT = 'fit';
    const MODE_SCALE = 'scale';

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $url;

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setModeFill()
    {
        $this->mode = self::MODE_FILL;
    }

    public function setModeFit()
    {
        $this->mode = self::MODE_FIT;
    }

    public function setModeScale()
    {
        $this->mode = self::MODE_SCALE;
    }

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

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
