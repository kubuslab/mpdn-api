<?php

namespace MPDN\Operation;

class SessionOperation extends UserOperation {

    /**
     * Check user status for this session.
     * 
     * @return array
     * @throws ApiException
     */
    public function check()
    {
        $this->url = '/ws/usr/session';

        return $this->execute();
    }
}