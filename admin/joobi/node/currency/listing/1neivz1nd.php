<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Currency_Core1neivz1nd_listing extends WListings_default{
function create()
{
	$this->content = (real)$this->value .'%';
	return true;
}
}