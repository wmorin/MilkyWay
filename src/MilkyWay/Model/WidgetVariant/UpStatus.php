<?php

namespace MilkyWay\Model\WidgetVariant;

class UpStatus extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $down = array();

    /**
     * 
     *
     * @var 
     */
    protected $lastDown;

    /**
     * 
     *
     * @var 
     */
    protected $up = array();

    /**
     * 
     *
     * @var 
     */
    protected $uptime;

    public function addDown($down)
    {
        $this->down[] = $down;
    }

    public function getDown()
    {
        return $this->down;
    }

    public function setLastDown($lastDown)
    {
        $this->lastDown = $lastDown;
    }

    public function getLastDown()
    {
        return $this->lastDown;
    }

    public function setUp($up)
    {
        $this->up[] = $up;
    }

    public function getUp()
    {
        return $this->up;
    }

    public function setUptime($uptime)
    {
        $this->uptime = $uptime;
    }

    public function getUptime()
    {
        return $this->uptime;
    }
}
