<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.textlink');
class Security_CoreBlockuser_listing extends WListing_textlink {
function create() {
if ( empty( $this->value ) ) return false;
return parent::create();
}}