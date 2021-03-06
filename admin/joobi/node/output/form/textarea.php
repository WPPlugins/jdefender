<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class WForm_CoreTextarea extends WForms_default {
var $elementClassPosition='Textarea';
function show(){
$this->processCMStags();
$replaceReturns=false;
$pos=strpos($this->value, '/>');
if(false===$pos){
$pos=strpos($this->value, '</');
if(false===$pos){
$replaceReturns=true;
}}
if($replaceReturns)$this->content=str_replace( array( "\r\n", "\n\r" ), '<br />',$this->value );else $this->content=$this->value;
return true;
}
function create(){
$value=str_replace( "\r",'',$this->value );
$myEditor=WClass::get('editor.get');
$myEditor->name=(!empty($this->map)?$this->map : 'textarea'. $this->idLabel );
$myEditor->element=$this->element;
$myEditor->id=$this->idLabel;
$myEditor->content=$value;
$myEditor->formName=$this->formName;
if(!empty($this->element->editornode)){
$node=str_replace('.','_', WExtension::get($this->wid, 'namekey'));
if( WRoles::isNotAdmin('manager')){
$editor=WPref::load( strtoupper($node.'_editor_fe'));
}
if(empty($editor)){
$editor=WPref::load( strtoupper($node.'_editor'));
}
}
if(empty($editor)){
if( empty ($this->element->editor ))$editor='default';
elseif($this->element->editor=='user'){
if( WRoles::isAdmin('manager')){
$editor=WPref::load('PLIBRARY_NODE_EDITOR');
}else{
$editor=WPref::load('PLIBRARY_NODE_EDITOR_FE');
}
} else $editor=$this->element->editor;
}
static $count=0;
$count++;
$js="jCore.txtA[" . $count . "]='" . $this->idLabel . "';";
WPage::addJSScript($js );
$showBUttons=(!empty($this->element->editorbuttons)?true : false);
$this->content .=$myEditor->loadEditor($editor, $showBUttons );
return true;
}
}