<?php

namespace MPDN\WebHook;

/**
 * WebHook Request message item
 * Format Body
 * {
    'referensi': '',
    'judul': '',
    'konten': '',
    'tipe': ''
 * }
 */
class Message
{

    private $refenceId;

    private $title;

    private $content;

    private $type;

    public function __construct($array)
    {
        if (isset($array['referensi']))
        {
            $this->refenceId = $array['referensi'];
        }

        if (isset($array['judul']))
        {
            $this->title = $array['judul'];
        }

        if (isset($array['konten']))
        {
            $this->content = $array['konten'];
        }

        if (isset($array['tipe']))
        {
            $this->type = $array['tipe'];
        }
    }

    public function getReferenceId()
    {
        return $this->refenceId;
    }

    public function setReferenceId($refenceId)
    {
        $this->refenceId = $refenceId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}