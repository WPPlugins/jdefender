<?php 


* @license GNU GPLv3 */

class Main_module_query_controller extends WController {
	function query() {
			$dbgqry = WPref::load( 'PLIBRARY_NODE_DBGQRY' );
		$pref = WPref::get( 'library.node' );
		$pref->updateUserPref( 'dbgqry', ! $dbgqry );
		WPages::redirect( 'previous' );
		return true;
	}
}