<?php 


* @license GNU GPLv3 */

class Main_CoreWarningmessage_form extends WForms_default {
function create() {
	$this->content = '<span class="label label-warning">' . WText::t('1375977738AJMS') . '</span>';
	$this->content .= '<br /><span class="label label-warning">' . WText::t('1375977738AJMT') . '</span>';
	return true;
}}