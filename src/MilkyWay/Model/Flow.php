<?php

namespace MilkyWay\Model;

class Flow implements FlowInterface
{
    /**
     * Flow ID.
     *
     * @var string
     */
    protected $id;

    /**
     * Type of flow, either: default, affiliated or virtualized.
     *
     * @var string
     */
    protected $type;

    /**
     * Variant of the flow.
     * Could be one of :
     * barchart, box, bulletchart, clock, compass, countdown,
     * funnelchart, gauge, graph, grid, icon, iframe, image,
     * log, map, multigauge, multivalue, piechart, scatterplot,
     * servers, status, table, text, tickertape, timeline,
     * timeseries, upstatus, value, video, waterfall, weather.
     *
     * @var string
     */
    protected $variant;

    /**
     * Tag for the flow, a human readable identifier unique to your account.
     *
     * @var string
     */
    protected $tag;

    /**
     * Filter for the flow, used in conjunction with sources.
     *
     * @var string
     */
    protected $filter;

    /**
     * Whether the flow has seen data or not.
     *
     * @var boolean
     */
    protected $has_data = false;

    /**
     * Whether a flow is enabled or not.
     *
     * @var boolean
     */
    protected $enabled = false;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    public function getVariant()
    {
        return $this->variant;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function setHasData()
    {
        $this->has_data = true;
    }

    public function unsetHasData()
    {
        $this->has_data = false;
    }

    public function getHasData()
    {
        return $this->has_data;
    }

    public function setEnabled()
    {
        $this->enabled = true;
    }

    public function unsetEnabled()
    {
        $this->enabled = false;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }
}
