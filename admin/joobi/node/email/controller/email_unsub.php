<?php 


* @license GNU GPLv3 */

class Email_unsub_controller extends WController {
function unsub(){
$id=WGlobals::get('id');
if(empty($id)) return false;
$subcriberID=$id;
$subA=explode('|',$subcriberID );
if(empty($subA)) return false;
$email=$subA[0];
return true;
}
}