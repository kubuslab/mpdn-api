<?php

namespace MPDN\Http;

use MPDN\Exception\ApiException;

interface ClientInterface {

	/**
     * Send a request
     *
     * @param string $method         request method
     * @param string $url            url
     * @param array  $params         parameters
     * @param array  $headers request headers
     *
     * @return array
     * @throws ApiException
     */
    public function sendRequest($method, string $url, $params, array $headers = []);
}