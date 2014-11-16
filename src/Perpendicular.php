<?php namespace L6Hosting\Perpendicular;

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

	public function __construct()
	{
		//
	}

	public function account()
	{
		return new Account();
	}

	public function billing()
	{
		return new Billing();
	}


	public function campaign()
	{
		return new Campaign();
	}

	public function config()
	{
		return new Config();
	}

	public function domain()
	{
		return new Domain();
	}

	public function fraud()
	{
		return new Fraud();
	}

	public function hp()
	{
		return new HP();
	}

	public function mailer()
	{
		return new Mailer();
	}

	public function pp()
	{
		return new PP();
	}

	public function person()
	{
		return new Person();
	}

	public function ssl()
	{
		return new SSL();
	}
}
