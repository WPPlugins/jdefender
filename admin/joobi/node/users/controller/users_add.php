<?php 


* @license GNU GPLv3 */

class Users_add_controller extends WController {
function add(){
$userFrame=WPref::load('PUSERS_NODE_FRAMEWORK_BE');
if(empty($userFrame))$userFrame=WApplication::getFrameworkName();
$usersAddon=WAddon::get('users.'.$userFrame );
if(!empty($usersAddon))$usersAddon->addUserRedirect();
return parent::add();
}
}