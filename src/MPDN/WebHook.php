<?php
namespace MPDN;

use InvalidArgumentException;
use MPDN\Exception\ApiException;
use MPDN\Helper\Security;
use MPDN\WebHook\Request;

/**
 * WebHook Validation and Consumer library
 */
class WebHook
{
	
	/**
	 * MPDN FULL Version
	 */
	const VERSION_FULL = 'FULL';

	/**
	 * MPDN DEMO Version
	 */
	const VERSION_DEMO = 'DEMO';

	/**
	 * Header for WebHook Validation
	 */
	const HEADER_WEBHOOK_VALIDATION = 'X-Mpdn-Validation';

	/**
	 * Header for WebHook Version
	 */
	const HEADER_WEBHOOK_VERSION = 'X-Mpdn-Version';

	/**
	 * Query param for WebHook Validation
	 */
	const QUERYPARAM_WEBHOOK_VALIDATION = 'xkey';

	/**
	 * Query param for WebHook Version
	 */
	const QUERYPARAM_WEBHOOK_VERSION = 'xversion';

	/**
	 * When $mode = LIBRARY_MODE_WEBHOOK, $validateFrom must be one of 
	 * VALIDATE_FROM_HEADER or VALIDATE_FROM_QUERY_PARAM
	 */
	const VALIDATE_FROM_HEADER      = 'header';
	const VALIDATE_FROM_QUERY_PARAM = 'queryParam';

	/**
	 * Flag for MPDN FULL version used or not
	 * @var bool
	 */
	private $full;

	/**
	 * Validation Key for WebHook Mode
	 * @var string
	 */
	private $validationKey;

	/**
	 * Security Helper
	 * @var Security
	 */
	private $security;

	/**
	 * singleton object
	 * @var WebHook
	 */
	private static $instance;

	/**
	 * Prepare for MPDN WebHooks consumer.
	 * 
	 * @param string $globalApiKey Global API Key
	 * @param bool $full Full version app used or not
	 * 
	 * @return WebHook
	 * @throws InvalidArgumentException
	 */
	public static function prepare($validationKey, $full, $validateFrom = 'header')
	{
		if (!isset(self::$instance))
		{
			if (!in_array($validateFrom, [self::VALIDATE_FROM_HEADER, self::VALIDATE_FROM_QUERY_PARAM]))
			{
				throw new InvalidArgumentException('Param 3 must be one of MPDN::VALIDATE_FROM_HEADER or MDPN:VALIDATE_FROM_QUERY_PARAM', 800);
			}

			self::$instance = new WebHook($validationKey, $full, $validateFrom);
		}

		return self::$instance;
	}

	/**
	 * Get MPDN WebHook Consumer instance
	 * 
	 * @return WebHook
	 */
	public static function instance()
	{
		return self::$instance;
	}

	protected function __construct($validationKey, $full, $validateFrom = 'header')
	{
		$this->validationKey = $validationKey;
		$this->validateFrom = $validateFrom;
		$this->full = $full === true;

		$this->security = new Security();
	}

    /**
     * Validate WebHook request coming from MPDN Server
     * 
     * @return void
     * @@throws ApiException throw exception if validation failed
     */
    public function validation()
    {
    	switch ($this->validateFrom)
    	{
    		case self::VALIDATE_FROM_QUERY_PARAM:
    			$get = $this->parseGet();

    			if (!isset($get[self::QUERYPARAM_WEBHOOK_VALIDATION]))
    			{
    				throw new ApiException('Invalid WebHook request', 901, null);
    			}
    			elseif ($get[self::QUERYPARAM_WEBHOOK_VALIDATION] != $this->validationKey)
    			{
    				throw new ApiException('Invalid WebHook Validation Key', 902, null);
    			}

    			if (isset($get[self::QUERYPARAM_WEBHOOK_VERSION]))
    			{
    				if ($this->full && $get[self::QUERYPARAM_WEBHOOK_VERSION] != self::VERSION_FULL)
    				{
    					throw new ApiException('Wrong version of MPDN source', 903, null);
    				}
    				elseif (!$this->full && $get[self::QUERYPARAM_WEBHOOK_VERSION] != self::VERSION_DEMO)
    				{
    					throw new ApiException('Wrong version of MPDN source', 903, null);
    				}
    			}
    			break;
    		case self::VALIDATE_FROM_HEADER:
    		default:
    			$headers = $this->parseHeader();

    			if (!isset($headers[self::HEADER_WEBHOOK_VALIDATION]))
    			{
    				throw new ApiException('Invalid WebHook request', 901, null);
    			}
    			elseif ($headers[self::HEADER_WEBHOOK_VALIDATION] != $this->validationKey)
    			{
    				throw new ApiException('Invalid WebHook Validation Key', 902, null);
    			}

    			if (isset($headers[self::HEADER_WEBHOOK_VERSION]))
    			{
    				if ($this->full && $headers[self::HEADER_WEBHOOK_VERSION] != self::VERSION_FULL)
    				{
    					throw new ApiException('Wrong version of MPDN source', 903, null);
    				}
    				elseif (!$this->full && $headers[self::HEADER_WEBHOOK_VERSION] != self::VERSION_DEMO)
    				{
    					throw new ApiException('Wrong version of MPDN source', 903, null);
    				}
    			}
    			break;
    	}
    }

    /**
     * Consume WebHook request coming from MPDN Server
     * 
     * @param  array $input [optional] input from post data can be supplied, 
     * 						if there is other specific mechanism to provide
     * 						POST DATA.
     * 
     * @return Request
     */
    public function consume($input = [])
    {
    	$input = $this->parsePost() + $input;

    	$request = new Request($input);
    	return $request;
    }

    private function parseGet()
    {
    	return $this->fetchInput($_GET);
    }

    private function parsePost()
    {
    	$post = $this->fetchInput($_POST);

    	// process request Body
    	$body = file_get_contents('php://input');
    	if (!empty($body))
    	{
    		// convert json boady and merge with $post
    		$json = json_decode($body, true);
    		$post = $json + $post;
    	}

    	return $post;
    }

    private function parseHeader()
    {
    	$headers = [];

    	// In Apache, you can simply call apache_request_headers()
		if (function_exists('apache_request_headers'))
		{
			$headers = apache_request_headers();
		}
		else
		{
			isset($_SERVER['CONTENT_TYPE']) && $headers['Content-Type'] = $_SERVER['CONTENT_TYPE'];

			foreach ($_SERVER as $key => $val)
			{
				if (sscanf($key, 'HTTP_%s', $header) === 1)
				{
					// take SOME_HEADER and turn it into Some-Header
					$header = str_replace('_', ' ', strtolower($header));
					$header = str_replace(' ', '-', ucwords($header));

					$headers[$header] = $_SERVER[$key];
				}
			}
		}

		return $this->fetchInput($headers);
    }

    private function fetchInput(&$array, $index = null, $xss = true)
    {
    	if (!isset($index))
    	{
    		$index = array_keys($array);
    	}

    	if (is_array($index))
    	{
    		$output = array();
			foreach ($index as $key)
			{
				$output[$key] = $this->fetchInput($array, $key, $xss);
			}

			return $output;
    	}

    	if (isset($array[$index]))
		{
			$value = $array[$index];
		}
		// Does the index contain array notation
		elseif (($count = preg_match_all('/(?:^[^\[]+)|\[[^]]*\]/', $index, $matches)) > 1)
		{
			$value = $array;
			for ($i = 0; $i < $count; $i++)
			{
				$key = trim($matches[0][$i], '[]');

				// Empty notation will return the value as array
				if ($key === '')
				{
					break;
				}

				if (isset($value[$key]))
				{
					$value = $value[$key];
				}
				else
				{
					return NULL;
				}
			}
		}
		else
		{
			return NULL;
		}

		return ($xss === TRUE)
			? $this->security->xss_clean($value)
			: $value;
    }
}