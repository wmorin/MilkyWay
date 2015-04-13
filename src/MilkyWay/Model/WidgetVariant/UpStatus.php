<?php

namespace MilkyWay\Model\WidgetVariant;

class UpStatus extends AbstractFlow
{
    /**
     * @var string[]
     */
    public $down = array();

    /**
     * @var float
     */
    public $last_down;

    /**
     * @var string[]
     */
    public $up = array();

    public $up_color = 'blue';

    /**
     * @var float
     */
    public $uptime;

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
        $this->last_down = $lastDown;
    }

    public function getLastDown()
    {
        return $this->last_down;
    }

    public function addUp($up)
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
