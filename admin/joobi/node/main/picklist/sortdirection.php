<?php 


* @license GNU GPLv3 */

class Main_Sortdirection_picklist extends WPicklist {
function create() {
	$this->addElement( 0, 'Ascendant' );
	$this->addElement( 1, 'Descendant' );
}}