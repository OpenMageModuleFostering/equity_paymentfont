<?php

class Equity_PaymentFont_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function loadPaymentFont($uri)
	{
		if ( Mage::getStoreConfigFlag('equity_paymentfont/general/equity_paymentfont_enabled') ) {
			return $uri;
		}
	}
}