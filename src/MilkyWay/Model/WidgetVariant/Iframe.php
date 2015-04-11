<?php

namespace MilkyWay\Model\WidgetVariant;

class Iframe extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $scrolling;

    /**
     * 
     *
     * @var string
     */
    protected $url;

    public function setScrolling($scrolling)
    {
        $this->scrolling = $scrolling;
    }

    public function getScrolling()
    {
        return $this->scrolling;
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
