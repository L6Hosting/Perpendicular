<?php namespace L6Hosting\Perpendicular\Config;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Config extends AbstractAPI {

	const CONFIG = 'Config';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::CONFIG);
	}

	public function getProviderConfig()
	{
		return $this->call('get_provider_config');
	}

}
