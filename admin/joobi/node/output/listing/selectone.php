<?php 


* @license GNU GPLv3 */

class WListing_Coreselectone extends WListings_default{
function create(){
static $dropdown=array();
if(!isset($dropdown[$this->element->map])){
if($this->element->did > 0){
$this->_did=$this->element->did;
}elseif(!empty($this->element->selectdid)){$this->_did=$this->element->selectdid;
if(empty($this->element->selectype) || $this->element->selectype !=5){
if(empty($this->element->selectstyle) || $this->element->selectstyle !=23){
$this->pickListStyle=6;
}else{
$this->pickListStyle=2;
}
}else{$this->picklistTypeSingle=false;
if(empty($this->element->selectstyle) || ($this->element->selectstyle !=23 && $this->element->selectstyle !=25 )){
$this->pickListStyle=1;
}elseif($this->element->selectstyle !=25){
$this->pickListStyle=3;
}else{
$this->pickListStyle=7;
}
}}else{
return false;
}
$paramsPK=new stdClass;
$paramsPK->listing=true;
$dropdownInstance=WView::picklist($this->_did, '',$paramsPK );
$dropdownInstance->params=$this->listing;
$dropdownInstance->name=$this->name;
$result=$dropdownInstance->displayOne($this->value );
if($result->status){
if(!empty($result->color)){
$colorP=WView::picklist('design_color');
$useColor=$colorP->getIdentifier($result->color );
if(empty($useColor))$useColor='default';
$result->content='<span class="label label-'.$useColor.'">'.$result->content.'</span>';
}$this->content=$result->content;
return true;
}else{
return false;
}
}
$this->content=(isset($dropdown[$this->element->map][$this->value])?$dropdown[$this->element->map][$this->value] : '');
return true;
}
public function advanceSearch(){
if(empty($this->element->did)) return false;
$lid=$this->element->lid;
$viewParams=new stdClass;
$viewParams->yid=$this->element->yid;
$viewParams->sid=$this->modelID;
$dropdownPL=WView::picklist($this->element->did, '',$viewParams );
if(empty($dropdownPL)) return false;
$allListA=$dropdownPL->load();
if(empty($allListA)) return false;
$oneDropA=array();
$hasNone=false;
foreach($allListA as $oneKey=> $oneVal){
$oneDropA[]=WSelect::option($oneKey, $oneVal );
if(empty($oneKey))$hasNone=true;
}
if(!$hasNone){
$defaultObj=new stdClass;
$defaultObj->value=0;
$defaultObj->text=WText::t('1383923815RCSI');
array_unshift($oneDropA, $defaultObj );
}
$HTMLDrop=new WSelect();
$mapField='advsearch['.self::$complexMapA[$lid] .']';
$defaultValue=WGlobals::getUserState( self::$complexSearchIdA[$lid] , self::$complexMapA[$lid], '','array','advsearch');
$HTMLDrop->classes='simpleselect';
$this->content=$HTMLDrop->create($oneDropA, $mapField, null, 'value','text',$defaultValue, Output_Doc_Document::$advSearchHTMLElementIdsA[$lid] );
return true;
}
public function searchQuery(&$model,$element,$searchedTerms=null,$operator=null){
$lid=$this->element->lid;
$this->createComplexIds($lid, $element->map.'_'.$element->sid );
Output_Doc_Document::$advSearchHTMLElementIdsA[$lid]='srchwz_'.$lid;
if(!empty($searchedTerms)){
$defaultValue=$searchedTerms;
}else{
$defaultValue=WGlobals::getUserState( self::$complexSearchIdA[$lid] , self::$complexMapA[$lid], '','array','advsearch');
}
if(!empty($defaultValue)){
if( strpos($defaultValue, '|') !==false){
$explodedA=explode('|',$defaultValue );
if(!empty($explodedA)){
foreach($explodedA as $oneVal){
if(empty($oneVal)) continue;
$model->whereSearch($element->map, '%|'.$oneVal .'|%',$element->asi, 'LIKE',$operator );
}}
}elseif( strpos($defaultValue, '!') !==false){ 
$explodedA=explode('!',$defaultValue );
if(!empty($explodedA)){
$newValA=array();
foreach($explodedA as $oneVal){
if(empty($oneVal)) continue;
$newValA[]=$oneVal;
}
if(!empty($newValA )){
$model->openBracket();
foreach($newValA as $oneVal){
if(empty($oneVal)) continue;
$model->whereE($element->map,  $oneVal, $element->asi );
$model->operator('OR');
}$model->closeBracket();
}
}
}else{$model->whereSearch($element->map, $defaultValue, $element->asi, '=',$operator );
}
}
}
public function advanceSearchLinks($memory,$sessionKey,$controller,$task,$pickListType=''){
$lid=$this->element->lid;
$this->createComplexIds($lid, $this->element->map );
$viewParams=new stdClass;
$dropdownPL=WView::picklist($this->element->selectdid, '',$viewParams );
$allListA=$dropdownPL->load();
if(empty($allListA)) return false;
$searchObjectO=new stdClass;
$searchObjectO->name=$this->element->name;
$searchObjectO->typeName=$this->element->typeName;
$searchObjectO->typeNode=$this->element->typeNode;
$searchObjectO->modelID=$this->element->modelID;
$searchObjectO->column=$this->element->column;
WGlobals::setSession($memory, $this->element->lid, $searchObjectO );
$HTML='';
$oneDropA=array();
$hasNone=false;
foreach($allListA as $oneKey=> $oneVal){
$oneDropA[]=WSelect::option($oneKey, $oneVal );
if(empty($oneKey))$hasNone=true;
}
if(!$hasNone){
$defaultObj=new stdClass;
$defaultObj->value=0;
$defaultObj->text=WText::t('1206732365OQJK');
array_unshift($oneDropA, $defaultObj );
}
Output_Doc_Document::$advSearchHTMLElementIdsA[$lid]='srchwz_'.$lid;
if('picklist' !=$pickListType){
$HTMLDrop=new WSelect();
$HTMLDrop->classes='filterValue';
$defaultValue=WGlobals::getUserState($sessionKey . $lid, $lid, '','array',$memory );
$baseLink='controller='.$controller;if(!empty($task))$baseLink .='&task='.$task;
$eid=WGlobals::getEID();
if(!empty($eid))$baseLink .='&eid='.$eid;
if(empty($this->element->selectype ) || 3==$this->element->selectype){
$multipleValue=false;
}else{
$multipleValue=true;
}
if($multipleValue){
$defaultValue=trim($defaultValue, '|');
$addValue=(!empty($defaultValue)? '|'.trim($defaultValue). '|' : '|');
$addValue=ltrim($addValue, '|');
$baseLink .='&'.$memory.'['.$lid.']=|'.$addValue;
$defaultValue=explode('|',$defaultValue );
}else{
$defaultValue=trim($defaultValue, '!');
$addValue=(!empty($defaultValue)? '!'.trim($defaultValue ). '!' : '');
$addValue=ltrim($addValue, '!');
$baseLink .='&'.$memory.'['.$lid.']=!'.$addValue;
$defaultValue=explode('!',$defaultValue );
}
if(empty($task))$task='home';
$JSparams=array();
$JSparams['controller']=$controller;
$formObj=WView::form($lid );
$onChange='return '.WPage::actionJavaScript($task, $lid, $JSparams );$name=$memory.'['.$lid.']';
$content=$HTMLDrop->create($oneDropA, $name, null, 'value','text',$defaultValue, null, false, false, $onChange );
$formObj->hidden('controller',$controller );
if(!empty($task))$formObj->hidden('task',$task );
$eid=WGlobals::getEID();
if(!empty($eid))$formObj->hidden('eid',$eid );
$formObj->addContent($content );
$this->content=$formObj->make();
}elseif('scrollbox'==$pickListType){
$HTMLDrop=new WSelect();
$HTMLDrop->classes='filterValue';
$defaultValue=WGlobals::getUserState($sessionKey . $lid, $lid, '','array',$memory );
$baseLink='controller='.$controller;if(!empty($task))$baseLink .='&task='.$task;
$eid=WGlobals::getEID();
if(!empty($eid))$baseLink .='&eid='.$eid;
$multipleValue=true;
if($multipleValue){
$addValue=(!empty($defaultValue)? '|'.ltrim($defaultValue). '|' : '');
$addValue=str_replace('||','|',$addValue );
$baseLink .='&'.$memory.'['.$lid.']='.$addValue;
$defaultValue=explode('|',$defaultValue );
}else{
$baseLink .='&'.$memory.'['.$lid.']=';
}
if(empty($task))$task='home';
$JSparams=array();
$JSparams['controller']=$controller;
$formObj=WView::form($lid );
$onChange='return '.WPage::actionJavaScript($task, $lid, $JSparams );$name=$memory.'['.$lid.']';
$tagId=WView::generateID('listing',$lid );
$content='<select name="'.$name.'" id="'.$tagId.'" class="filterValue chosen-select" multiple onchange="'.$onChange.'" style="display: none;">';
foreach($oneDropA as $box){
$content .='<option value="'.$box->value.'"';
if( in_array($box->value, $defaultValue ))$content .=' selected="selected"';
$content .='>'.$box->text.'</option>';
}$content .='</select>';
$varName='jx'.$tagId;
$jsScript='jQuery(document).ready(function(){var '.$varName.';'.$varName.'=\'';
$idx=0;
foreach($oneDropA as $box){
$jsScript .='<li class="';
if( in_array($box->value, $defaultValue )){
$jsScript .='result-selected';
}else{
$jsScript .='active-result';
}$jsScript .='" data-option-array-index="'.$idx.'">'.$box->text.'</li>';
$idx++;
}
$jsScript .='\';jQuery(".chosen-container-multi .chosen-results").html('.$varName.');});';
$content .='<script>';
$content .=$jsScript;
$content .='</script>';
$formObj->hidden('controller',$controller );
if(!empty($task))$formObj->hidden('task',$task );
$eid=WGlobals::getEID();
if(!empty($eid))$formObj->hidden('eid',$eid );
$formObj->addContent($content );
$this->content=$formObj->make();
}else{
$HTMLDrop=new WList();
$HTMLDrop->classes='filterValue';
$defaultValue=WGlobals::getUserState($sessionKey . $lid, $lid, '','array',$memory );
$baseLink='controller='.$controller;if(!empty($task))$baseLink .='&task='.$task;
$eid=WGlobals::getEID();
if(!empty($eid))$baseLink .='&eid='.$eid;
if(empty($this->element->selectype ) || 3==$this->element->selectype){
$multipleValue=false;
}else{
$multipleValue=true;
}
if($multipleValue){
$defaultValue=trim($defaultValue, '|');
$addValue=(!empty($defaultValue)? '|'.trim($defaultValue). '|' : '|');
$addValue=ltrim($addValue, '|');
$baseLink .='&'.$memory.'['.$lid.']=|'.$addValue;
$defaultValue=explode('|',$defaultValue );
}else{
$defaultValue=trim($defaultValue, '!');
$addValue=(!empty($defaultValue)? '!'.trim($defaultValue ). '!' : '');
$addValue=ltrim($addValue, '!');
$baseLink .='&'.$memory.'['.$lid.']=!'.$addValue;
$defaultValue=explode('!',$defaultValue );
}
$this->content=$HTMLDrop->create($oneDropA, $baseLink, $defaultValue, '','value','text');
}
return true;
}
}