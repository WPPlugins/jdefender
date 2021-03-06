<?php defined('JOOBI_SECURE') or die('J....');
class Data_library_dataset_columns_table extends WDataTable{
var $name='dataset_columns';
var $namekey='dataset.columns';
var $dbtid=616;
var $rolid='#allusers';
var $type=1;
var $pkey='dbcid';
var $suffix='columns';
var $group='db';
var $domain=9;
var $export='0';
var $noaudit=1;
var $engine=7;
var $node='library';
var $columnsA=array(
array(
'dbcid'=>6003,
'name'=>'dbcid',
'pkey'=>1,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'616dbcid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6004,
'name'=>'dbtid',
'pkey'=>0,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616dbtid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6005,
'name'=>'name',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'616name',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6171,
'name'=>'namekey',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>0,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'616namekey',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>6007,
'name'=>'pkey',
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
'namekey'=>'616pkey',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6008,
'name'=>'checkval',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616checkval',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6009,
'name'=>'type',
'pkey'=>0,
'checkval'=>0,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616type',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6010,
'name'=>'attributes',
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
'namekey'=>'616attributes',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6011,
'name'=>'mandatory',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>10,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616mandatory',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6012,
'name'=>'default',
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
'namekey'=>'616default',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6013,
'name'=>'ordering',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>12,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616ordering',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6014,
'name'=>'level',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>13,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616level',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6015,
'name'=>'rolid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>14,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616rolid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6016,
'name'=>'created',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>15,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'616created',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6157,
'name'=>'extra',
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
'namekey'=>'616extra',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6158,
'name'=>'size',
'pkey'=>0,
'checkval'=>0,
'type'=>8,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>17,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>8.0,
'export'=>1,
'namekey'=>'616size',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6160,
'name'=>'export',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>18,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'616export',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6244,
'name'=>'core',
'pkey'=>0,
'checkval'=>1,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>1,
'ordering'=>19,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'core616',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6712,
'name'=>'columntype',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>20,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'columntype616',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9751,
'name'=>'noaudit',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>22,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'noaudit616',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10970,
'name'=>'readable',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>23,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>100.0,
'export'=>1,
'namekey'=>'readable616',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10971,
'name'=>'fieldtype',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>24,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'fieldtype616',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>712,
'ref_dbtid'=>616,
'name'=>'dbcid',
'name2'=>'dbcid',
'namekey'=>'dbcid populate column',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#translation#translation_populate' ),
array(
'dbtid'=>616,
'ref_dbtid'=>549,
'name'=>'dbtid',
'name2'=>'dbtid',
'namekey'=>'FK_dataset_columns_dbtid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#dataset_tables' ),
array(
'dbtid'=>616,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_dataset_columns_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>455,
'ref_dbtid'=>616,
'name'=>'dbcid',
'name2'=>'dbcid',
'namekey'=>'FK_foreign_dataset_tables_constraintsitems',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#library#dataset_constraintsitems' )
);

var $contraintsA=array(
array(
'ctid'=>65496,
'type'=>3,
'namekey'=>'PK_dataset_columns' ),
array(
'ctid'=>65532,
'type'=>1,
'namekey'=>'UK_dataset_columns_namekey' ),
array(
'ctid'=>65549,
'type'=>1,
'namekey'=>'UK_dataset_columns_dbtid_name' ),
array(
'ctid'=>65863,
'type'=>2,
'namekey'=>'IX_dataset_columns_dbid_name' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65532,
'dbcid'=>6171,
'ordering'=>'0' ),
array(
'ctid'=>65549,
'dbcid'=>6004,
'ordering'=>'0' ),
array(
'ctid'=>65549,
'dbcid'=>6005,
'ordering'=>'0' )
);
}