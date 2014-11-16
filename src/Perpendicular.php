<?php namespace L6Hosting\Perpendicular;

use L6Hosting\Perpendicular\Credentials;
use L6Hosting\Perpendicular\Account\Account;
use L6Hosting\Perpendicular\Billing\Billing;
use L6Hosting\Perpendicular\Campaign\Campaign;
use L6Hosting\Perpendicular\Config\Config;
use L6Hosting\Perpendicular\Domain\Domain;
use L6Hosting\Perpendicular\Fraud\Fraud;
use L6Hosting\Perpendicular\HP\HP;
use L6Hosting\Perpendicular\Mailer\Mailer;
use L6Hosting\Perpendicular\PP\PP;
use L6Hosting\Perpendicular\Person\Person;
use L6Hosting\Perpendicular\SSL\SSL;

class Perpendicular {

	protected $credentials;
	protected $gateURL;

	public function __construct($gateURL = NULL, $username = NULL, $password = NULL)
	{
		$this->credentials = new Credentials($username, $password);
		$this->gateURL = $gateURL;
	}

	public function account()
	{
		return new Account($this->credentials, $this->gateURL);
	}

	public function billing()
	{
		return new Billing($this->credentials, $this->gateURL);
	}


	public function campaign()
	{
		return new Campaign($this->credentials, $this->gateURL);
	}

	public function config()
	{
		return new Config($this->credentials, $this->gateURL);
	}

	public function domain()
	{
		return new Domain($this->credentials, $this->gateURL);
	}

	public function fraud()
	{
		return new Fraud($this->credentials, $this->gateURL);
	}

	public function hp()
	{
		return new HP($this->credentials, $this->gateURL);
	}

	public function mailer()
	{
		return new Mailer($this->credentials, $this->gateURL);
	}

	public function pp()
	{
		return new PP($this->credentials, $this->gateURL);
	}

	public function person()
	{
		return new Person($this->credentials, $this->gateURL);
	}

	public function ssl()
	{
		return new SSL($this->credentials, $this->gateURL);
	}
}
