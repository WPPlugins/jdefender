<?php 


* @license GNU GPLv3 */

class Design_CorePicklistsample_form extends WForms_default {
	function create() {
		$did = WGlobals::get( 'did' );
		if (empty($did)) $did = WController::getFormValue( 'did', 'library.picklistvalues' );
		$lgid = WUser::get( 'lgid' );
		$name = '';
		static $dropdown = array();
		if ( !isset($dropdown[$did]) ) {
			if ( $did > 0 ) {
				$paramsPK = new stdClass;
				$paramsPK->listing = true;
				$dropdown[$did] = WView::picklist( $did, '', $paramsPK );
			} else {
				$message = WMessage::get();
				$message->codeW( 'No picklist is selected for this listing element:' . $did );
				return;
			}
		}
		$defaults = '';
		$dropdown[$did]->defaults = $defaults ;
		$this->content = $dropdown[$did]->display();	
		return true;
	}
}