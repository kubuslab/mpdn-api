<?php

namespace MPDN\Operation;

use MPDN\MPDN;

abstract class AbstractOperation {

	protected $method = 'GET';
	protected $url;
	protected $params = [];
	protected $headers = [];

	/**
     * @param  Operation $operation MPDN operation object
     * 
     * @return array
     * @throws ApiException
     */
    protected function execute() {
		$client = MPDN::instance()->getHttpClient();

    	list($rbody, $rcode, $rheaders) = $client->sendRequest($this->method, $this->url, 
    		$this->params, $this->headers);

    	return $rbody;
	}

	protected function addQueryParams($key, $value)
	{
		if (!isset($this->params['queryParams']))
			$this->params['queryParams'] = [];

		$this->params['queryParams'][$key] = $value;
	}
}