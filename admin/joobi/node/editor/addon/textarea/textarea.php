<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Editor_Textarea_addon extends Editor_Get_class {
	function load(){
	}
	function display() {
		if ( empty($this->cols) ) $this->cols = 60;
		if ( empty($this->rows) ) $this->rows = 6;
		return parent::display();
	}
}