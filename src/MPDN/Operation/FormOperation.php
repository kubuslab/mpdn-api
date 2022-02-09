<?php

namespace MPDN\Operation;

use InvalidArgumentException;

class FormOperation extends UserOperation {

    /**
     * @param  string $token Token form to be reset
     * 
     * @return array
     * @throws ApiException
     */
    public function requestReset($token)
    {
        if (empty($token))
            throw new InvalidArgumentException('Request for resetting form required form token to be suplied', 802);

        $this->url = 'ws/ui/freset/' . $token;

        return $this->execute();
    }
}