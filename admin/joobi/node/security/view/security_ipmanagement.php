<?php 


* @license GNU GPLv3 */

class Security_Security_ipmanagement_view extends Output_Listings_class {
function prepareView() {
	if ( ! WPref::load( 'PSECURITY_NODE_MANAGE_COUNTRY' ) ) {
		$this->removeElements( 'security_ipblocked_listing_ctyid' );
	}
	return true;
}
}