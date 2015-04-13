<?php

namespace MilkyWay\Model\WidgetVariant;

class Map extends AbstractFlow
{
    const TYPE_DARK = 'dark';
    const TYPE_LIGHT = 'light';
    const TYPE_SATELLITE = 'satellite';

    /**
     * @var Item\Circle[]
     */
    public $circles = array();

    /**
     * @var Item\Coord[]
     */
    public $coords = array();

    /**
     * @var string
     */
    public $mapbox_id;

    /**
     * @var Item\Marker[]
     */
    public $markers = array();

    /**
     * @var Item\Polygon[]
     */
    public $polygons = array();

    /**
     * @var Item\Polyline[]
     */
    public $polylines = array();

    /**
     * @var
     */
    public $type;

    public function addCircle(Item\Circle $circle)
    {
        $this->circles[] = $circle;
    }

    public function getCircles()
    {
        return $this->circles;
    }

    public function setCoord(Item\Coord $coord)
    {
        $this->coords = $coord;
    }

    public function getCoords()
    {
        return $this->coords;
    }

    public function setMapBoxId($id)
    {
        $this->mapbox_id = $id;
    }

    public function getMapboxId()
    {
        return $this->mapbox_id;
    }

    public function addMarker(Item\Marker $marker)
    {
        $this->markers[] = $marker;
    }

    public function getMarkers()
    {
        return $this->markers;
    }

    public function addPolygon(Item\Polygon $polygon)
    {
        $this->polygons[] = $polygon;
    }

    public function getPolygons()
    {
        return $this->polygons;
    }

    public function addPolyline(Item\Polyline $polyLine)
    {
        $this->polylines[] = $polyLine;
    }

    public function getPolylines()
    {
        return $this->polylines;
    }

    public function SetTypeDark()
    {
        $this->type = self::TYPE_DARK;
    }

    public function SetTypeSatellite()
    {
        $this->type = self::TYPE_SATELLITE;
    }

    public function SetTypeLight()
    {
        $this->type = self::TYPE_LIGHT;
    }

    public function setType($type)
    {
        switch ($type) {
            case self::TYPE_DARK:
            case self::TYPE_SATELLITE:
            case self::TYPE_LIGHT:
                $this->type = $type;
                break;
            default:
                throw new MilkywayRuntimeException();
                break;
        }
    }

    public function getType()
    {
        return $this->type;
    }
}
