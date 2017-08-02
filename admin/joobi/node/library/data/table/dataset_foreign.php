<?php defined('JOOBI_SECURE') or die('J....');
class Data_library_dataset_foreign_table extends WDataTable{
var $name='dataset_foreign';
var $namekey='dataset.foreign';
var $dbtid=77;
var $rolid='#allusers';
var $type=1;
var $pkey='fkid';
var $suffix='foreign';
var $group='dataset';
var $domain=9;
var $export='0';
var $noaudit=1;
var $engine=7;
var $node='library';
var $columnsA=array(
array(
'dbcid'=>491,
'name'=>'map',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'77map',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>496,
'name'=>'publish',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>0,
'mandatory'=>1,
'default'=>1,
'ordering'=>11,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'77publish',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>497,
'name'=>'namekey',
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
'size'=>100.0,
'export'=>1,
'namekey'=>'77namekey',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>1242,
'name'=>'onupdate',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>3,
'ordering'=>12,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'77onupdate',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1243,
'name'=>'ondelete',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>3,
'ordering'=>13,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'77ondelete',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5585,
'name'=>'map2',
'pkey'=>0,
'checkval'=>0,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'77map2',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6169,
'name'=>'ref_dbtid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>3,
'level'=>0,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'77ref_dbtid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6170,
'name'=>'dbtid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>2,
'level'=>0,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'77dbtid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1076,
'name'=>'fkid',
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
'namekey'=>'77fkid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1240,
'name'=>'feid',
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
'namekey'=>'77feid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1241,
'name'=>'ref_feid',
'pkey'=>0,
'checkval'=>0,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>10,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'77ref_feid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6286,
'name'=>'ordering',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>99,
'ordering'=>14,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering77',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>77,
'ref_dbtid'=>549,
'name'=>'dbtid',
'name2'=>'dbtid',
'namekey'=>'FK_database_foreign_dbtid_dbtid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#dataset_tables' ),
array(
'dbtid'=>77,
'ref_dbtid'=>549,
'name'=>'ref_dbtid',
'name2'=>'dbtid',
'namekey'=>'FK_table_constraintitems_dbtable',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#library#dataset_tables' )
);

var $contraintsA=array(
array(
'ctid'=>11,
'type'=>1,
'namekey'=>'UK_dataset_foreign_dbtid_red_dbtid_map_map2' ),
array(
'ctid'=>1018,
'type'=>2,
'namekey'=>'IX_dataset_foreign_publish' ),
array(
'ctid'=>65864,
'type'=>2,
'namekey'=>'IX_dataset_foreign_dbtid_onupdate_ondelete' ),
array(
'ctid'=>66384,
'type'=>1,
'namekey'=>'UK_dataset_foreign_namekey' )
);

var $contraintsItemsA=array(
array(
'ctid'=>11,
'dbcid'=>6170,
'ordering'=>1 ),
array(
'ctid'=>11,
'dbcid'=>6169,
'ordering'=>2 ),
array(
'ctid'=>11,
'dbcid'=>491,
'ordering'=>3 ),
array(
'ctid'=>11,
'dbcid'=>5585,
'ordering'=>4 ),
array(
'ctid'=>66384,
'dbcid'=>497,
'ordering'=>1 )
);
}