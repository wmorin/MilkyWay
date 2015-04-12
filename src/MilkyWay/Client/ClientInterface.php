<?php

namespace Dashboard\Client;

interface ClientInterface
{
    public function addUpdate(Flow $flow, AbstractFlow $widgetVariant);
}
