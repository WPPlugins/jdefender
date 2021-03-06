<?php defined('JOOBI_SECURE') or die('J....');
class Data_security_activity_pages_table extends WDataTable{
var $name='activity_pages';
var $namekey='activity.pages';
var $dbtid=3345;
var $rolid='#allusers';
var $type=1;
var $pkey='actpgid';
var $domain=87;
var $export=2;
var $engine=7;
var $node='security';
var $columnsA=array(
array(
'dbcid'=>9688,
'name'=>'actpgid',
'pkey'=>1,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>0,
'rolid'=>0,
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'3345actpgid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9689,
'name'=>'created',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>2,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'created3345',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9690,
'name'=>'actid',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>3,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'actid3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9691,
'name'=>'pagetile',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>100.0,
'export'=>1,
'namekey'=>'pagetile3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9692,
'name'=>'pageurl',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>254.0,
'export'=>1,
'namekey'=>'pageurl3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9693,
'name'=>'ctrid',
'pkey'=>0,
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>6,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'ctrid3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9700,
'name'=>'wid',
'pkey'=>0,
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>7,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'application3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10044,
'name'=>'eid',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>8,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'eid3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11116,
'name'=>'request',
'pkey'=>0,
'checkval'=>1,
'type'=>16,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>9,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'request3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11121,
'name'=>'login',
'pkey'=>0,
'checkval'=>1,
'type'=>25,
'attributes'=>1,
'mandatory'=>1,
'default'=>5,
'ordering'=>10,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'login3345',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>3345,
'ref_dbtid'=>3344,
'name'=>'actid',
'name2'=>'actid',
'namekey'=>'FK_activity_pages_actid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#security#activity_node' ),
array(
'dbtid'=>3345,
'ref_dbtid'=>475,
'name'=>'ctrid',
'name2'=>'ctrid',
'namekey'=>'FK_activity_pages_ctrid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#library#eguillage_node' )
);

var $contraintsA=array(
array(
'ctid'=>66051,
'type'=>3,
'namekey'=>'PK_activity_pages' ),
array(
'ctid'=>66056,
'type'=>2,
'namekey'=>'IX_activity_pages_created' ),
array(
'ctid'=>66057,
'type'=>2,
'namekey'=>'IX_activity_pages_actid' )
);
}