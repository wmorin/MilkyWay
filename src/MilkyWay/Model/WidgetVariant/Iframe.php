<?php

namespace MilkyWay\Model\WidgetVariant;

class Iframe extends AbstractFlow
{
    /**
     * @var string
     */
    public $url;

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
