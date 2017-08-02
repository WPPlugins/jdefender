<?php 


* @license GNU GPLv3 */

class Security_Ipblockedpages_model extends WModel {
	function validate() {
		$this->page = str_replace( JOOBI_SITE, '', $this->page ); 	
		return true;
	}	
	function addExtra() {
		$securityIPBM = WModel::get( 'security.ipblocked' );
		$securityIPBM->whereE( 'ipblid', $this->ipblid );
		$securityIPBM->setVal( 'blockedpage', 1 );
		$securityIPBM->update();
		return true;
	}	
}