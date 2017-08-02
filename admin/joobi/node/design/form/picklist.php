<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.textarea' );
class Design_CorePicklist_form extends WForm_textarea {
	function create() {
		if ( $this->getValue( 'core' ) ) return false;
		$type = $this->getValue( 'type' );
		if ( $type < 3 ) return false;
		$namekey = $this->getValue( 'namekey' );
		$useNK = str_replace( 'design_node_', '', $namekey );
		$location = JOOBI_DS_USER . 'custom/design/picklist/' . $useNK . '.php';
		$content = '';
		$fileS = WGet::file();
		if ( $fileS->exist( $location ) ) {
			$content = $fileS->read( $location );
						$pos = strpos( $content, 'class' );
			if ( $pos !== false ) {
				$pos2 = strpos( $content, '{', $pos+2 ) + 1;
				$lastPos = strrpos( $content, '}' );
				$content = substr( $content, $pos2, $lastPos-$pos2 );
			}			
		}
		$this->value = $content;
		return parent::create();
	}	
}