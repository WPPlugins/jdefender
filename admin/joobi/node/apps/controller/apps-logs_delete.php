<?php 


* @license GNU GPLv3 */

class Apps_logs_delete_controller extends WController {
function delete(){
$FILE=WGlobals::get('file');  
$fileClass=WGet::file(); 
if(is_string($FILE) && !empty($FILE)){
if($fileClass->delete( JOOBI_DS_USER.'logs/'.$FILE )){
$this->userS('1260434893HJHR',array('$FILE'=>$FILE));
}
}
WPages::redirect('controller=apps-logs&task=listing');
return true;
}
}