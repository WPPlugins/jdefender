<?php 


* @license GNU GPLv3 */

WView::includeElement( 'main.listing.approve' );
class Security_Blocked_listing extends WListing_approve {
function create() {
	$this->value = ( ($this->value > 7 ) ? 0 : 1 );
	return parent::create();
}}