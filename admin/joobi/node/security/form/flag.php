<?php 


* @license GNU GPLv3 */

class Security_CoreFlag_form extends WForms_default {
function show(){
	$img=WGlobals::get('ipIsoCode2');
	if (!empty($img)){
		$this->content="<img src='". JOOBI_URL_MEDIA .'images/flags/' .strtolower($img).".gif'";
	} else {
		$this->content='';
	}
	WGlobals::set('ipIsoCode2',null );
	return true;
}
}