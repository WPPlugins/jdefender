<?php 


* @license GNU GPLv3 */

WView::includeElement('form.datetime');
class Scheduler_CoreServertime_form extends WForm_datetime {
function show(){
$this->noTimeZone=true;
$this->value=time();
return parent::show();
}
}