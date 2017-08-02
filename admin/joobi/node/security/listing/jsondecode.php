<?php 


* @license GNU GPLv3 */

class Security_CoreJsondecode_listing extends WListings_default {
	function create() {
		if ( empty( $this->value ) ) return false;
		$json = unserialize( $this->value );
		static $i = 0;
		$i++;
		$id = 'cl' . $this->element->lid . '_' . $i; 
		$this->content = '<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#' . $id . '" aria-expanded="false" aria-controls="' . $id . '">';
		$this->content .= WText::t('1452555666SPTY');
		$this->content .= '</button>';
		$this->content .= '<div class="collapse" id="' . $id . '"><div class="well">';
		$this->content .= '<pre>';
		$this->content .= print_r( $json, true );
		$this->content .= '</pre>';
		$this->content .= '</div></div>';
		return true;
	}}