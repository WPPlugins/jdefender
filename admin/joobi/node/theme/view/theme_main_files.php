<?php 


* @license GNU GPLv3 */

class Theme_Theme_main_files_view extends Output_Listings_class {
function prepareQuery(){
$tmid=WGlobals::getEID();
$themeHelperC=WClass::get('theme.helper');
$objData=$themeHelperC->getFiles($tmid, 'html');
if(!empty($objData))$this->addData($objData );
else return false;
return true;
}
}