<?php 


* @license GNU GPLv3 */

class Apps_uninstall_controller extends WController {
function uninstall(){
$eid=WGlobals::getEID();
if(empty($eid))$eid=WGlobals::get('wid');
if(empty($eid)) return true;
$appsM=WModel::get('apps');
$appsM->whereE('wid',$eid );
$appsM->setVal('publish', 0 );
$appsM->update();
return true;
}}