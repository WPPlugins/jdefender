<?php 


* @license GNU GPLv3 */

class Users_Users_controlpanel_menu_view extends Output_Mlinks_class {
function prepareView(){
if( WExtension::exist('item.node')){
$itemMenusC=WClass::get('item.menus');
if(!$itemMenusC->availableType('auction')){
$this->removeElements('users_controlpanel_menu_auctions');
}if(!$itemMenusC->availableType('subscription')){
$this->removeElements('users_controlpanel_menu_subscriptions');
}if(!$itemMenusC->availableType('classified')){
$this->removeElements('users_controlpanel_menu_classifieds');
}}
return true;
}
}