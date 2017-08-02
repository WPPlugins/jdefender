<?php 


* @license GNU GPLv3 */

class Currency_Pricestyle_picklist extends WPicklist {
	function create() {
		$price = 2437.75;
		$standardPrice = WTools::format( $price, 'moneyCode', null, null, false, '', false );
		$supPrice = WTools::format( $price, 'moneyCode', null, null, false, '', true );
		$this->addElement( 0, $standardPrice );
		$this->addElement( 1, $supPrice );
		return true;
	}	
}