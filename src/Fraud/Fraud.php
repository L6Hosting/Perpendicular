<?php namespace L6Hosting\Perpendicular\Fraud;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Fraud extends AbstractAPI {

	const FRAUD = 'Fraud';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::FRAUD);
	}

	public function getWarningNewpaymethod()
	{
		//
	}

	public function getResumeNewpaymethod()
	{
		//
	}

	public function getSafeDescription()
	{
		//
	}

}