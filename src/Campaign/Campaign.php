<?php namespace L6Hosting\Perpendicular\Campaign;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Campaign extends AbstractAPI {

	const CAMPAIGN = 'Campaign';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::CAMPAIGN);
	}

	public function getCampaign()
	{
		//
	}

	public function getAccountCampaign()
	{
		//
	}

}