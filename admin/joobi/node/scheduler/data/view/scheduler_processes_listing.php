<?php defined('JOOBI_SECURE') or die('J....');
class Data_scheduler_scheduler_processes_listing_view extends WDataView{
var $yid=501037;
var $wizard=1;
var $wid='#scheduler.node';
var $type=2;
var $params='nested=1
mtype=image';
var $namekey='scheduler_processes_listing';
var $menu=13;
var $dropdown=1;
var $pagination=1;
var $filters=1;
var $sid='#scheduler.processes';
var $form=1;
var $icon='thread';
var $rolid='#manager';
var $alias='Processes';
var $name='1298294166ECLV';
var $description='1470785104LKQE';
var $wname='1298294166ECLV';
var $wdescription='1298350275LTMN';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.checkbox',
'sid'=>'#scheduler.processes',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'pcsid',
'lid'=>11355,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_scheduler_processes_pcsid',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.rownumber',
'sid'=>'#scheduler.processes',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'pcsid',
'lid'=>11354,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_scheduler_processes_pcsid_2',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#schedulertrans',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'lien=controller=scheduler&task=edit(eid=schid)',
'ordering'=>3,
'map'=>'name',
'lid'=>11356,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_schedulertrans_name',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1209674941LKQO',
'description'=>'1298350273IXBE',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler.processes',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5
align=center',
'ordering'=>4,
'map'=>'created',
'lid'=>11357,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_scheduler_processes_created_1',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRY',
'description'=>'1298350273IXBF',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler.processes',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=73
align=center',
'ordering'=>5,
'map'=>'created',
'lid'=>11367,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_scheduler_processes_created',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294170PECN',
'description'=>'1298350273IXBF',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>6,
'map'=>'schid',
'lid'=>11358,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_scheduler_schid',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>7,
'publish'=>1,
'parent'=>0,
'params'=>'confirm=1
lslct=1',
'ordering'=>1,
'level'=>0,
'icon'=>'delete',
'action'=>'delete',
'mid'=>7105,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_delete',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>8867,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'scheduler_processes_listing_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $picklistA=array(
array(
'did'=>'#scheduler#scheduler_tasks',
'ordering'=>'0' )
);
}