<?php

namespace Dashboard\Client;

interface ClientInterface
{
    function addUpdate($flowTag, $payload);
}
