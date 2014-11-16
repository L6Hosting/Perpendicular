<?php namespace L6Hosting\Perpendicular;

use L6Hosting\Perpendicular\Credentials;

abstract class AbstractAPI {

	const GATE_URL = 'http://127.0.0.1:8080/hspc/xml-api';
	const BASE_NAMESPACE = 'HSPC/API';

	protected $soap;
	protected $credentials;
	protected $gateURL;
	private $namespace;

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		$this->gateURL = (is_null($gateURL)) ? self::GATE_URL : $gateURL;
		$this->credentials = $credentials;
		$this->soap = new \SoapClient($this->gateURL);
	}

}