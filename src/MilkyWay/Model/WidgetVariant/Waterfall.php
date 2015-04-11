<?php

namespace MilkyWay\Model\WidgetVariant;

class Waterfall extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $color;

    /**
     * 
     *
     * @var Item\WaterfallData[]
     */
    protected $datas = array();

    /**
     * 
     *
     * @var 
     */
    protected $direction;

    /**
     * 
     *
     * @var 
     */
    protected $spread;

    /**
     * 
     *
     * @var 
     */
    protected $valueType;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addData(Item\WaterfallData $data)
    {
        $this->datas[] = $data;
    }

    public function getDatas()
    {
        return $this->datas;
    }

    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setSpread($spread)
    {
        $this->spread = $spread;
    }

    public function getSpread()
    {
        return $this->spread;
    }

    public function setValueType($type)
    {
        $this->valueType = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }
}
