<?php 


* @license GNU GPLv3 */

class WForm_Coretab extends WForms_default {
function create(){
return true;
}
function show(){
return true;
}
function start(&$frame,$params=null){
$frame->startPane($params );
}
public function addElementToField(&$frame,$params=null,$HTML=null){
$frame->_data=$params;
if(empty($HTML)) return;
if('edit'==WPref::load('PMAIN_NODE_DIRECT_MODIFY')){
}elseif('translate'==WPref::load('PMAIN_NODE_DIRECT_MODIFY')){
}
$frame->startPage($params );
$frame->add($HTML );
$frame->endPage($params );
}
function close(&$frame){
$frame->endPane();
$this->content=$frame->display();
}
}