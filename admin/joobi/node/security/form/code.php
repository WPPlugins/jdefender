<?php 


* @license GNU GPLv3 */

class Security_CoreCode_form extends WForms_default {
function show(){
	$this->content = WGlobals::get('ipIsoCode3');
	return true;
}
}