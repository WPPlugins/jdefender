<?php 


* @license GNU GPLv3 */

WLoadFile('users.class.parent', JOOBI_DS_NODE );
class Users_Wp4_addon extends Users_Parent_class {
function getPicklistElement(){
$wordpress=new stdClass;
$wordpress->option='wordpress';
$wordpress->label='WordPress';
$wordpress->extension='wordpress';
return $wordpress;
}
}