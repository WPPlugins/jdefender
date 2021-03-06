<?php defined('JOOBI_SECURE') or die('J....');
class Data_library_dropset_node_table extends WDataTable{
var $name='dropset_node';
var $namekey='dropset.node';
var $dbtid=4;
var $rolid='#allusers';
var $type=1;
var $pkey='did';
var $suffix='node';
var $group='dropset';
var $domain=9;
var $export='0';
var $noaudit=1;
var $engine=7;
var $node='library';
var $columnsA=array(
array(
'dbcid'=>58,
'name'=>'wid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4wid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>68,
'name'=>'publish',
'pkey'=>0,
'checkval'=>0,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>1,
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4publish',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1066,
'name'=>'namekey',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'4namekey',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>2399,
'name'=>'level',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>16,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4level',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5652,
'name'=>'rolid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>18,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4rolid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>60,
'name'=>'core',
'pkey'=>0,
'checkval'=>0,
'type'=>25,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>10,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4core',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>61,
'name'=>'outype',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4outype',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>62,
'name'=>'map',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>20.0,
'export'=>1,
'namekey'=>'4map',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>64,
'name'=>'params',
'pkey'=>0,
'checkval'=>0,
'type'=>16,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>17,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4params',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>66,
'name'=>'modified',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>19,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'4modified',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>70,
'name'=>'type',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>9,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4type',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>73,
'name'=>'did',
'pkey'=>1,
'checkval'=>0,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'4did',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1067,
'name'=>'ref_sid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4ref_sid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1088,
'name'=>'first_all',
'pkey'=>0,
'checkval'=>1,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>12,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4first_all',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1089,
'name'=>'first_value',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>14,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4first_value',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1090,
'name'=>'first_caption',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>13,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'4first_caption',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1092,
'name'=>'external',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>11,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'4external',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1095,
'name'=>'lib_ext',
'pkey'=>0,
'checkval'=>0,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>15,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4lib_ext',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1626,
'name'=>'sid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'4sid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9510,
'name'=>'created',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>20,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'created4',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9511,
'name'=>'reload',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>21,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'reload4',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10745,
'name'=>'parent',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>22,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'parent4',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10748,
'name'=>'isparent',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>23,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'isparent4',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10821,
'name'=>'allowothers',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>24,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'allowothers4',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10836,
'name'=>'colorstyle',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>25,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'colorstyle4',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11123,
'name'=>'alias',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>26,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>100.0,
'export'=>1,
'namekey'=>'alias4',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>4,
'ref_dbtid'=>5,
'name'=>'wid',
'name2'=>'wid',
'namekey'=>'FK_dropset_node_wid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#apps#extension_node' ),
array(
'dbtid'=>4,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_picklist_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>180,
'ref_dbtid'=>4,
'name'=>'did',
'name2'=>'did',
'namekey'=>'FK_layout_dropset_did',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#library#layout_dropset' ),
array(
'dbtid'=>4,
'ref_dbtid'=>621,
'name'=>'sid',
'name2'=>'sid',
'namekey'=>'FK_dropset_node_sid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#library#model_node' ),
array(
'dbtid'=>3,
'ref_dbtid'=>4,
'name'=>'did',
'name2'=>'did',
'namekey'=>'FK_listings_dropset_did',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#library#layout_listings' ),
array(
'dbtid'=>4,
'ref_dbtid'=>621,
'name'=>'ref_sid',
'name2'=>'sid',
'namekey'=>'FK_dropset_node_ref_sid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>4,
'ref_table'=>'#library#model_node' ),
array(
'dbtid'=>1,
'ref_dbtid'=>4,
'name'=>'did',
'name2'=>'did',
'namekey'=>'FK_layout_multiforms_did',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>4,
'ref_table'=>'#library#layout_multiforms' ),
array(
'dbtid'=>512,
'ref_dbtid'=>4,
'name'=>'did',
'name2'=>'did',
'namekey'=>'FK_picklist_trans_did',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#library#dropset_trans' ),
array(
'dbtid'=>181,
'ref_dbtid'=>4,
'name'=>'did',
'name2'=>'did',
'namekey'=>'FK_dropset_multiforms_did',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#library#dropset_multiforms' ),
array(
'dbtid'=>4,
'ref_dbtid'=>4,
'name'=>'parent',
'name2'=>'parent',
'namekey'=>'FK_dropset_node_parent',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#library#dropset_node' ),
array(
'dbtid'=>6,
'ref_dbtid'=>4,
'name'=>'did',
'name2'=>'did',
'namekey'=>'FK_dropset_values_did',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#library#dropset_values' )
);

var $contraintsA=array(
array(
'ctid'=>8,
'type'=>1,
'namekey'=>'UK_dropset_node_namekey' ),
array(
'ctid'=>1007,
'type'=>2,
'namekey'=>'IX_dropset_node_wid_publish_level_rolid' )
);

var $contraintsItemsA=array(
array(
'ctid'=>8,
'dbcid'=>1066,
'ordering'=>5 )
);
}