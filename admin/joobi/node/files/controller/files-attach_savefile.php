<?php 


* @license GNU GPLv3 */

WLoadFile( 'files.controller.files_savefile' );
class Files_attach_savefile_controller extends Files_savefile_controller {
function savefile() {
	$this->controller = 'files-attach';
	$this->index = 'popup';
	return parent::savefile();
}}