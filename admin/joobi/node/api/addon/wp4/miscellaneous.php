<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Api_Wp4_Miscellaneous_addon {
public function getAllWidgetsIDforFeatured(){
$allWidgetsA=get_option( JOOBI_PREFIX.'_site_widgets');
return array();
}
public function getAllModule4Type($namekey){
$resultA=array();
return $resultA;
}
public function renderModule($module){
$params=new stdClass();
$params->module=new stdClass();
$params->module->id=$module->id;
$params->module->title=$module->title;
$params->module->module=$module->module;
return WGet::startApplication('module','cart.cart.module',$params );
}
}