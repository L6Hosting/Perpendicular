<?php namespace L6Hosting\Perpendicular;

use L6Hosting\Perpendicular\Credentials;

abstract class AbstractAPI {

	const GATE_URL = 'http://127.0.0.1:8080/hspc/xml-api';
	const BASE_NAMESPACE = 'HSPC/API/1.0';

	protected $soap;
	protected $credentials;
	protected $gateURL;
	protected $namespace;

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		$this->gateURL = (is_null($gateURL)) ? self::GATE_URL : $gateURL;
		$this->credentials = $credentials;
		$this->soap = new \nusoap_client($this->gateURL);
		$this->sessionOpen();
	}

	public function __destruct()
	{
		$this->sessionClose();
	}

	public function call($method, $args = NULL)
	{
		$result = $this->soap->call($method, $args, $this->namespace);
		//echo ($this->soap->getDebug());
		if ($this->soap->fault)
			die("Fault: {$this->soap->faultstring}");

		return $result;
	}

	public function sessionOpen()
	{
		$this->namespace = self::BASE_NAMESPACE;
		$sid = $this->call('session_open', ['email' => $this->credentials->getEmail(), 'password' => $this->credentials->getPassword()]);
		$this->soap->setHeaders("<HSPC-SID>$sid</HSPC-SID>");
	}

	public function sessionClose()
	{
		$this->namespace = self::BASE_NAMESPACE;
		$this->call('session_close', NULL, 'HSPC/API/1.0');
	}
}