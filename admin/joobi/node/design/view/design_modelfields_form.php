<?php 


* @license GNU GPLv3 */

class Design_Design_modelfields_form_view extends Output_Forms_class {
function prepareView() {
	$sid = $this->getValue( 'sid', 'design.modelfields' );
	if ( empty( $sid ) ) {
		$message = WMessage::get();
		$message->userN('1369750869THVV');
		WPages::redirect( 'controller=design-model' );
	}
	if ( ! WPref::load( 'PDESIGN_NODE_FIELDSORTING' ) ) {
		$this->removeElements( array( 'design_modelfields_form_p_sortingasc', 'design_modelfields_form_p_sortingdesc' ) );
	}
	return true;
}}