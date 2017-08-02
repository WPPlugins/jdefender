<?php 


* @license GNU GPLv3 */

class Users_show_controller extends WController {
function show(){
if( WRoles::isAdmin('manager')){
$approvalRequired=WGlobals::get('approval');
$frameworkBE=WPref::load('PUSERS_NODE_FRAMEWORK_BE');
if(empty($frameworkBE))$frameworkBE=WApplication::getFrameworkName();
if(empty($approvalRequired) && 'contacts'==$frameworkBE){
$contactExists=WExtension::exist('contacts.node');
if($contactExists){
if( WRole::hasRole('sales_support')){
$eid=WGlobals::getEID();
WPages::redirect('controller=contacts&task=show&eid='.$eid );
}}
}
return parent::show();
}else{
$framework=WPref::load('PUSERS_NODE_FRAMEWORK_FE');
$usersAddon=WAddon::get('users.'.$framework );
$usersAddon->showUserProfile();
}
return true;
}
}