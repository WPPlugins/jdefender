<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Security_CoreCountry_form extends WForms_default {
function show(){
	$this->content= WGlobals::get('ipCountry');
	WGlobals::set('ipCountry',null );
return true;
}
}