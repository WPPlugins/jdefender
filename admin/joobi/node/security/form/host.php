<?php 


* @license GNU GPLv3 */

class Security_CoreHost_form extends WForms_default {
	function show(){
		$this->content=@gethostbyaddr( WGlobals::get('ipxAddress') );
		return true;
	}
}