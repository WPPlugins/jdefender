<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Design_Modelfields_class extends WClasses {
	public function loadField($fdid) {
		static $fieldsA = array();
		if ( empty($fdid) ) return false;
		if ( !isset( $fieldsA[$fdid] ) ) {
			$designModelfieldsM = WModel::get( 'design.modelfields' );
			$designModelfieldsM->remember( $fdid, true, 'Model_model_fields' );
			$designModelfieldsM->makeLJ( 'design.modelfieldstrans' );
			$designModelfieldsM->makeLJ( 'design.fields', 'fieldid', 'fieldid', 0, 2 );
			$designModelfieldsM->whereLanguage();
			$designModelfieldsM->select( array( 'name', 'description' ), 1 );
			$designModelfieldsM->select( '*', 0 );
			$designModelfieldsM->select( 'form', 2 );
			$designModelfieldsM->select( 'listing', 2 );
			$designModelfieldsM->whereE( 'fdid', $fdid );
			$fieldO = $designModelfieldsM->load( 'o' );
			$fieldsA[$fdid] = $fieldO;
		}
		if ( !empty($fieldsA[$fdid]) ) return $fieldsA[$fdid];
		return null;
	}
	public function loadFieldOnly($fdid,$return='') {
		static $fieldsA = array();
		if ( empty($fdid) ) return false;
		if ( !isset( $fieldsA[$fdid] ) ) {
			$designModelfieldsM = WModel::get( 'design.modelfields' );
			$designModelfieldsM->whereE( 'fdid', $fdid );
			$designModelfieldsM->select( '*', 0 );
			$fieldO = $designModelfieldsM->load( 'o' );
			$fieldsA[$fdid] = $fieldO;
		}
		if ( !empty($fieldsA[$fdid]) ) {
			if ( empty($return) ) return $fieldsA[$fdid];
			elseif ( isset($fieldsA[$fdid]->$return) ) {
				return $fieldsA[$fdid]->$return;
			}
		}
		return null;
	}
	public function getAllFields($modelName,$allSimilarModel=true,$return='column') {
		static $allColumnA = array();
		if ( empty($modelName) ) return false;
		$dbtid = WModel::get( $modelName, 'dbtid', null, false );
		if ( empty($dbtid) ) return false;
		if ( is_string($allSimilarModel) ) {
			$sid = WModel::get( $allSimilarModel, 'sid', null, false );
			if ( empty($sid) ) $allSimilarModel = true;
		}
		if ( isset($allColumnA[$dbtid]) ) return $allColumnA[$dbtid];
		$designFieldsM = WModel::get( 'design.modelfields' );
		$designFieldsM->makeLJ( 'design.fields', 'fieldid', 'fieldid' );
		$designFieldsM->rememberQuery( true, 'Model_design_modelfields' );
		if ( is_string($allSimilarModel) && !empty($sid) ) {
			$designFieldsM->whereE( 'sid', $sid );
		} else {
			$designFieldsM->makeLJ( 'design.model', 'sid', 'sid', 0, 2 );
			$designFieldsM->whereE( 'dbtid', $dbtid, 2 );
		}
		$designFieldsM->whereE( 'publish', 1 );
		$designFieldsM->checkAccess();
		if ( 'column' == $return ) {
			$allColumnA[$dbtid] = $designFieldsM->load( 'lra', 'column' );
		} else {
			$designFieldsM->select( array( 'fdid', 'column', 'params' ) );
			$designFieldsM->select( array( 'form' ), 1 );
			$allColumnA[$dbtid] = $designFieldsM->load( 'ol' );
		}
		return $allColumnA[$dbtid];
	}
	public function getAllSearchableFields($modelName,$allSimilarModel=true) {
		static $allColumnA = array();
		if ( empty($modelName) ) return false;
		$dbtid = WModel::get( $modelName, 'dbtid', null, false );
		if ( empty($dbtid) ) return false;
		if ( is_string($allSimilarModel) ) {
			$sid = WModel::get( $allSimilarModel, 'sid', null, false );
			if ( empty($sid) ) $allSimilarModel = true;
		}
		if ( isset($allColumnA[$dbtid]) ) return $allColumnA[$dbtid];
		$designFieldsM = WModel::get( 'design.modelfields' );
		$designFieldsM->makeLJ( 'design.fields', 'fieldid', 'fieldid' );
		$designFieldsM->rememberQuery( true, 'Model_design_modelfields' );
		if ( is_string($allSimilarModel) && !empty($sid) ) {
			$designFieldsM->whereE( 'sid', $sid );
		} else {
			$designFieldsM->makeLJ( 'design.model', 'sid', 'sid', 0, 2 );
			$designFieldsM->whereE( 'dbtid', $dbtid, 2 );
		}
		$designFieldsM->whereE( 'searchable', 1 );
		$designFieldsM->whereIn( 'namekey', array( 'output.text', 'output.textarea', 'main.trans', 'main.transarea' ), 1 );
		$designFieldsM->whereE( 'publish', 1 );
		$designFieldsM->checkAccess();
		$allColumnA[$dbtid] = $designFieldsM->load( 'lra', 'column' );
		return $allColumnA[$dbtid];
	}
	public function resetcount() {
		$designModelM = WModel::get( 'design.model' );
		$designModelM->makeLJ( 'design.modelfields', 'sid', 'sid' );
		$designModelM->whereE( 'fields', 1 );
		$designModelM->select( 'fdid', 1, 'nb', 'count' );
		$designModelM->select( 'sid' );
		$designModelM->select( 'totalcustom' );
		$designModelM->groupBy( 'sid' );
		$modelA = $designModelM->load( 'ol' );
		foreach( $modelA as $field ) {
			if ( empty($field->nb) || $field->nb == $field->totalcustom ) continue;
			$designModelM->whereE( 'sid', $field->sid );
			$designModelM->setVal( 'totalcustom', $field->nb );
			$designModelM->update();
		}
		return true;
	}
}