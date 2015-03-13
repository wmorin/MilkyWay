<?php

namespace Milkyway\Entity;

class Account
{
    /**
     * Telemetry Account ID.
     *
     * @var int
     */
    protected $id;

    /**
     * Name of the account.
     *
     * @var string
     */
    protected $name;

    /**
     * Plan of the account.
     *
     * @var string
     */
    protected $plan;

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

    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    public function getPlan()
    {
        return $this->plan;
    }
}
