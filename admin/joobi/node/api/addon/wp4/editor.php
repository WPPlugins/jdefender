<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Api_Wp4_Editor_addon extends WClasses {
var $cols=80;
var $rows=10;
public function display(){
}
public function getEditorName(){
$editors=array();
$editors['framework.']=WText::t('1352226844OYVM');
return $editors;
}
}