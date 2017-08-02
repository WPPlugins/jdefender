<?php 


* @license GNU GPLv3 */

class Main_Channel_picklist extends WPicklist {
	function create() {
		$this->addElement( 'mobile', 'Mobile Push Notification' );
		$mainCredentialsC = WClass::get( 'main.credentials', null, 'class', false );
		if ( !empty( $mainCredentialsC ) ) $mainCredentialsC->picklistFromCategory( $this, 7, array(), false );			
		return true;
	}	
}