<?php 


* @license GNU GPLv3 */

class Security_CoreIncidentdetails_listing extends WListings_default {
	function create() {
		$url = $this->getValue( 'url' );
		if ( empty( $this->value ) && empty($url) ) return false;
		$html = '';
		if ( !empty($this->value) ) $html .= $this->value;
		if ( !empty($url) ) {
			if ( !empty($html) ) $html .= '<br>';
			$html .= 'URL: ' . $url;
		}		
		static $i = 0;
		$i++;
		$id = 'cl' . $this->element->lid . '_' . $i; 
		$this->content = '<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#' . $id . '" aria-expanded="false" aria-controls="' . $id . '">';
		$this->content .= WText::t('1206961936HCWR');
		$this->content .= '</button>';
		$this->content .= '<div class="collapse" id="' . $id . '"><div class="well">';
		$this->content .= '<pre>';
		$this->content .= print_r( $html, true );
		$this->content .= '</pre>';
		$this->content .= '</div></div>';
		return true;
	}
}