<?php 


* @license GNU GPLv3 */

class Main_module_debugsite_controller extends WController {
function debugsite() {
	$dbgqry = WPref::load( 'PLIBRARY_NODE_DBGERR' );
	$pref = WPref::get( 'library.node' );
	$pref->updateUserPref( 'dbgerr', ! $dbgqry );
	WPages::redirect( 'previous' );
	return true;
}
}