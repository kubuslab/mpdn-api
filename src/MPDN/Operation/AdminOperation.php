<?php

namespace MPDN\Operation;

use MPDN\MPDN;

abstract class AdminOperation extends AbstractOperation {

	/**
     * @param  Operation $operation MPDN operation object
     * 
     * @return array
     * @throws ApiException
     */
    protected function execute() {
    	$this->headers[MPDN::HEADER_USER_KEY] = MPDN::instance()->getGlobalApiKey();
    	
    	return parent::execute();
	}
}