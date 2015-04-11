<?php

namespace MilkyWay\Model;

class Widget
{
    /**
     * Globally unique static string identifying the object.
     *
     * @var string
     */
    protected $id;

    /**
     * Globally unique static string identifying the board
     * that the widget belongs to.
     *
     * @var string
     */
    protected $board_id;

    /**
     * Variant of the widget.
     * Possible values are:
     * barchart, box, bulletchart, clock, compass,
     * countdown, funnelchart, gauge, graph, grid,
     * icon, iframe, image, log, map, multigauge,
     * multivalue, piechart, scatterplot, servers,
     * status, table, text, tickertape, timeline,
     * timeseries, upstatus, value, video,
     * waterfall, weather.
     *
     * @var string
     */
    protected $variant;

    /**
     * Column of the top left of the widget on a board.
     *
     * @var int
     */
    protected $column;

    /**
     * Row of the top left of the widget on a board.
     *
     * @var int
     */
    protected $row;

    /**
     * Width of a widget in columns.
     *
     * @var int
     */
    protected $width;

    /**
     * Height of a widget in rows.
     *
     * @var int
     */
    protected $height;

    /**
     * Layer sorting order of the widget within the board.
     *
     * @var int
     */
    protected $in_board_index;

    /**
     * Background color of the widget
     * Possible values are:
     * - "default" => The background will be dark/light depends on
     *   the selected theme of the board
     * - "none" => Transparent background
     * - Hex code (e.g. #09ab3f) => Hex code of a color.
     *
     * @var string
     */
    protected $background;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId($id)
    {
        return $this->id;
    }

    public function setBoardId($id)
    {
        $this->board_id = $id;
    }

    public function getBoardId()
    {
        return $this->board_id;
    }

    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    public function getVariant()
    {
        return $this->variant;
    }

    public function setColumn($column)
    {
        $this->column = $column;
    }

    public function getColumn()
    {
        return $this->column;
    }

    public function setRow($row)
    {
        $this->row = $row;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setInBoardIndex($index)
    {
        $this->in_board_index = $index;
    }

    public function getInBoardIndex()
    {
        return $this->in_board_index;
    }

    public function setBackground($background)
    {
        $this->background = $background;
    }

    public function getBackground()
    {
        return $this->background;
    }
}
