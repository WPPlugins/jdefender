<?php 


* @license GNU GPLv3 */

class Security_Security_activity_preferences_view extends Output_Forms_class {
function prepareView() {
		if ( ! WApplication::isEnabled( 'security.system.plugin', true, false ) ) {
			$this->userW('1452767763RLED');
		}
		$recordactivities = WPref::load( 'PSECURITY_NODE_RECORDACTIVITIES' );
		if ( $recordactivities < 2 ) {
			$this->removeElements( array( 'security_activity_preferences_recordactivtypages' ) );
		}
		return true;
	}
}