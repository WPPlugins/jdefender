<?php 


* @license GNU GPLv3 */

class Security_CoreReferer_listing extends WListings_default{
function create() {
	$urlComplete = $this->value;
	$urlTruncated = substr($this->value,0,30);
	if ( strlen($this->value) > 30 ) {
		$urlTruncated .= ' ...';
	}
	$this->content = "<a href=\"$urlComplete\" target=\"_blank\">$urlTruncated</a>";
	return true;
}}