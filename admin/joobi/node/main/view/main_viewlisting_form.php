<?php 


* @license GNU GPLv3 */

class Main_Main_viewlisting_form_view extends Output_Forms_class {
function prepareView() {
	if ( WRoles::isAdmin( 'manager' ) ) {
		$this->removeMenus( 'main_viewlisting_form_save_ajax' );
	} else {
		$this->removeMenus( 'main_viewlisting_form_save_normal' );
	}
$this->userN('1466623925HDVN');
	return true;
}}