<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Security_CoreIp_form extends WForms_default {
function show(){
	$this->content=WGlobals::get('ipxAddress');
return true;
}
}