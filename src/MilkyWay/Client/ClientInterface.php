<?php

namespace MilkyWay\Client;

use MilkyWay\Model\FlowInterface;

interface ClientInterface
{
    public function updateFlow(FlowInterface $flow, $widgetVariant);
}
