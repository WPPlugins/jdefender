<?php 


* @license GNU GPLv3 */

class Theme_applyfile_controller extends WController {
function applyfile(){
$themeC=WClass::get('theme.helper');
$themeC->overwriteThemeFile(true);
return true;
}
}