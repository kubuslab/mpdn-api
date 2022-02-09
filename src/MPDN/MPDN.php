<?php
namespace MPDN;

use MPDN\Http\ClientInterface;
use MPDN\Http\GuzzleClient;

class MPDN {
	/**
	 * Library Version
	 */
	const VERSION = '0.0.1';

	/**
	 * BASEPATH for MPDN FULL version
	 */
	const BASEPATH_FULL = 'https://mpdn.kubuslab.id/api/';

	/**
	 * BASEPATH for MPDN DEMO version
	 */
	const BASEPATH_DEMO = 'https://demompdn.kubuslab.id/api/';

	/**
	 * Header for GLOBAL API KEY
	 */
	const HEADER_GLOBAL_KEY = 'X-GLOBAL-KEY';
	
	/**
	 * Header for USER API KEY
	 */
	const HEADER_USER_KEY = 'X-USER-KEY';

	//region Constants for MPDN Data
	//region Type of Maternal or Perinatal Death Notification list
	const TYPE_ALAMAT_DOMISILI   = 'AD';
	const TYPE_ALAMAT_KTP        = 'AK';
	const TYPE_ALAMAT_MATI       = 'AM';
	const TYPE_ALAMAT_LAHIR      = 'AL';
	//endregion

	//region Type of filter on Facitilty query list
	const TYPE_FASKES_SEMUA      = 'SEMUA';
	const TYPE_FASKES_RS         = 'RS';
	const TYPE_FASKES_KLINIK     = 'KLINIK';
	const TYPE_FASKES_PUSKESMAS  = 'PKM';
	//endregion

	//region Version of individual Maternal or Perinatal data (located on field 'baris' for each row)
	const DATA_VERSION_ORIGINAL  = 'O';
	const DATA_VERSION_DUPLICATE = 'D';
	const DATA_VERSION_ANNULLED  = 'A';
	const DATA_VERSION_FINAL     = 'F';
	//endregion

	//region Validation Status of individual Maternal or Perinatal data (located on field 'status' for each row)
	const DATA_STATUS_INVALID           = 'I';
	const DATA_STATUS_VALID_WITH_KTP    = 'V';
	const DATA_STATUS_VALID_WITHOUT_KTP = 'N';
	const DATA_STATUS_VERIFIED          = 'F';
	//endregion
	//endregion

	/**
	 * Flag for MPDN FULL version used or not
	 * @var bool
	 */
	private $full;

	/**
	 * Additional Http Client config
	 * @var array
	 */
	private $config = [];

	/**
	 * Base path URL
	 * @var string
	 */
	private $baseUrl;

	/**
	 * Global API Key
	 * @var string
	 */
	private $globalApiKey;

	/**
	 * Http Client Inteface
	 * @var ClientInterface
	 */
	private $http;

	/**
	 * singleton object
	 * @var MPDN
	 */
	private static $instance;

	/**
	 * Prepare MPDN API Client instance.
	 * 
	 * @param string $globalApiKey Global API Key
	 * @param bool $full Full version app used or not
	 * 
	 * @return MPDN
	 */
	public static function prepare($globalApiKey, $full = false, $config = [])
	{
		if (!isset(self::$instance))
		{
			self::$instance = new MPDN($globalApiKey, $full, $config);
		}

		return self::$instance;
	}

	/**
	 * Get MPDN API Client instance
	 * 
	 * @return MPDN
	 */
	public static function instance()
	{
		if (isset(self::$instance))
		{
			self::$instance->initHttp();
		}

		return self::$instance;
	}

	protected function __construct($globalApiKey, $full, $config = [])
	{
		$this->globalApiKey = $globalApiKey;
		$this->full = $full === true;
		$this->config = $config;
		$this->baseUrl = $this->full ? self::BASEPATH_FULL : self::BASEPATH_DEMO;
	}

	private function initHttp()
	{
		if (!isset($this->http))
		{
			$this->http = new GuzzleClient($this->baseUrl, $this->config);
		}
	}

	/**
     * Get current http client interface
     *
     * @return ClientInterface
     */
    public function getHttpClient()
	{
		return $this->http;
	}

	/**
     * Set custom http client interface
     *
     * @param CLientInterface $http custom http client
     * 
     * @return MPDN
     */
    public function setHttpClient(ClientInterface $http)
	{
		$this->http = $http;

		return $this;
	}

    /**
     * BaseUrl path getter
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * BaseUrl path setter
     *
     * @param string $baseUrl api base url
     *
     * @return void
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Get the value of globalApiKey
     *
     * @return string Secret API key
     */
    public function getGlobalApiKey()
    {
        return $this->globalApiKey;
    }

    /**
     * Set the value of globalApiKey
     *
     * @param string $globalApiKey Secret API key
     *
     * @return void
     */
    public function setGlobalApiKey($globalApiKey)
    {
        $this->globalApiKey = $globalApiKey;

        return $this;
    }

    /**
     * Check weather if MPDN FULL Version BASEPATH used
     * 
     * @return boolean
     */
    public function isFullVersion()
    {
    	return $this->full === true;
    }

    /**
     * Set weather if MPDN use FULL Version or not
     * 
     * @param bool $full
     * 
     * @return MPDN
     */
    public function setFullVersion($full)
    {
    	$this->full = $full === true;

    	return $this;
    }

    /**
     * Http client config
     * 
     * @return array
     */
    public function getConfig()
    {
    	return $this->config;
    }

    /**
     * Set config for Http client
     * 
     * @param array $config
     *
     * @return MPDN
     */
    public function setConfig($config)
    {
    	$this->config = $config;

    	return $this;
    }
}
