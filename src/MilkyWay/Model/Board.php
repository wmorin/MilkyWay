<?php

namespace MilkyWay\Model;

class Board
{
    /**
     * Telemetry Board ID.
     *
     * @var int
     */
    public $id;

    /**
     * Name of the board.
     *
     * @var string
     */
    public $name;

    /**
     * Theme for the board.
     *
     * @var string
     */
    public $theme;

    /**
     * Number of columns in the board grid.
     *
     * @var int
     */
    public $columns;

    /**
     * Number of rows in the board grid.
     *
     * @var int
     */
    public $rows;

    /**
     * Native size of the board.
     *
     * @var array
     */
    public $size = [];

    /**
     * Aspect ratio of the board.
     *
     * @var string
     */
    public $aspect_ratio;

    /**
     * Whether to show the board name at the top of the board or not.
     *
     * @var boolean
     */
    public $display_board_name = false;

    /**
     * Tag for the default channel for the board.
     *
     * @var string
     */
    public $channel_tag;

    /**
     * External margin of a widget.
     *
     * @var int
     */
    public $widget_margins = 3;

    /**
     * Internal padding of a widget.
     *
     * @var int
     */
    public $widget_padding = 8;

    /**
     * Size of the font to use, can be 'small', 'normal' or 'large'.
     *
     * @var string
     */
    public $font_size;

    /**
     * Font family to use.
     *
     * @var string
     */
    public $font_family = 'normal';

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setSize(array $size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setAspectRatio($aspectRatio)
    {
        $this->aspect_ratio = $aspectRatio;
    }

    public function getAspectRatio()
    {
        return $this->aspect_ratio;
    }

    public function unsetDisplayBoardName()
    {
        $this->display_board_name = false;
    }

    public function setDisplayBoardName()
    {
        $this->display_board_name = true;
    }

    public function getDisplayBoardName()
    {
        return $this->display_board_name;
    }

    public function setChannelTag($tag)
    {
        $this->channel_tag = $tag;
    }

    public function getChannelTag()
    {
        return $this->channel_tag;
    }

    public function setWidgetMargins($margins)
    {
        $this->widget_margins = $margins;
    }

    public function getWidgetMargins()
    {
        return $this->widget_margins;
    }

    public function setWidgetPadding($padding)
    {
        $this->widget_padding = $padding;
    }

    public function getWidgetPadding()
    {
        return $this->widget_padding;
    }

    public function setFontSize($size)
    {
        $this->font_size = $size;
    }

    public function getFontSize()
    {
        return $this->font_size;
    }

    public function setFontFamily($family)
    {
        $this->font_family = $family;
    }

    public function getFontFamily()
    {
        return $this->font_family;
    }
}
