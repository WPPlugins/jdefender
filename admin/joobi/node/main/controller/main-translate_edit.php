<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Main_translate_edit_controller extends WController {
	function edit() {
		$mainEditC = WClass::get( 'main.edit' );
		if ( !$mainEditC->checkTranslateAccess() ) return false;
		return parent::edit();
	}}