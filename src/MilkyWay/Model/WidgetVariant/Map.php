<?php

namespace MilkyWay\Model\WidgetVariant;

class Map extends AbstractFlow
{
    /**
     * 
     *
     * @var Item\Circle[]
     */
    protected $circles = array();

    /**
     * 
     *
     * @var Item\Coord[]
     */
    protected $coords = array();

    /**
     * 
     *
     * @var 
     */
    protected $mapboxId;

    /**
     * 
     *
     * @var Item\Marker[]
     */
    protected $markers = array();

    /**
     * 
     *
     * @var Item\Polygon[]
     */
    protected $polygons = array();

    /**
     * 
     *
     * @var Item\Polyline[]
     */
    protected $polylines = array();

    /**
     * 
     *
     * @var 
     */
    protected $type;

    public function addCircle(Item\Circle $circle)
    {
        $this->circles[] = $circle;
    }

    public function getCircles()
    {
        return $this->circles;
    }

    public function addCoord(Item\Coord $coord)
    {
        $this->coords[] = $coord;
    }

    public function getCoords()
    {
        return $this->coords;
    }

    public function setMapBoxId($id)
    {
        $this->mapboxId = $id;
    }

    public function getMapboxId()
    {
        return $this->mapboxId;
    }

    public function setMarkers(Item\Marker $marker)
    {
        $this->markers[] = $marker;
    }

    public function getMarkers()
    {
        return $this->markers;
    }

    public function setPolygons(Item\Polygon $polygon)
    {
        $this->polygons[] = $polygon;
    }

    public function getPolygons()
    {
        return $this->polygons;
    }

    public function setPolylines(Item\Polyline $polyLine)
    {
        $this->polylines[] = $polyLine;
    }

    public function getPolylines()
    {
        return $this->polylines;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
