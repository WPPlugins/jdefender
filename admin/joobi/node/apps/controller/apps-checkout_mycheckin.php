<?php 


* @license GNU GPLv3 */

class Apps_checkout_mycheckin_controller extends WController {
function mycheckin(){
$checkoutC=WClass::get('apps.checkout');
$uid=WUser::get('uid');
$status=$checkoutC->memberCheckin($uid );
$sid=WModel::get('checkout','sid');
return $this->showM($status ,  'checkin', 1, $sid );
}}