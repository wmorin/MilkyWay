<?php

namespace MilkyWay\Model\WidgetVariant;

class Image extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $link;

    /**
     * 
     *
     * @var 
     */
    protected $mode;

    /**
     * 
     *
     * @var string
     */
    protected $url;

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
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
