<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Main_Pdf_class extends WClasses {
	public function generatePDF($allPramsO) {
						WLoadFile( 'tcpdf.tcpdf',JOOBI_DS_INC );
			WLoadFile( 'fpdi.fpdi',JOOBI_DS_INC );
				if ( empty($allPramsO->fileTemplate) || empty($allPramsO->fileDestination) ) {
			$this->codeE( 'Files location not specified.' );
			return false;
		}
		if ( empty( $allPramsO->fileFolder ) ) $allPramsO->fileFolder = JOOBI_DS_USER;
		if ( empty( $allPramsO->fileClassName ) ) $allPramsO->fileClassName = 'Coupon_Template_original';
		if ( empty( $allPramsO->fileOriginal ) ) $allPramsO->fileOriginal = 'original.pdf';
		if ( empty( $allPramsO->author ) ) $allPramsO->author = JOOBI_SITE_NAME;
		if ( empty( $allPramsO->title ) ) $allPramsO->title = JOOBI_SITE_NAME;
		if ( empty( $allPramsO->keywords ) ) $allPramsO->keywords = '';
		$fileTemplateA = explode( '.', $allPramsO->fileTemplate );
		if ( empty( $allPramsO->themeFolder ) ) $allPramsO->themeFolder = array_pop( $fileTemplateA );
				WLoadFile( $allPramsO->fileTemplate . '.template', $allPramsO->fileFolder );
						$className = $allPramsO->fileClassName;
		if ( !class_exists($className) ) {
			$this->codeE( 'Could not find the template class!.' );
			return false;
		}		$pdf = new $className();
		$pathOriginal = $allPramsO->fileFolder . str_replace( '.', '/', $allPramsO->fileTemplate ) . '/' . $allPramsO->fileOriginal;
				$pdf->setSourceFile( $pathOriginal );
				$pdf->SetCreator( PDF_CREATOR );
		$pdf->SetAuthor( $allPramsO->author );
		$pdf->SetTitle( $allPramsO->title );
		$pdf->SetSubject( $allPramsO->title );
		$pdf->SetKeywords( $allPramsO->keywords );
		$pdf->AddSpotColor( 'My TCPDF Dark Green', 100, 50, 80, 45 );
		$pdf->AddSpotColor( 'My TCPDF Black', 75, 68, 67, 90 ); 		$pdf->SetTextSpotColor( 'My TCPDF Black', 100 );
				$pdf->SetMargins( 0, 0, 0 );
				$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
				$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
				$pdf->setLanguageArray( $pdf->metaDataA );
				$pdf->setFontSubsetting(true);
				$pdf->defineCoordinates( $allPramsO );
		$fileC = WGet::file();
		$fileC->write( $allPramsO->fileDestination, '', 'overwrite' );
		$pdf->Output( $allPramsO->fileDestination, 'F' );
		return true;
	}
}