<?php 


* @license GNU GPLv3 */

class Security_Login_filter {
	function create() {
		$value = time() - WTools::timeOut();
	return $value;
}
}