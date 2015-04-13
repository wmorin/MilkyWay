<?php

namespace MilkyWay\Model\WidgetVariant;

class Compass extends AbstractFlow
{
    const RENDERER_GAUGE = 'gauge';
    const RENDERER_HEADING = 'heading';

    /**
     * @var float
     */
    public $heading;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $renderer;

    public function setHeading($heading)
    {
        $this->heading = $heading;
    }

    public function getHeading()
    {
        return $this->heading;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function renderAsGauge()
    {
        $this->renderer = self::RENDERER_GAUGE;
    }

    public function renderAsHeading()
    {
        $this->renderer = self::RENDERER_HEADING;
    }

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }
}
