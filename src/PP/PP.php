<?php namespace L6Hosting\Perpendicular\PP;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class PP extends AbstractAPI {

	const PP = 'PP';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::PP);
	}

	public function getSavedPaymethodList()
	{
		//
	}

	public function getPluginList()
	{
		//
	}

	public function getLayoutHash()
	{
		//
	}

	public function getRedirectHash()
	{
		//
	}

	public function pay()
	{
		//
	}

	public function getStatus()
	{
		//
	}

}