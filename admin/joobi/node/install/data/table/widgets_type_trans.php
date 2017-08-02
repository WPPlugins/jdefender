<?php defined('JOOBI_SECURE') or die('J....');
class Data_install_widgets_type_trans_table extends WDataTable{
var $name='widgets_type_trans';
var $namekey='widgets.type.trans';
var $dbtid=1031;
var $rolid='#allusers';
var $type=20;
var $pkey='wgtypeid,lgid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='install';
var $columnsA=array(
array(
'dbcid'=>9582,
'name'=>'wgtypeid',
'pkey'=>1,
'checkval'=>0,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'1031wgtypeid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9583,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'1031lgid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9584,
'name'=>'name',
'pkey'=>0,
'checkval'=>0,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>255.0,
'export'=>1,
'namekey'=>'name1031',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9585,
'name'=>'description',
'pkey'=>0,
'checkval'=>0,
'type'=>16,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'description1031',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9586,
'name'=>'auto',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>0,
'mandatory'=>1,
'default'=>2,
'ordering'=>5,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>0,
'namekey'=>'auto1031',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9587,
'name'=>'fromlgid',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>6,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'fromlgid1031',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>1031,
'ref_dbtid'=>1030,
'name'=>'wgtypeid',
'name2'=>'wgtypeid',
'namekey'=>'FK_widgets_type_trans_wgtypeid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#install#widgets_type' ),
array(
'dbtid'=>1031,
'ref_dbtid'=>199,
'name'=>'lgid',
'name2'=>'lgid',
'namekey'=>'FK_widgets_type_trans_lgid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#library#language_node' )
);

var $contraintsA=array(
array(
'ctid'=>66027,
'type'=>3,
'namekey'=>'PK_widgets_type_trans' )
);
}