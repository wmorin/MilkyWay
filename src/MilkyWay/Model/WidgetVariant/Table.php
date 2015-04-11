<?php

namespace MilkyWay\Model\WidgetVariant;

class Table extends AbstractFlow
{
    /**
     * 
     *
     * @var Item\Cell[]
     */
    protected $cells = array();

    /**
     * 
     *
     * @var 
     */
    protected $headers = array();

    public function addCell(Item\Cell $cell)
    {
        $this->cells[] = $cell;
    }

    public function getCells()
    {
        return $this->cells;
    }

    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
