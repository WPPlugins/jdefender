<?php 


* @license GNU GPLv3 */

class Security_savepref_controller extends WController {
	function savepref() {
		parent::savepref();
		$redirectSaveprefC = WClass::get( 'security.savepref' );
		$redirectSaveprefC->securitySave( $this->generalPreferences );
		return true;
	}	
}