<?php defined('JOOBI_SECURE') or die('J....');
class Data_scheduler_scheduler_main_layout_view extends WDataView{
var $yid=874;
var $wizard=1;
var $wid='#scheduler.node';
var $type=2;
var $namekey='scheduler_main_layout';
var $menu=13;
var $pagination=1;
var $filters=1;
var $sid='#scheduler';
var $form=1;
var $icon='send';
var $rolid='#manager';
var $alias='Scheduler';
var $name='1298888291HSWK';
var $description='1470785104LKQD';
var $wname='1298350274FGVG';
var $wdescription='1380064772GVOO';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>1,
'map'=>'schid',
'lid'=>2357,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_schid_4',
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
'type'=>'output.radio',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'schid',
'lid'=>2353,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_schid_7',
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
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'ptype',
'lid'=>6553,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_ptype',
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
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#schedulertrans',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'width=200',
'ordering'=>6,
'map'=>'name',
'lid'=>2348,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_schedulertrans_name_8',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#schedulertrans',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
lien=controller=scheduler&task=edit(eid=schid)(titleheader=name)
align=center',
'ordering'=>7,
'map'=>'name',
'lid'=>6506,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_schedulertrans_name',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_schedulertrans_name_8',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
align=center',
'ordering'=>8,
'map'=>'namekey',
'lid'=>6507,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_namekey',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_schedulertrans_name_8',
'name'=>'1398436917DTKC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#schedulertrans',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
ovly=1
lien=controller=scheduler-show&task=popup(eid=schid)(titleheader=name)
popuplink=1
popw=750
poph=500
align=center',
'ordering'=>9,
'map'=>'description',
'lid'=>13369,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_schedulertrans_description',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_schedulertrans_name_8',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#scheduler.processes',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=processes
direction=1
dsict=2
lien=controller=scheduler-popup&task=listing(eid=schid)(titleheader=name)
usebtn=1
color=success
popuplink=1
poph=500
popw=700
align=center',
'ordering'=>11,
'map'=>'pcsid',
'lid'=>11366,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_processes_pcsid',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294166ECLV',
'description'=>'',
'textlink'=>'1206961898PIOC' ),
array(
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>12,
'map'=>'maxprocess',
'lid'=>12567,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_maxprocess',
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
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>13,
'map'=>'priority',
'lid'=>2352,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_priority',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961898PIOD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'order=2
formatdate=5',
'ordering'=>14,
'map'=>'nextdate',
'lid'=>11579,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_nextdate_1',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961898PIOE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=nextlaunch
formatdate=73
style=font-weight:bold;',
'ordering'=>15,
'map'=>'nextdate',
'lid'=>2354,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_nextdate_6',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_scheduler_nextdate_1',
'name'=>'1298350272MURD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
formatdate=2',
'ordering'=>16,
'map'=>'nextdate',
'lid'=>11580,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_nextdate',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_scheduler_nextdate_1',
'name'=>'1206961898PIOE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5
align=center',
'ordering'=>17,
'map'=>'lastdate',
'lid'=>11359,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_lastdate_3',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961898PIOG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
formatdate=73
align=center',
'ordering'=>18,
'map'=>'lastdate',
'lid'=>2356,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_lastdate_5',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_scheduler_lastdate_3',
'name'=>'1206961898PIOG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
formatdate=5
align=center',
'ordering'=>19,
'map'=>'lastdate',
'lid'=>11360,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_lastdate',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#scheduler_main_layout_scheduler_lastdate_3',
'name'=>'1206961898PIOG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=frequency
align=center',
'ordering'=>20,
'map'=>'frequency',
'lid'=>2355,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_frequency',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961898PIOF',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=completed
infonly=1
align=center
typec=scheduler.completed',
'ordering'=>21,
'map'=>'',
'lid'=>5302,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_status',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.core',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'infonly=1',
'ordering'=>22,
'map'=>'core',
'lid'=>6396,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_core',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'order=1
direction=1',
'ordering'=>23,
'map'=>'publish',
'lid'=>2349,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_publish',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>24,
'map'=>'schid',
'lid'=>11577,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_schid_2',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#scheduler',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>25,
'map'=>'cron',
'lid'=>6552,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_scheduler_cron',
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
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'confirm=1
lslct=1',
'ordering'=>1,
'level'=>0,
'icon'=>'next',
'action'=>'processbe',
'mid'=>1023,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_processbe',
'faicon'=>'fa-chevron-right',
'color'=>'success',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961898PIOC',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'',
'action'=>'divider',
'mid'=>4476,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_divider_149',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>2,
'publish'=>1,
'parent'=>0,
'params'=>'lslct=1',
'ordering'=>4,
'level'=>0,
'icon'=>'edit',
'action'=>'edit',
'mid'=>999,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'scheduler_main_layout_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>0,
'params'=>'confirm=1
lslct=1',
'ordering'=>5,
'level'=>0,
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>1000,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'scheduler_main_layout_deleteall',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' ),
array(
'type'=>10,
'publish'=>1,
'parent'=>0,
'params'=>'lslct=1',
'ordering'=>6,
'level'=>0,
'icon'=>'copy',
'action'=>'copyall',
'mid'=>7863,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'scheduler_main_layout_copyall',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732372QTKK',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>7,
'level'=>0,
'icon'=>'',
'action'=>'divider',
'mid'=>1410,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'scheduler_main_layout_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>8558,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'scheduler_main_layout_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#scheduler_listing_groupby',
'bktbefore'=>0,
'sid'=>'#scheduler',
'map'=>'schid',
'type'=>9,
'ref_sid'=>0,
'refmap'=>'',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'scheduler_listing_groupby',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' )
);
}