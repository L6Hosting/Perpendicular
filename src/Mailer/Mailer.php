<?php namespace L6Hosting\Perpendicular\Mailer;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Mailer extends AbstractAPI {

	const MAILER = 'Mailer';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::MAILER);
	}

	public function send()
	{
		//
	}

}
