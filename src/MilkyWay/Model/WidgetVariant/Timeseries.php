<?php

namespace MilkyWay\Model\WidgetVariant;

class Timeseries extends AbstractFlow
{
    /**
     * 
     *
     * @var 
     */
    protected $baseline;

    /**
     * 
     *
     * @var 
     */
    protected $interval;

    /**
     * 
     *
     * @var 
     */
    protected $intervalCount;

    /**
     * 
     *
     * @var 
     */
    protected $renderer;

    /**
     * 
     *
     * @var Item\SerieMetadata[]
     */
    protected $seriesMetadata = array();

    /**
     * 
     *
     * @var 
     */
    protected $timestamp;

    /**
     * 
     *
     * @var 
     */
    protected $values = array();

    public function setBaseline($baseline)
    {
        $this->baseline = $baseline;
    }

    public function getBaseline()
    {
        return $this->baseline;
    }

    public function setInterval($interval)
    {
        $this->interval = $interval;
    }

    public function getInterval()
    {
        return $this->interval;
    }

    public function setIntervalCount($count)
    {
        $this->intervalCount = $count;
    }

    public function getIntervalCount()
    {
        return $this->intervalCount;
    }

    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    public function getRenderer()
    {
        return $this->renderer;
    }

    public function addSerieMetadata(Item\SerieMetadata $serieMetadata)
    {
        $this->seriesMetadata[] = $serieMetadata;
    }

    public function getSeriesMetadata()
    {
        return $this->seriesMetadata;
    }

    public function setTimestamp(\DateTime $dateTime)
    {
        $this->timestamp = $dateTime;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function addValue($value)
    {
        $this->values[] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }
}
