<?php

namespace MilkyWay\Model\WidgetVariant;

class Compass extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $heading;

    /**
     * 
     *
     * @var string
     */
    protected $label;

    /**
     * 
     *
     * @var string
     */
    protected $renderer;

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

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }
}
