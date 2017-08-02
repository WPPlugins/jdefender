<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.datetime');
class Scheduler_CoreNextlaunch_listing extends WListing_datetime {
function create(){
if(!$this->getValue('publish')){
$this->content='<span class="label label-danger">'.WText::t('1492691187CSFY'). '</span>';
return true;
}
if($this->value < time()){
$this->content='<span class="label label-success">'.WText::t('1369751059DSKE'). '</span>';
}else{
$status=parent::create();
$this->content='<span class="label label-warning">'.$this->content.'</span>';
return $status;
}
return true;
}
}