<?php 


* @license GNU GPLv3 */

class Apps_CoreMemoryusage_form extends WForms_default {
function create(){
$maxMemory=@ini_get('memory_limit');
if(empty($maxMemory))$maxMemory=@get_cfg_var('memory_limit');
$realMemoryMimit=WTools::returnBytes($maxMemory );
if($realMemoryMimit > 1 && $realMemoryMimit < WTools::returnBytes('30M')){
$this->content='<span class="label label-danger" style="font-weight:bold">'.WText::t('1378928005HOHD'). '</span>';
$this->content .='<br/><span class="label label-danger" style="font-weight:bold">'.WText::t('1378928005HOHE'). WTools::returnBytes($maxMemory, true). '</span>';
return true;
}
return false;
}}