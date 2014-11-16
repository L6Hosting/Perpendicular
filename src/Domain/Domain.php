<?php namespace L6Hosting\Perpendicular\Domain;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Domain extends AbstractAPI {

	const DOMAIN = 'Domain';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::DOMAIN);
	}

	public function checkDomainList()
	{
		//
	}

	public function checkDomainNameSyntax()
	{
		//
	}

	public function getDomainList()
	{
		//
	}

	public function validateNsList()
	{
		//
	}

	public function saveContact()
	{
		//
	}

	public function validateDomainData()
	{
		//
	}
}
