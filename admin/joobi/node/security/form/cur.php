<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Security_CoreCur_form extends WForms_default {
function show(){
	$this->content=WGlobals::get('ipCurrency');
	WGlobals::set('ipCurrency',null );
return true;
}
}