<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_message_queue_table extends WDataTable{
var $name='message_queue';
var $namekey='message.queue';
var $dbtid=590;
var $rolid='#allusers';
var $type=1;
var $pkey='mgqid';
var $suffix='queue';
var $group='message';
var $domain=51;
var $export=2;
var $engine=7;
var $node='main';
var $columnsA=array(
array(
'dbcid'=>5726,
'name'=>'mgqid',
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
'namekey'=>'590mgqid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5728,
'name'=>'uid',
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
'namekey'=>'590uid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>5729,
'name'=>'created',
'pkey'=>0,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'590nextdate',
'core'=>1,
'columntype'=>1,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10798,
'name'=>'isread',
'pkey'=>0,
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>10,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'read590',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5727,
'name'=>'mgid',
'pkey'=>0,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'590mgid',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5730,
'name'=>'priority',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>254,
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'590priority',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5731,
'name'=>'expirationdate',
'pkey'=>0,
'checkval'=>0,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'590expirationdate',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5734,
'name'=>'params',
'pkey'=>0,
'checkval'=>0,
'type'=>16,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'590params',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7061,
'name'=>'type',
'pkey'=>0,
'checkval'=>0,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>0,
'ordering'=>8,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>0.0,
'export'=>1,
'namekey'=>'type590',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10795,
'name'=>'content',
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
'namekey'=>'content590',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10799,
'name'=>'title',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>11,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>255.0,
'export'=>1,
'namekey'=>'title590',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10800,
'name'=>'subtitle',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>12,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>255.0,
'export'=>1,
'namekey'=>'subtitle590',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10896,
'name'=>'link',
'pkey'=>0,
'checkval'=>1,
'type'=>14,
'attributes'=>0,
'mandatory'=>1,
'default'=>'',
'ordering'=>13,
'level'=>0,
'rolid'=>0,
'extra'=>0,
'size'=>254.0,
'export'=>1,
'namekey'=>'link590',
'core'=>1,
'columntype'=>0,
'noaudit'=>0,
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>590,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_message_queue_uid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>590,
'ref_dbtid'=>374,
'name'=>'mgid',
'name2'=>'mgid',
'namekey'=>'FK_message_queue_mgid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#email#mailing_node' )
);

var $contraintsA=array(
array(
'ctid'=>65546,
'type'=>3,
'namekey'=>'PK_message_queue' ),
array(
'ctid'=>66224,
'type'=>2,
'namekey'=>'IX_message_queue_uid_read_create' )
);
}