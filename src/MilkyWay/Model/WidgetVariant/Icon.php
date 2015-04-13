<?php

namespace MilkyWay\Model\WidgetVariant;

class Icon extends AbstractFlow
{
    /**
     * @var Item\Icon[]
     */
    public $icons = array();

    public function addIcon(Item\Icon $icon)
    {
        $this->icons[] = $icon;
    }

    public function getIcons()
    {
        return $this->icons;
    }
}
