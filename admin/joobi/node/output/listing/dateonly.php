<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.datetime');
class WListing_CoreDateonly extends WListing_datetime {
protected $dateFormat='dateonly';
function create(){
$this->noTimeZone=true;
return parent::create();
}}