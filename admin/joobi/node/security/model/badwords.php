<?php 


* @license GNU GPLv3 */

class Security_Badwords_model extends WModel {
	function validate() {
		if ( empty($this->lgid) ) $this->lgid = WUsers::get( 'lgid' );
		return true;
	}
}