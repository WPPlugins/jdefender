<?php 


* @license GNU GPLv3 */

class Security_CoreJsonrender_form extends WForms_default {
	function show() {
		$this->content =  '<pre>' . print_r( json_decode( $this->value ), true ) . '</pre>';
		return true;
	}	
}