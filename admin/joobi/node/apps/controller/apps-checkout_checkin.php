<?php 


* @license GNU GPLv3 */

class Apps_checkout_checkin_controller extends WController {
function checkin(){
$checkoutM=WModel::get('checkout');
$checkoutM->emptyTable();
$message=WMessage::get();
$message->userS('1209746216SXQF');
return true;
}}