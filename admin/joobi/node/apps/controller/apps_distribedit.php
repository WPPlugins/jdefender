<?php 


* @license GNU GPLv3 */

class Apps_distribedit_controller extends WController {
function distribedit(){
$editDistrb=WPref::load('PINSTALL_NODE_DISTRIB_EDIT');
$pref=WPref::get('install.node');
if($editDistrb){
$pref->updatePref('distrib_edit', 0 );
}else{
$pref->updatePref('distrib_edit', 1 );
}
WPages::redirect('controller=apps&task=preferences');
return true;
}
}