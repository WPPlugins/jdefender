<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.textlink');
class Design_CorePicklistaddedit_listing extends WListing_textlink {
function create() {
if ( $this->getValue( 'type' ) != 1 ) return false;
return WText::t('1206961872SVNI');
}}