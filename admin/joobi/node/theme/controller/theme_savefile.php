<?php 


* @license GNU GPLv3 */

class Theme_savefile_controller extends WController {
function savefile(){
$themeC=WClass::get('theme.helper');
$themeC->overwriteThemeFile();
return true;
}
}