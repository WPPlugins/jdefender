<?php 


* @license GNU GPLv3 */

class Files_Filetype_picklist extends WPicklist {
function create() {
	static $filesM = null;
	$filesM = WModel::get( 'files' );
	$filesM->select( 'type' );
	$filesM->groupBy( 'type' );
	$types = $filesM->load('lra');
	foreach( $types as $type ) {
		if ( empty($type) ) continue;
		$this->addElement( $type, $type );
	}
	return true;
}}