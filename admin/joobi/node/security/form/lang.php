<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Security_CoreLang_form extends WForms_default {
function show(){
	$this->content=WGlobals::get('ipLanguage');
	WGlobals::set('ipLanguage',null );
return true;
}
}