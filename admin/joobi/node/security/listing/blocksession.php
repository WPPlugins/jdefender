<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.textlink');
class Security_CoreBlocksession_listing extends WListing_textlink {
function create() {
	$this->element->lien .= '&search=' . $this->value ;
	return parent::create();
}}