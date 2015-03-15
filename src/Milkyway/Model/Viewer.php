<?php

namespace Milkyway\Model;

class Viewer extends AbstractResponse
{
    /**
     * Globally unique static string identifying the object.
     *
     * @var string
     */
    protected $id;

    /**
     * Tag identifying the viewer.
     * This is used for sending messages to the particular viewer.
     *
     * @var string
     */
    protected $tag;

    /**
     * Code used to add a new viewer in the user interface.
     *
     * @var string
     */
    protected $add_code;

    /**
     * Description to identify the viewer within the interface.
     *
     * @var string
     */
    protected $description;

    /**
     * Last time a viewer was loaded.
     *
     * @var \DateTime
     */
    protected $viewed_at;

    /**
     * User agent of the viewers browser.
     *
     * @var string
     */
    protected $user_agent;

    /**
     * Last IP for the viewer.
     *
     * @var string
     */
    protected $last_ip;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setAddCode($code)
    {
        $this->add_code = $code;
    }

    public function getAddCode()
    {
        return $this->add_code;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setViewedAt(\DateTime $viewedAt)
    {
        $this->viewed_at = $viewedAt;
    }

    public function getViewedAt()
    {
        return $this->viewed_at;
    }

    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
    }

    public function getUserAgent()
    {
        return $this->user_agent;
    }

    public function setLastIp($last_ip)
    {
        $this->last_ip = $last_ip;
    }

    public function getLastIp()
    {
        return $this->last_ip;
    }
}
