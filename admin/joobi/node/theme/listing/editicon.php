<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.butedit');
class Theme_Editicon_listing extends WListing_butedit {
function create(){
if($this->getValue('core')){
WPage::renderBluePrint('legend','show');
$this->content='<span class="jpng-16-show" alt="Show" title="View" border="0"></span>';
return true;
}else{
return parent::create();
}
}}