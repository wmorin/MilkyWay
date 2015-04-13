<?php

namespace MilkyWay\Model\WidgetVariant;

class Table extends AbstractFlow
{
    /**
     * @var Item\Cell[]
     */
    public $cells = array();

    /**
     * @var string[]
     */
    public $headers = array();

    public function addCell(Item\Cell $cell)
    {
        $this->cells[] = [ $cell ];
    }

    public function getCells()
    {
        return $this->cells;
    }

    public function addRow(array $cells)
    {
        $this->cells[] = $cells;
    }

    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    public function addHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
