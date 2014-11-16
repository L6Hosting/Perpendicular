<?php namespace L6Hosting\Perpendicular\Billing;

use L6Hosting\Perpendicular\AbstractAPI;
use L6Hosting\Perpendicular\Credentials;

class Billing extends AbstractAPI {

	const BILLING = 'Billing';
	
	public function __construct(Credentials $credentials, $gateURL = NULL)
	{
		parent::__construct($credentials, $gateURL);
		$this->namespace = sprintf('%s/%s', self::BASE_NAMESPACE, self::BILLING);
	}

	public function calculateOrder()
	{
		//
	}

	public function getHostingTargetList()
	{
		//
	}

	public function placeOrder()
	{
		//
	}

	public function createOfflinePayment()
	{
		//
	}

	public function getOrderDetails()
	{
		//
	}

	public function getExtendedAttrList()
	{
		//
	}

	public function getAccountSubsr()
	{
		//
	}

	public function subscrAuth()
	{
		//
	}

	public function getSubscrInfo()
	{
		//
	}

	public function createCustomInvoice()
	{
		//
	}

	public function getAccountCampaigns()
	{
		//
	}

}