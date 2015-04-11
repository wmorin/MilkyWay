<?php

namespace MilkyWay\Model;

class User
{
    /**
     * Globally unique static string identifying the object.
     *
     * @var string
     */
    protected $id;

    /**
     * Name to identify the user.
     *
     * @var string
     */
    protected $name;

    /**
     * Email address of the user.
     *
     * @var string
     */
    protected $email;

    /**
     * Last login IP for the user.
     *
     * @var string
     */
    protected $last_login_ip;

    /**
     * Last login date for the user.
     *
     * @var \DateTime
     */
    protected $last_login_date;

    /**
     * Browser agent.
     *
     * @var string
     */
    protected $user_agent;

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

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setLastLoginIp($ip)
    {
        $this->last_login_ip = $ip;
    }

    public function getLastLoginIp()
    {
        return $this->last_login_ip;
    }

    public function setLastLoginDate(\DateTime $lastLoginAt)
    {
        $this->last_login_date = $lastLoginAt;
    }

    public function getLastLoginDate()
    {
        return $this->last_login_date;
    }

    public function setUserAgent($userAgent)
    {
        $this->user_agent = $userAgent;
    }

    public function getUserAgent()
    {
        return $this->user_agent;
    }
}
