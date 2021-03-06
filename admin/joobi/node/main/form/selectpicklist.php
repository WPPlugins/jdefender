<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.select' );
class Main_CoreSelectpicklist_form extends WForm_select {
	function create() {
		$status = parent::create();
		$link = WPage::linkPopUp( 'controller=design-picklist&sidmemory=' . $this->getValue( 'sid' ) );
		$this->content = '<div style="float:left;">' . $this->content . '</div>';
		$this->content .= '<div style="float:left; padding-left:10px">';
		$objButtonO = WPage::newBluePrint( 'button' );
		$objButtonO->text = WText::t('1357059105KDVU');
		$objButtonO->type = 'infoLink';
		$objButtonO->link = $link;
		$objButtonO->popUpIs = true;
		$objButtonO->popUpWidth = '90%';
		$objButtonO->popUpHeight = '90%';
		$objButtonO->color = 'success';
		$objButtonO->icon = 'fa-edit';
		$objButtonO->wrapperDiv = 'mediaButtonBord';
		$this->content .= WPage::renderBluePrint( 'button', $objButtonO );
		$this->content .= '</div>';
		return $status;
	}}