<?php

namespace MilkyWay\Model\WidgetVariant;

class Servers extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $orange;

    /**
     * 
     *
     * @var 
     */
    protected $red;

    /**
     * 
     *
     * @var 
     */
    protected $renderer;

    /**
     * 
     *
     * @var 
     */
    protected $servers = array();

    public function setOrange($orange)
    {
        $this->orange = $orange;
    }

    public function getOrange()
    {
        return $this->orange;
    }

    public function setRed($red)
    {
        $this->red = $red;
    }

    public function getRed()
    {
        return $this->red;
    }

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }

    public function addServer(Item\Server $server)
    {
        $this->servers[] = $server;
    }

    public function getServers()
    {
        return $this->servers;
    }
}
