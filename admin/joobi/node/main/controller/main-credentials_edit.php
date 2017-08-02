<?php 


* @license GNU GPLv3 */

class Main_credentials_edit_controller extends WController {
	function edit() {
		$eid= WGlobals::getEID();
		$mainCredentialsC = WClass::get( 'main.credentials' );
		$typeName = $mainCredentialsC->getTypeName( $eid );
		if ( $typeName === false ) return parent::edit();
		$view = 'main_credential_form_' . $typeName;
		$viewName = WView::get( $view, 'namekey', null, null, false );
		if ( empty($viewName) ) {
			$viewName = 'main_credential_form_default';
		}
		$eid = WGlobals::getEID();
		if ( !empty($eid) ) {
			$crdidtype = WModel::getElementData( 'main.credential', $eid, 'crdidtype' );
			if ( !empty($crdidtype) ) {
				$namekey = WModel::getElementData( 'main.credentialtype', $crdidtype, 'namekey' );
				if ( !empty($namekey) ) {
					WLoadFile( 'main.class.channel' );
					$mainCredentialC = WClass::get( 'main.' . $namekey, null, 'class', false );
					if ( !empty($mainCredentialC ) ) {
						if ( method_exists( $mainCredentialC, 'editSocial' ) ) {
							$mainCredentialC->editSocial();
						}
					}
				}
			}
		}
		$this->setView( $viewName );
		return parent::edit();
	}
}