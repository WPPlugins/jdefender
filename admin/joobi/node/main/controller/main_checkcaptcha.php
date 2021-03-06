<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Main_checkcaptcha_controller extends WController {
	function checkcaptcha() {
				$error = '<span class="captcha-mess label label-danger"><big>' . WText::t('1423415282OGNM') . '</big></span>';
		$correct = '<span class="captcha-mess label label-success"><big>' . WText::t('1423415282OGNN') . '</big></span>';
		$correctCaptcha = false;
		$captcha = WGlobals::getSession( 'captcha', 'id' );
		if ( !empty($captcha) ) {
			$captchaID  = WGlobals::get( 'captcha_id' );
			if ( $captchaID && is_numeric($captchaID) ) {
				$captchaHandler = WClass::get( 'main.captcha' );
				if ( ! $captchaHandler->verify( $captchaID ) ) {
					echo $error;
				} else {
					echo $correct;
					$correctCaptcha = true;
				}			} else {
				echo $error;
			}
			$_SESSION['joobi']['correctCaptcha'] = $correctCaptcha; 
			exit();
		}
		return true;
	}
}