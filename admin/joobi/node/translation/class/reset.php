<?php 


* @license GNU GPLv3 */

 class Translation_Reset_class extends WClasses {
 function resetAutoColumns(){
  $libraryTableM=WModel::get('library.table');
 $libraryTableM->openBracket();
 $libraryTableM->whereE('type', 20 );
 $libraryTableM->whereE('domain', 9 );
 $libraryTableM->closeBracket();
 $libraryTableM->operator('OR');
 $libraryTableM->openBracket();
 $libraryTableM->where('name','LIKE','translation%');
 $libraryTableM->whereE('domain', 11 );
 $libraryTableM->whereNotIn('name',array(  'translation_reference','translation_populate','translation_source')); $libraryTableM->closeBracket();
 $sidA=$libraryTableM->load('lra','dbtid');
 if(empty($sidA)) return false;
 foreach($sidA as $sid){
 $modelM=WTable::get($sid );
 $modelM->setVal('auto', 1 );
 $modelM->update();
 } 
 return true;
 }
}