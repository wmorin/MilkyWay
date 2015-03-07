<?php

namespace Milkyway\Flow;

interface FlowInterface
{
    public function setExpiresAt($time);
    public function getExpiresAt();
    public function setOpacity($opacity);
    public function getOpacity();
    public function setTitle($title);
    public function getTitle();
}
