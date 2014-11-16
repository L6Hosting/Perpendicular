<?php namespace L6Hosting\Perpendicular\HP;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class HP extends AbstractAPI {

	const HP = 'HP';

	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::HP);
	}

	public function checkAppCompat()
	{
		//
	}

	public function checkLicenseCompat()
	{
		//
	}

	public function getCategorizedPlanList()
	{
		//
	}

	public function getExtendedPlanInfo()
	{
		//
	}

	public function getFullExtendedPlanInfo()
	{
		//
	}

	public function getPlanPromotionList()
	{
		//
	}

	public function getPromotion()
	{
		//
	}

	public function getSellablePlanList()
	{
		//
	}

	public function validatePleskLogin()
	{
		//
	}

}