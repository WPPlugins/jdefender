<?php 


* @license GNU GPLv3 */

class Main_Number_picklist extends WPicklist {
function create() {
	for ($i = 0; $i < 5; $i++) {
		$this->addElement( $i, $i );
	}
	return true;
}
}