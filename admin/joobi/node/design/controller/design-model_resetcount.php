<?php 


* @license GNU GPLv3 */

class Design_model_resetcount_controller extends WController {
	function resetcount() {
		$designModelfieldsC = WClass::get( 'design.modelfields' );
		$designModelfieldsC->resetcount();
		$this->userS('1480689097SNHQ');
		return true;
	}	
}