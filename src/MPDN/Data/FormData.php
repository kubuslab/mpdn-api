<?php

namespace MPDN\Data;

use MPDN\Data;

/**
 * Maternal Death Notification data structure
 */
class FormData extends Data
{
    /**
    *
    * @var string
    */
    protected $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}