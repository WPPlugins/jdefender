<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.textlink');
class Design_CoreExportimport_listing extends WListing_textlink {
	function create() {
	if ( empty($this->value ) ) return false;
	return parent::create();
	}}