<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.text' );
class WForm_Coreseconds extends WForm_text {
	function create() {
				if ( empty( $this->element->width ) ) $this->element->width = 10;
		$this->addPostText = WText::t('1206732357ILFN');
		return parent::create();
	}
	function show() {
		$status = parent::show();
		$this->content .= ' ' . WText::t('1206732357ILFN');
		return $status;
	}
}