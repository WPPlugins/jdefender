<?php 


* @license GNU GPLv3 */

class Main_view_deleteall_controller extends WController {
	function deleteall() {
		$mainViewC = WClass::get( 'main.view' );
		$mainViewC->uncoreView();
		$message = WMessage::get();
		$message->userN('1370648536RVAD');
		return parent::deleteall();
	}
}