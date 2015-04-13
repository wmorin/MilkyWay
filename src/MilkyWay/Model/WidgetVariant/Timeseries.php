<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Timeseries extends AbstractFlow
{
    const BASELINE_DYNAMIC = 'dynamic';
    const BASELINE_ZERO = 'zero';

    const INTERVAL_SECONDS = 'seconds';
    const INTERVAL_MINUTES = 'minutes';
    const INTERVAL_HOURS = 'hours';
    const INTERVAL_DAYS = 'days';
    const INTERVAL_WEEKS = 'weeks';
    const INTERVAL_MONTHS = 'months';
    const INTERVAL_YEARS = 'years';

    const RENDERER_AREA = 'area';
    const RENDERER_BAR = 'bar';
    const RENDERER_LINE = 'line';
    const RENDERER_SPLINE = 'spline';

    /**
     * @var string
     */
    public $baseline;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $interval_count;

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var Item\SerieMetadata[]
     */
    public $series_metadata = array();

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float[]
     */
    public $values = array();

    public function setBaseline($baseline)
    {
        switch ($baseline) {
            case self::BASELINE_DYNAMIC:
            case self::BASELINE_ZERO:
                $this->baseline = $baseline;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getBaseline()
    {
        return $this->baseline;
    }

    public function setInterval($interval)
    {
        switch ($interval) {
            case self::INTERVAL_SECONDS:
            case self::INTERVAL_MINUTES:
            case self::INTERVAL_HOURS:
            case self::INTERVAL_DAYS:
            case self::INTERVAL_WEEKS:
            case self::INTERVAL_MONTHS:
            case self::INTERVAL_YEARS:
                $this->interval = $interval;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
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
        switch ($renderer) {
            case self::RENDERER_AREA:
            case self::RENDERER_BAR:
            case self::RENDERER_LINE:
            case self::RENDERER_SPLINE:
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
        $this->timestamp = $dateTime->getTimestamp();
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
