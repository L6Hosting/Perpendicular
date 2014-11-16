<?php namespace L6Hosting\Perpendicular;

class Credentials {
	
	private $email = null;
	private $password = null;

	public function __construct($email, $password)
	{
		$this->email = $email;
		$this->password = $password;
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