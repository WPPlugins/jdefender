<?php 


* @license GNU GPLv3 */

WView::includeElement('form.layout');
class WForm_Corecpanel extends WForm_layout {
function create(){
parent::create();
$this->content='<div id="cpanel">'.$this->content .'</div>';
return true;
}
function show(){
return $this->create();
}
}