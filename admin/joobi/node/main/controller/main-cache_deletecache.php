<?php 


* @license GNU GPLv3 */

class Main_cache_deletecache_controller extends WController {
	function deletecache() {
		$folder = WGet::folder();
		$folder->delete( WApplication::cacheFolder() );
		$folder->create( WApplication::cacheFolder() );
		$mess = WMessage::get();
		$mess->userS('1420121260PTWG');
		WPages::redirect( 'controller=main-cache&task=listing' );
		return true;
	}
}