<?php 


* @license GNU GPLv3 */

class Jdefender_Jdefender_main_view extends Output_Mlinks_class {
	function prepareView() {
		if ( WApplication::isEnabled( JOOBI_MAIN_APP ) ) {
			$this->removeElements( array( 'jdefender_main_tools_japps' ) );
		}
		return true;
	}	
}