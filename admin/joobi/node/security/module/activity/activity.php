<?php 


* @license GNU GPLv3 */

class Security_CoreActivity_module extends WModule {
	public function create() {
		$controller = new stdClass;
		$controller->wid = WExtension::get( 'security.node', 'wid' );
		$params = new stdClass;
				$form = WView::getHTML( 'security_activity_dashboard' , $controller, $params );
		if ( !empty($form) ) $this->content = '<div>' . $form->make() . '</div>';
	}
}