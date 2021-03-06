<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Design_model_fields_available_controller extends WController {
	function available() {
				$yidA = WGlobals::get( 'yid_' . WModel::get( 'library.view', 'sid' ) );
		$fdid = self::getFormValue( 'fdid', 'design.modelfields' );
				parent::save();
		if ( empty($fdid) ) return false;
		if ( empty( $yidA) ) {
			$this->userE('1356698577BYTA');
		} else {
			$designElementC = WClass::get( 'design.element' );
						foreach( $yidA as $yid ) {
				$designElementC->toggleFieldState( $yid, $fdid );
			}
		}
				$cache = WCache::get();
		$cache->resetCache( 'Views' );
		WPages::redirect( 'controller=design-model-fields&task=edit&eid=' . $fdid );
		return true;
	}
}