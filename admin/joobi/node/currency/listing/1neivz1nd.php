<?php 


* @license GNU GPLv3 */

class Currency_Core1neivz1nd_listing extends WListings_default{
function create()
{
	$this->content = (real)$this->value .'%';
	return true;
}
}