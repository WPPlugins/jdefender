<?php 


* @license GNU GPLv3 */

class Space_Apikeynotvalid_form extends WForms_default {
function show() {
	$trans = WGlobals::get( 'text' );
	$this->content = urldecode( $trans );
	return true;
}}