<?php 


* @license GNU GPLv3 */

class Currency_CoreXmlform_listing extends WListings_default{
function create() {
	$url = WPage::linkPopUp('controller=currency-exchangesite&task=xmlform&eid='. $this->value );
	$this->content = WPage::createPopUpLink( $url, WText::t('1246516644MMDQ'), 800, 600 );
	return true;
}
}