<?php namespace L6Hosting\Perpendicular;

class Credentials {
	private $email = null;
	private $password = null;

	public function __construct($credentials = array())
	{
		if (count($credentials) > 0)
		{
			$this->email = $credentials['email'];
			$this->password = $credentials['password'];
		}
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

}