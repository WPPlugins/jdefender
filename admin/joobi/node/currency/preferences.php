<?php 


* @license GNU GPLv3 */

class Default_currency_preferences {
var $codesymbol='money';
var $conversionhistory=0;
var $fee=3;
var $multicur=1;
var $multicuredit=1;
var $multicurlist=1;
var $premium=2;
var $pricestyle=0;
var $lastupdate=0;
var $lastupdatelist='';
}
class Role_currency_preferences {
var $codesymbol='storemanager';
var $conversionhistory='storemanager';
var $fee='storemanager';
var $multicur='storemanager';
var $multicuredit='storemanager';
var $multicurlist='storemanager';
var $premium='storemanager';
var $pricestyle='storemanager';
var $lastupdate='allusers';
var $lastupdatelist='allusers';
}