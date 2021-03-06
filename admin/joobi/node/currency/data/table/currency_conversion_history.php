<?php defined('JOOBI_SECURE') or die('J....');
class Data_currency_currency_conversion_history_table extends WDataTable{
var $name='currency_conversion_history';
var $namekey='currency.conversion.history';
var $dbtid=751;
var $rolid='#allusers';
var $type=1;
var $pkey='curhisid';
var $suffix='conversion_history';
var $group='currency';
var $domain=51;
var $export=2;
var $engine=7;
var $node='currency';
var $columnsA=array(
array(
'dbcid'=>7154,
'name'=>'curhisid',
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
'namekey'=>'751curhisid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7155,
'name'=>'curid',
'pkey'=>0,
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>2,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'curid751',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7156,
'name'=>'curid_ref',
'pkey'=>0,
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>3,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'curid_ref751',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7157,
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
'export'=>1,
'namekey'=>'modified751',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7161,
'name'=>'exchange',
'pkey'=>0,
'checkval'=>1,
'type'=>8,
'attributes'=>1,
'mandatory'=>1,
'default'=>0.000000,
'ordering'=>5,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>12.4,
'export'=>1,
'namekey'=>'exchange751',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7162,
'name'=>'alias',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>255.0,
'export'=>1,
'namekey'=>'alias751',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7170,
'name'=>'exsiteid',
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
'export'=>1,
'namekey'=>'exsiteid751',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>751,
'ref_dbtid'=>625,
'name'=>'curid_ref',
'name2'=>'curid_ref',
'namekey'=>'FX_currency_conversion_history_curid_ref',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#currency#currency_conversion' ),
array(
'dbtid'=>751,
'ref_dbtid'=>624,
'name'=>'curid',
'name2'=>'curid',
'namekey'=>'FX_currency_conversion_history_curid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#currency#currency_node' )
);

var $contraintsA=array(
array(
'ctid'=>65683,
'type'=>3,
'namekey'=>'PK_currency_conversion_history' )
);
}