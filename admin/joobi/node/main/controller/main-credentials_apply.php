<?php 


* @license GNU GPLv3 */

class Main_credentials_apply_controller extends WController {
	function apply() {
		$this->returnId();
		parent::save();
		WPages::redirect( 'controller=main-credentials&task=edit&eid=' . $this->_eid );
		return true;
	}
}