<?php 


* @license GNU GPLv3 */

class Security_CoreCur_form extends WForms_default {
function show(){
	$this->content=WGlobals::get('ipCurrency');
	WGlobals::set('ipCurrency',null );
return true;
}
}