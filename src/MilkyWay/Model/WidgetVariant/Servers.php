<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Servers extends AbstractFlow
{
    const RENDERER_BULLET = 'bullet';
    const RENDERER_CIRCULAR_PROGRESS = 'circular_progress';

    /**
     * @var float
     */
    public $orange;

    /**
     * @var float
     */
    public $red;

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var Item\Server[]
     */
    public $servers = array();

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

    public function renderAsBullet()
    {
        $this->renderer = self::RENDERER_BULLET;
    }

    public function renderAsCircularProgress()
    {
        $this->renderer = self::RENDERER_CIRCULAR_PROGRESS;
    }

    public function setRenderer($renderer)
    {
        switch ($renderer) {
            case self::RENDERER_BULLET:
            case self::RENDERER_CIRCULAR_PROGRESS:
                $this->renderer = $renderer;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
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
