<?php namespace L6Hosting\Perpendicular\Account;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Account extends AbstractAPI {

	const ACCOUNT = 'Account';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::ACCOUNT);
	}

	public function createCustomer()
	{
		//
	}

	public function createDomainContact()
	{
		//
	}

	public function createReseller()
	{
		//
	}

	public function getAccountInfo()
	{
		//
	}

	public function getDomainContactList()
	{
		//
	}

	public function getResellerTerms()
	{
		//
	}

	public function validatePassword()
	{
		//
	}

	public function getExtendedAttrList()
	{
		//
	}

	public function getPersonList()
	{
		//
	}

}
