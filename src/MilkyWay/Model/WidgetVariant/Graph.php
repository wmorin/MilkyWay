<?php

namespace MilkyWay\Model\WidgetVariant;

use MilkyWay\Exception\MilkywayRuntimeException;

class Graph extends AbstractFlow
{
    const LABEL_AUTO = 'auto';
    const LABEL_NONE = 'none';

    const MISSING_DATA_CROP_LEFT = 'crop_left';
    const MISSING_DATA_CROP_RIGHT = 'crop_right';
    const MISSING_DATA_FILL = 'fill';

    const BASELINE_DYNAMIC = 'dynamic';
    const BASELINE_ZERO = 'zero';

    const RENDERER_AREA = 'area';
    const RENDERER_BAR = 'bar';
    const RENDERER_LINE = 'line';
    const RENDERER_SPLINE = 'spline';

    /**
     * @var string
     */
    public $baseline;

    /**
     * @var int
     */
    public $end_time;

    /**
     * @var
     */
    public $label_1;

    /**
     * @var
     */
    public $label_2;

    /**
     * @var
     */
    public $label_3;

    /**
     * @var float
     */
    public $min_scale;

    /**
     * @var
     */
    public $missing_data;

    /**
     * @var
     */
    public $renderer;

    /**
     * @var
     */
    public $series = array();

    /**
     * @var int
     */
    public $start_time;

    /**
     * @var bool
     */
    public $unstack = true;

    /**
     * @var
     */
    public $value_type;

    /**
     * @var string[]
     */
    public $x_labels = array();

    /**
     * @var
     */
    public $y_labels;

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

    public function setEndTime(\DateTime $dateTime)
    {
        $this->end_time = $dateTime->getTimestamp();
    }

    public function getEndTime()
    {
        return $this->end_time;
    }

    public function setLabel1($label)
    {
        $this->label_1 = $label;
    }

    public function getLabel1()
    {
        return $this->label_1;
    }

    public function setLabel2($label)
    {
        $this->label_2 = $label;
    }

    public function getLabel2()
    {
        return $this->label_2;
    }

    public function setLabel3($label)
    {
        $this->label_3 = $label;
    }

    public function getLabel3()
    {
        return $this->label_3;
    }

    public function setMinScale($scale)
    {
        $this->min_scale = $scale;
    }

    public function getMinScale()
    {
        return $this->min_scale;
    }

    public function setMissingData($data)
    {
        switch ($data) {
            case self::MISSING_DATA_CROP_LEFT:
            case self::MISSING_DATA_CROP_RIGHT:
            case self::MISSING_DATA_FILL:
                $this->missing_data = $data;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getMissingData()
    {
        return $this->missing_data;
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
        $this->start_time = $dateTime->getTimestamp();
    }

    public function getStartTime()
    {
        return $this->start_time;
    }

    public function setUnstack($unstack)
    {
        $this->unstack = (bool) $unstack;
    }

    public function getUnstack()
    {
        return $this->unstack;
    }

    public function setValueType($type)
    {
        $this->value_type = $type;
    }

    public function getValueType()
    {
        return $this->value_type;
    }

    public function addXLabel($label)
    {
        $this->x_labels[] = $label;
    }

    public function setXLabels(array $labels)
    {
        $this->x_labels = $labels;
    }

    public function getXLabels()
    {
        return $this->x_labels;
    }

    public function setYLabelAuto()
    {
        $this->y_labels = self::LABEL_AUTO;
    }

    public function setYLabelNone()
    {
        $this->y_labels = self::LABEL_NONE;
    }

    public function setYLabels($label)
    {
        switch ($label) {
            case self::LABEL_AUTO:
            case self::LABEL_NONE:
                $this->y_labels = $label;
                break;
            default:
                throw new MilkywayRuntimeException();
        }
    }

    public function getYLabels()
    {
        return $this->y_labels;
    }
}
