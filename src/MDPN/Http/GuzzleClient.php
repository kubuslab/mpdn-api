<?php

namespace MPDN\Http;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use MPDN\Exception\ApiException;
use MPDN\MPDN;

/**
 * Class Guzzle Client interface for MPDN
 *
 */
class GuzzleClient implements ClientInterface
{
    /**
     * Guzzle
     * @var Guzzle
     */
    protected $http;

    public function __construct($baseUrl, $config = [])
    {
        $config = $config + [
            'base_uri' => $baseUrl,
            'verify' => false,
            'timeout' => 45
        ];
        $this->http = new Guzzle($config);
    }

    /**
     * Send Http request
     *
     * @param string $method         request method
     * @param string $url            url
     * @param array  $defaultHeaders request headers
     * @param array  $params         parameters
     *
     * @return array
     * @throws ApiException
     */
    public function sendRequest($method, string $url, $params, array $defaultHeaders = [])
    {
        $method = strtoupper($method);

        $opts = [];

        $opts['method'] = $method;
        $opts['headers'] = $defaultHeaders;
        $opts['params'] = $params;

        $response = $this->executeRequest($opts, $url);
        
        $rbody = $response[0];
        $rcode = $response[1];
        $rheader = $response[2];

        return [$rbody, $rcode, $rheader];
    }
    
    /**
     * Execute request
     *
     * @param array  $opts request options (headers, params)
     * @param string $url  request url
     *
     * @return array
     * @throws ApiException
     */
    private function executeRequest(array $opts, string $url)
    {
        $headers = $opts['headers'];
        $params = $opts['params'];
        $url = strval($url);

        $client = MPDN::instance();
        $globalApiKey = $client->getGlobalApiKey();
        $headers[MPDN::HEADER_GLOBAL_KEY] = $globalApiKey;

        $options = [
            RequestOptions::HEADERS => $headers
        ];

        try {
            if (count($params) > 0) {

                // additional condition to check if the requestor is imposing query param, otherwise default json
                $queryParams = isset($params['queryParams']) && !empty($params['queryParams']) ? $params['queryParams'] : [];
                
                if(!empty($queryParams))
                {
                    unset($params['query-param']);
                    $options[RequestOptions::QUERY] = $queryParams;
                }
                
                if (!empty($params))
                {
                    $options[RequestOptions::JSON] = $params;
                }
            }
                
            $response =  $this->http->request($opts['method'], $url, $options);

        } catch (RequestException $e) {
            $response = $e->getResponse();
            $rbody = json_decode($response->getBody()->getContents(), true);
            $rcode = $response->getStatusCode();
            $rheader = $response->getHeaders();
    
            self::handleError($rbody, $rcode, $rheader);
        }

        $rbody = $response->getBody();
        $rcode = (int) $response->getStatusCode();
        $rheader = $response->getHeaders();

        if (isset($rbody['message']['tipe']) && $rbody['message']['tipe'] == 'error')
        {
            $this->handleError($rbody, $rcode, $rheader);
        }

        return [$rbody, $rcode, $rheader];
    }

    /**
     * Handles API Error
     *
     * @param array $rbody response body from GuzzleClient
     * @param string $rcode http status code
     * @param array $rheader http headers
     *
     * @return void
     * @throws ApiException
     */
    private static function handleError($rbody, $rcode, $rheader)
    {
        if (isset($rbody['message']['pesan']))
        {
            $message = $rbody['message']['pesan'];
            $errCode = isset($rbody['message']['kode']) ? $rbody['message']['kode'] : null;
        }
        else
        {
            $message = 'Unknown error';
            $errCode = null;
        }

        throw new ApiException($message, $errCode, $rcode);
    }
}
