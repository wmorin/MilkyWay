<?php

namespace Milkyway\Model;

class Notification
{
    /**
     * Tag for the channel.
     * You can find this tag by looking at the channels tab for a board.
     *
     * @var string
     */
    protected $tag;

    /**
     * Title for the notification.
     *
     * @var string
     */
    protected $title;

    /**
     * Message to show.
     *
     * @var string
     */
    protected $message;

    /**
     * Name of an icon from the Font Awesome library of icons.
     *
     * @var string
     */
    protected $icon;

    /**
     * How long to display the alert for in ms (optional, defaults to 10,000ms, minimum 1000ms).
     *
     * @var int
     */
    protected $duration;

    /**
     * URL for a sound to play. Can also be set to 'default' to use a default sound.
     *
     * @var string
     */
    protected $sound_url;

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setSoundUrl($url)
    {
        $this->sound_url = $url;
    }

    public function getSoundUrl()
    {
        return $this->sound_url;
    }
}
