<?php 


* @license GNU GPLv3 */

WView::includeElement( 'listing.selectone' );
class Main_CoreFormtype_listing extends WListing_selectone {
function create() {
	$status = parent::create();
	if ( empty( $this->content ) ) {
		$this->content = $this->value;
	}
	return true;
}}