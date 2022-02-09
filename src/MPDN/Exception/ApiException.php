<?php

namespace MPDN\Exception;

/**
 * Class ApiException
 */
class ApiException extends \Exception
{
    protected $httpCode;

    /**
     * Create new instance of ApiException
     * 
     * @param string $message   error message
     * @param string $errorCode error code return with message
     * @param string $httpCode  http status code response
     */
    public function __construct($message, $errorCode, $httpCode)
    {
        if (!$message) {
            throw new $this('Unknown '. get_class($this));
        }
        parent::__construct($message, $errorCode);
        $this->httpCode = $httpCode;
    }

    /**
     * Get http code
     * 
     * @return string
     */
    public function getHttpCode() 
    {
        return $this->httpCode;
    }

}
