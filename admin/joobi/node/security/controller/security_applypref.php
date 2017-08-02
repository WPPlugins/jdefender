<?php 


* @license GNU GPLv3 */

class Security_applypref_controller extends WController {
	function applypref() {
		parent::applypref();
		$redirectSaveprefC = WClass::get( 'security.savepref' );
		$redirectSaveprefC->securitySave( $this->generalPreferences );
		return true;
	}	
}