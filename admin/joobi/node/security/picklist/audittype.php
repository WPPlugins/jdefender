<?php 


* @license GNU GPLv3 */

class Security_Audittype_picklist extends WPicklist {
	function create() {
		$this->addElement( 0, WText::t('1382364714PMAL') );
		$this->addElement( 1, WText::t('1382364714PMAM') );
		return true;
	}}