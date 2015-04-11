<?php

namespace MilkyWay\Model\WidgetVariant;

class Icon extends AbstractFlow
{
	/**
	 * 
	 *
	 * @var Item\Icon[]
	 */
    protected $icons = array();

    public function addIcon(Item\Icon $icon)
    {
        $this->icons[] = $icon;
    }

    public function getIcons()
    {
        return $this->icons;
    }
}
