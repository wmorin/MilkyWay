<?php

namespace MilkyWay;

use GuzzleHttp\Stream\StreamInterface;

abstract class AbstractResponse
{
    public static function decodeStream(StreamInterface $stream)
    {
        return array(self::fromResponse(json_decode($stream->getContents())));
    }
}
