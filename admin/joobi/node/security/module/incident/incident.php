<?php 


* @license GNU GPLv3 */

class Security_CoreIncident_module extends WModule {
	public function create() {
		$controller = new stdClass;
		$controller->wid = WExtension::get( 'security.node', 'wid' );
		$params = new stdClass;
				$form = WView::getHTML( 'security_incident_dashboard' , $controller, $params );
		if ( !empty($form) ) $this->content = '<div>' . $form->make() . '</div>';
	}
}