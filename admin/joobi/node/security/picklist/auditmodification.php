<?php 


* @license GNU GPLv3 */

class Security_Auditmodification_picklist extends WPicklist {
	function create() {
		$this->addElement( 0, WText::t('1242282413PMNI') );
		$this->addElement( 1, WText::t('1382364714PMAN') );
		$this->addElement( 2, WText::t('1382364714PMAO') );
		return true;
	}}