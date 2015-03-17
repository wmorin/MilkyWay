<?php

namespace Milkyway\Model;

class Channel
{
    /**
     * Telemetry Channel ID.
     *
     * @var string
     */
    protected $id;

    /**
     * Mutable string used to identify an object.
     *
     * @var string
     */
    protected $tag;

    /**
     * Type of Channel, either 'default', 'affiliated' or 'virtualized'.
     *
     * @var string
     */
    protected $type;

    /**
     * Name of the channel, used to distinguish different virtual channels.
     *
     * @var string
     */
    protected $name;

    /**
     * Id of the channel that a virtual channel based on.
     *
     * @var int
     */
    protected $parent_channel_id;

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

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setParentChannelId($id)
    {
        $this->parent_channel_id = $id;
    }

    public function getParentChannelId()
    {
        return $this->parent_channel_id;
    }
}
