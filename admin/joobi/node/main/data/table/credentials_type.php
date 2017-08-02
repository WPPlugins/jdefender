<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_credentials_type_table extends WDataTable{
var $name='credentials_type';
var $namekey='credentials.type';
var $dbtid=1003;
var $rolid='#allusers';
var $type=1;
var $pkey='crdidtype';
var $domain=51;
var $export=2;
var $engine=7;
var $node='main';
var $columnsA=array(
array(
'dbcid'=>9209,
'name'=>'crdidtype',
'pkey'=>1,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>0,
'rolid'=>0,
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'1003crdidtype',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9210,
'name'=>'namekey',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>150.0,
'export'=>1,
'namekey'=>'namekey1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>9220,
'name'=>'category',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>11,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'category1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9211,
'name'=>'alias',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>150.0,
'export'=>1,
'namekey'=>'alias1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9212,
'name'=>'rolid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>5,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9213,
'name'=>'uid',
'pkey'=>0,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>10,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'uid1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9214,
'name'=>'modifiedby',
'pkey'=>0,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>6,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'modifiedby1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9215,
'name'=>'core',
'pkey'=>0,
'checkval'=>0,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>9,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'core1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9216,
'name'=>'publish',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>8,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'publish1003',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9217,
'name'=>'created',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>7,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'created1003',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9218,
'name'=>'modified',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>4,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'modified1003',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>997,
'ref_dbtid'=>1003,
'name'=>'crdidtype',
'name2'=>'crdidtype',
'namekey'=>'FK_credentials_node_crdidtype',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#main#credentials_node' ),
array(
'dbtid'=>1003,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_credentials_type_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>1003,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_credentials_type_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#users#members_node' )
);

var $contraintsA=array(
array(
'ctid'=>65982,
'type'=>3,
'namekey'=>'PK_credentials_type' ),
array(
'ctid'=>65983,
'type'=>1,
'namekey'=>'UK_credentials_type_namekey' ),
array(
'ctid'=>66304,
'type'=>2,
'namekey'=>'IX_credentials_type_category' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65983,
'dbcid'=>9210,
'ordering'=>5 )
);
}