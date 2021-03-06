<?php defined('JOOBI_SECURE') or die('J....');
class Data_currency_currency_conversion_table extends WDataTable{
var $name='currency_conversion';
var $namekey='currency.conversion';
var $dbtid=625;
var $rolid='#allusers';
var $type=1;
var $pkey='curid,curid_ref';
var $suffix='conversion';
var $group='currency';
var $domain=51;
var $export=2;
var $engine=7;
var $node='currency';
var $columnsA=array(
array(
'dbcid'=>6107,
'name'=>'curid',
'pkey'=>1,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'625curid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6108,
'name'=>'curid_ref',
'pkey'=>1,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'625curid_ref',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6109,
'name'=>'name',
'pkey'=>0,
'checkval'=>0,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>100.0,
'export'=>1,
'namekey'=>'625name',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6110,
'name'=>'alias',
'pkey'=>0,
'checkval'=>0,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>100.0,
'export'=>1,
'namekey'=>'625alias',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6111,
'name'=>'exchange',
'pkey'=>0,
'checkval'=>1,
'type'=>8,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>12.4,
'export'=>1,
'namekey'=>'625exchange',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6112,
'name'=>'rate',
'pkey'=>0,
'checkval'=>1,
'type'=>8,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>12.4,
'export'=>1,
'namekey'=>'625rate',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6113,
'name'=>'fee',
'pkey'=>0,
'checkval'=>1,
'type'=>8,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>10.4,
'export'=>1,
'namekey'=>'625fee',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6114,
'name'=>'publish',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'625publish',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6115,
'name'=>'modified',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>9,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'625modified',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6640,
'name'=>'accepted',
'pkey'=>0,
'checkval'=>1,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>10,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'accepted625',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6641,
'name'=>'ordering',
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
'namekey'=>'ordering625',
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
'ref_table'=>'#currency#currency_conversion_history' ),
array(
'dbtid'=>625,
'ref_dbtid'=>624,
'name'=>'curid',
'name2'=>'curid',
'namekey'=>'FK_currency.conversion_curid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#currency#currency_node' )
);

var $contraintsA=array(
array(
'ctid'=>65493,
'type'=>3,
'namekey'=>'PK_currency_conversion_curid_curid_ref' )
);
}