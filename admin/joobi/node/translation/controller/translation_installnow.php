<?php 


* @license GNU GPLv3 */

class Translation_installnow_controller extends WController {
function installnow(){
WGet::saveConfig('install', 1 );
$libProgreC=WClass::get('library.progress');
$progressO=$libProgreC->get('translation');
$progressO->run();
$ajaxHTML=$progressO->displayAjax();
echo $ajaxHTML;
$progressO->finish();
exit();
return true;
}
}