<?php 


* @license GNU GPLv3 */

class Role_Useraccesswdef_picklist extends WPicklist {
function create(){
$sql=WModel::get('role'); 
$parent=array();
$parent['pkey']='rolid';
$parent['parent']='parent';
$parent['name']='name';
$sql->makeLJ('roletrans','rolid');
$sql->whereLanguage();
$sql->select('name', 1);
$sql->orderBy('lft','ASC');
$sql->select('rolid');  
$sql->select('parent');
$sql->setLimit( 500 );
if($this->onlyOneValue()){
$sql->whereE('rolid',$this->defaultValue );
$result=$sql->load('o');
$this->addElement($result->rolid, $result->name);
return true;
}
$sql->where('type','!=','2');
$myitems=$sql->load('ol');
$childOrderParent=array();
$list=WOrderingTools::getOrderedList($parent, $myitems, 1, false, $childOrderParent );
foreach($list as $itemList){
$this->addElement($itemList->rolid, $itemList->name);
}
}}