<?php 


* @license GNU GPLv3 */

class Design_export_doimport_controller extends WController {
	function doimport() {
		$libProgreC = WClass::get( 'library.progress' );
		$progressO = $libProgreC->get( 'design' );
		$progressO->run();
		$ajaxHTML = $progressO->displayAjax();
		echo $ajaxHTML;
		$progressO->finish();
		exit();
		return true;
	}
}