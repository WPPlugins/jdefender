<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.textlink');
class Security_CoreBlockpages_listing extends WListing_textlink {
function create() {
if (  5 != $this->getValue( 'status' ) ) return false;
	return parent::create();
}}