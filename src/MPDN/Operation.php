<?php

namespace MPDN;

abstract class Operation {

	abstract protected function getMethod();
	abstract protected function getUrl();
	abstract protected function getParams();
	abstract protected function getHeaders();

	/**
     * @param  Operation $operation MPDN operation object
     * 
     * @return array
     */
    protected function execute() {
		$client = MPDN::instance()->getHttpClient();

    	list($rbody, $rcode, $rheaders) = $client->sendRequest($this->getMethod(), $this->getUrl(), 
    		$this->getParams(), $this->getHeaders());

    	return $rbody;
	}
}