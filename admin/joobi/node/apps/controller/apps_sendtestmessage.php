<?php 


* @license GNU GPLv3 */

class Apps_sendtestmessage_controller extends WController {
function sendtestmessage(){
$mainTestEmailC=WClass::get('main.testemail');
$mainTestEmailC->sendTestEmail();
return true;
}
}