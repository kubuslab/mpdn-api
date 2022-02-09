<?php

namespace MPDN\Operation;

use InvalidArgumentException;
use MPDN\MPDN;

abstract class UserOperation extends AbstractOperation {

	protected $userApiKey;

	public function __construct($userApiKey)
	{
		if (empty($userApiKey) || !is_string($userApiKey))
			throw new InvalidArgumentException('User API Key required for User Operation', 801);
			
		$this->userApiKey = $userApiKey;
	}

    /**
     * Get the value of userApiKey
     *
     * @return string Secret API key
     */
    public function getUserApiKey()
    {
        return $this->userApiKey;
    }

    /**
     * Set the value of userApiKey
     *
     * @param string $userApiKey Secret API key
     *
     * @return void
     */
    public function setUserApiKey($userApiKey)
    {
        $this->userApiKey = $userApiKey;
    }

	/**
     * @param  Operation $operation MPDN operation object
     * 
     * @return array
     * @throws ApiException
     */
    protected function execute() {
    	$this->headers[MPDN::HEADER_USER_KEY] = $this->userApiKey;
    	
    	return parent::execute();
	}
}