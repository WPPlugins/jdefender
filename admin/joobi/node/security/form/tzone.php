<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Security_CoreTzone_form extends WForms_default {
function show(){
	$this->content= WGlobals::get('ipTimeZone');
	WGlobals::set('ipTimeZone',null );
return true;
}
}