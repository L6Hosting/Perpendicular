<?php namespace L6Hosting\Perpendicular\Person;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Person extends AbstractAPI {

	const PERSON = 'Person';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::PERSON);
	}

	public function authPerson()
	{
		//
	}

	public function getPersonInfo()
	{
		//
	}

}