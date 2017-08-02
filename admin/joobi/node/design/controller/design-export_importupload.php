<?php 


* @license GNU GPLv3 */

class Design_export_importupload_controller extends WController {
	function importupload() {
		$fileA = $this->secureFileUpload( 'xml', 'importfile' );
		if ( empty( $fileA ) ) {
			$this->userE('1442892458BZWI');
			WPage::redirect( 'previous' );
		}
		$fileLocation = $fileA['location'];
		$fileClass = WGet::file();				
		$radom = WTools::randomString( 100 );
		$radom = WGlobals::filter( $radom, 'path' );
		$radom = substr( $radom, 0, 70 );
		$path = JOOBI_DS_EXPORT . $radom . '/' . $fileA['name'];
		$status = $fileClass->move( $fileLocation, $path );		
		WGlobals::set( 'fileLoaction', $path );
		if ( $status ) $this->userS('1442892458BZWJ');
		$libProgreC = WClass::get( 'library.progress' );
		$progressO = $libProgreC->get( 'design' );
		$progressO->run();
		$ajaxHTML = $progressO->display();
		$progressO->finish();
		return true;
	}	
}