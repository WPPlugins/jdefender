<?php defined('JOOBI_SECURE') or die('J....');
class Data_library_layout_mlinks_table extends WDataTable{
var $name='layout_mlinks';
var $namekey='layout.mlinks';
var $dbtid=9;
var $rolid='#allusers';
var $type=10;
var $pkey='mid';
var $suffix='mlinks';
var $group='layout';
var $domain=9;
var $export='0';
var $noaudit=1;
var $engine=7;
var $node='library';
var $columnsA=array(
array(
'dbcid'=>126,
'name'=>'yid',
'pkey'=>0,
'checkval'=>0,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9yid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>128,
'name'=>'publish',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>0,
'mandatory'=>1,
'default'=>1,
'ordering'=>12,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9publish',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>131,
'name'=>'ordering',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>99,
'ordering'=>9,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'9ordering',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>134,
'name'=>'level',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>11,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9level',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5656,
'name'=>'rolid',
'pkey'=>0,
'checkval'=>0,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9rolid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5752,
'name'=>'namekey',
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
'size'=>100.0,
'export'=>1,
'namekey'=>'9namekey',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>127,
'name'=>'type',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9type',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>129,
'name'=>'parent',
'pkey'=>0,
'checkval'=>1,
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
'namekey'=>'9parent',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>130,
'name'=>'params',
'pkey'=>0,
'checkval'=>0,
'type'=>16,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>15,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9params',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>136,
'name'=>'icon',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'9icon',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>138,
'name'=>'action',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>150.0,
'export'=>1,
'namekey'=>'9action',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1702,
'name'=>'mid',
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
'namekey'=>'9mid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>2484,
'name'=>'private',
'pkey'=>0,
'checkval'=>0,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>0,
'ordering'=>13,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9private',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3240,
'name'=>'position',
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
'namekey'=>'9position',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3551,
'name'=>'core',
'pkey'=>0,
'checkval'=>0,
'type'=>25,
'attributes'=>0,
'mandatory'=>1,
'default'=>1,
'ordering'=>14,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'9core',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10179,
'name'=>'faicon',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>17,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>50.0,
'export'=>1,
'namekey'=>'faicon9',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10180,
'name'=>'color',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>18,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>15.0,
'export'=>1,
'namekey'=>'color9',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10671,
'name'=>'xsvisible',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>19,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'xsvisible9',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10672,
'name'=>'xshidden',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>20,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'xshidden9',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10719,
'name'=>'devicevisible',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>21,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>100.0,
'export'=>1,
'namekey'=>'devicevisible9',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10720,
'name'=>'devicehidden',
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
'size'=>100.0,
'export'=>1,
'namekey'=>'devicehidden9',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>9,
'ref_dbtid'=>2,
'name'=>'yid',
'name2'=>'yid',
'namekey'=>'FK_layout_menus_yid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#layout_node' ),
array(
'dbtid'=>485,
'ref_dbtid'=>9,
'name'=>'mid',
'name2'=>'mid',
'namekey'=>'FK_layout_mlinkstrans_mid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#layout_mlinkstrans' ),
array(
'dbtid'=>9,
'ref_dbtid'=>9,
'name'=>'parent',
'name2'=>'mid',
'namekey'=>'FK_Parent9_parentmid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#library#layout_mlinks' ),
array(
'dbtid'=>9,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_view_menus_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#role#role_node' )
);

var $contraintsA=array(
array(
'ctid'=>1006,
'type'=>2,
'namekey'=>'layout_mlinks_index_yid_publish_level_rolid_ordering' ),
array(
'ctid'=>47963,
'type'=>1,
'namekey'=>'UK_layout_menus_namekey' )
);

var $contraintsItemsA=array(
array(
'ctid'=>47963,
'dbcid'=>5752,
'ordering'=>1 )
);
}