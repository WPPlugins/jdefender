<?php 


* @license GNU GPLv3 */

class WListing_Coreemail extends WListings_default{
function create(){
$eids=$this->eid();
$email=(is_array($eids)?implode($eids) : $eids );
if(empty($this->element->truncate))$this->element->truncate=0;
$outputEMailC=WClass::get('output.emailclock');
$this->value=$outputEMailC->cloakmail($email, $email, $this->value, $this->element->truncate );
return parent::create();
}
}