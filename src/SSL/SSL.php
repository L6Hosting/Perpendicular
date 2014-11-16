<?php namespace L6Hosting\Perpendicular\SSL;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class SSL extends AbstractAPI {

	const SSL = 'SSL';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::SSL);
	}

	public function getCertForm()
	{
		//
	}

	public function validateCertForm()
	{
		//
	}

	public function getParsedCsrData()
	{
		//
	}

}
