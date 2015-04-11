<?php

namespace MilkyWay\Model\WidgetVariant;

class Graph extends AbstractFlow
{
    /**
     * 
     *
     * @var string
     */
    protected $baseline;

    /**
     * 
     *
     * @var 
     */
    protected $endTime;

    /**
     * 
     *
     * @var 
     */
    protected $label1;

    /**
     * 
     *
     * @var 
     */
    protected $label2;

    /**
     * 
     *
     * @var 
     */
    protected $label3;

    /**
     * 
     *
     * @var 
     */
    protected $minScale;

    /**
     * 
     *
     * @var 
     */
    protected $missingData;

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
    protected $series = array();

    /**
     * 
     *
     * @var 
     */
    protected $startTime;

    /**
     * 
     *
     * @var 
     */
    protected $unstack;

    /**
     * 
     *
     * @var 
     */
    protected $valueType;

    /**
     * 
     *
     * @var 
     */
    protected $xLabels;

    /**
     * 
     *
     * @var 
     */
    protected $yLabels;

    public function setBaseline($baseline)
    {
        $this->baseline = $baseline;
    }

    public function getBaseline()
    {
        return $this->baseline;
    }

    public function setEndTime(\DateTime $dateTime)
    {
        $this->endTime = $dateTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setLabel1($label)
    {
        $this->label1 = $label;
    }

    public function getLabel1()
    {
        return $this->label1;
    }

    public function setLabel2($label)
    {
        $this->label2 = $label;
    }

    public function getLabel2()
    {
        return $this->label2;
    }

    public function setLabel3($label)
    {
        $this->label3 = $label;
    }

    public function getLabel3()
    {
        return $this->label3;
    }

    public function setMinScale($scale)
    {
        $this->minScale = $scale;
    }

    public function getMinScale()
    {
        return $this->minScale;
    }

    public function setMissingData($data)
    {
        $this->missingData = $data;
    }

    public function getMissingData()
    {
        return $this->missingData;
    }

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }

    public function addSerie(Item\Serie $serie)
    {
        $this->series[] = $serie;
    }

    public function getSeries()
    {
        return $this->series;
    }

    public function setStartTime(\DateTime $dateTime)
    {
        $this->startTime = $dateTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setUnstack($unstack)
    {
        $this->unstack = $unstack;
    }

    public function getUnstack()
    {
        return $this->unstack;
    }

    public function setValueType($type)
    {
        $this->valueType = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }

    public function setXLabels($label)
    {
        $this->xLabels = $label;
    }

    public function getXLabels()
    {
        return $this->xLabels;
    }

    public function setYLabels($label)
    {
        $this->yLabels = $label;
    }

    public function getYLabels()
    {
        return $this->yLabels;
    }
}
