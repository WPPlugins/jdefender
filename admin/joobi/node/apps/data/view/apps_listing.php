<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_listing_view extends WDataView{
var $yid=948;
var $wizard=1;
var $wid='#apps.node';
var $type=2;
var $params='altern=1
rclss=prout
graphtype=
phpfile=1';
var $namekey='apps_listing';
var $menu=13;
var $pagination=1;
var $filters=1;
var $sid='#apps';
var $form=1;
var $icon='extension';
var $rolid='#admin';
var $alias='Listing of Apps';
var $name='1267607212GWJP';
var $description='';
var $wname='1208362898QACD';
var $wdescription='1418159313RUIV';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.radio',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>1,
'map'=>'wid',
'lid'=>2772,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_wid',
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
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=image
remt=1
lien=controller=apps&task=show(eid=wid)
width=55
align=center',
'ordering'=>2,
'map'=>'wid',
'lid'=>13474,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_image',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961997BSYJ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'order=3
remt=1',
'ordering'=>3,
'map'=>'name',
'lid'=>13473,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_name_column',
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
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
lien=controller=apps&task=show(eid=wid)
style=font-weight:bold;font-size:larger;',
'ordering'=>4,
'map'=>'name',
'lid'=>2627,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_name',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_listing_apps_name_column',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#appstrans',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1',
'ordering'=>5,
'map'=>'description',
'lid'=>2624,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_appstrans_description',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_listing_apps_name_column',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=plan
width=180px
align=center',
'ordering'=>7,
'map'=>'version',
'lid'=>16805,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_plan',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1389879775LPOL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=status
width=180px
align=center',
'ordering'=>8,
'map'=>'version',
'lid'=>16753,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_status',
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
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=version
width=180px
align=center',
'ordering'=>9,
'map'=>'version',
'lid'=>2629,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_version',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVF',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'infonly=1
order=2
direction=1
align=center',
'ordering'=>11,
'map'=>'certify',
'lid'=>2804,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_certify',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1208193651IFKI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>12,
'map'=>'created',
'lid'=>16754,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_created',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>13,
'map'=>'publish',
'lid'=>2625,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_publish_3',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>14,
'map'=>'lversion',
'lid'=>2691,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_lversion',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>15,
'map'=>'modified',
'lid'=>16804,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_modified',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>16,
'map'=>'namekey',
'lid'=>5727,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_namekey',
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
'sid'=>'#apps.info',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>17,
'map'=>'userversion',
'lid'=>5830,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_info_userversion',
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
'sid'=>'#apps.info',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>18,
'map'=>'userlversion',
'lid'=>6036,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_info_userlversion',
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
'sid'=>'#apps.info',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>19,
'map'=>'beta',
'lid'=>5831,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_info_beta',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>20,
'map'=>'type',
'lid'=>5995,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_type_1',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>21,
'map'=>'folder',
'lid'=>13751,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_folder',
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
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>22,
'map'=>'enabled',
'lid'=>16810,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_userinfos_enabled',
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
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>23,
'map'=>'level',
'lid'=>5592,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_userinfos_level',
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
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>24,
'map'=>'expire',
'lid'=>5996,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_userinfos_expire',
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
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>25,
'map'=>'ltype',
'lid'=>6000,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_userinfos_ltype',
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
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>26,
'map'=>'maintenance',
'lid'=>6001,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_userinfos_maintenance',
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
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>27,
'map'=>'token',
'lid'=>5997,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_userinfos_token',
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
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>28,
'map'=>'type',
'lid'=>9117,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_listing_apps_type',
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
'params'=>'',
'ordering'=>1,
'level'=>0,
'icon'=>'up',
'action'=>'installall',
'mid'=>14760,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_installall',
'faicon'=>'fa-retweet',
'color'=>'success',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1495463414GQVO',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'up',
'action'=>'updateall',
'mid'=>11220,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_updateall',
'faicon'=>'fa-random',
'color'=>'success',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1356698583QHNC',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'level'=>0,
'icon'=>'default',
'action'=>'divider',
'mid'=>14761,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_divider_check2',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'level'=>0,
'icon'=>'refresh',
'action'=>'refresh',
'mid'=>1174,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_check',
'faicon'=>'fa-repeat',
'color'=>'primary',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINH',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'level'=>0,
'icon'=>'',
'action'=>'divider',
'mid'=>1343,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_divider_check',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'lslct=1',
'ordering'=>6,
'level'=>0,
'icon'=>'move',
'action'=>'show',
'mid'=>4016,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_show',
'faicon'=>'fa-eye',
'color'=>'info',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKM',
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
'mid'=>5821,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>8,
'level'=>0,
'icon'=>'archive',
'action'=>'refreshalllicense',
'mid'=>5822,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_refreshalllicense',
'faicon'=>'fa-refresh',
'color'=>'warning',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXE',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'level'=>0,
'icon'=>'publish',
'action'=>'token',
'mid'=>1342,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'apps_listing_token',
'faicon'=>'fa-key',
'color'=>'danger',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1357296145DBZH',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'level'=>0,
'icon'=>'',
'action'=>'divider',
'mid'=>4029,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_divider_32',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'lslct=1',
'ordering'=>11,
'level'=>0,
'icon'=>'default',
'action'=>'uninstall',
'mid'=>13519,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_uninstall',
'faicon'=>'fa-undo',
'color'=>'warning',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282443EZZS',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>12,
'level'=>0,
'icon'=>'default',
'action'=>'divider',
'mid'=>13518,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_divider_1',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>15,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>8563,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'apps_listing_help',
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
'flid'=>'#apps_listing_groupby',
'bktbefore'=>0,
'sid'=>'#apps',
'map'=>'wid',
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
'namekey'=>'apps_listing_groupby',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>0,
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#apps_listing_enabled',
'bktbefore'=>0,
'sid'=>'#apps.userinfos',
'map'=>'enabled',
'type'=>1,
'ref_sid'=>0,
'refmap'=>1,
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>3,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'apps_listing_enabled',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>0,
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#apps_get_extensions_948',
'bktbefore'=>0,
'sid'=>'#apps',
'map'=>'type',
'type'=>1,
'ref_sid'=>0,
'refmap'=>1,
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'apps_get_extensions_948',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>0,
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#application_list_beta_LJ',
'bktbefore'=>0,
'sid'=>'#apps.info',
'map'=>'beta',
'type'=>1,
'ref_sid'=>0,
'refmap'=>'apps.node.beta',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>5,
'typea'=>1,
'typeb'=>130,
'params'=>'',
'namekey'=>'application_list_beta_LJ',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' ),
array(
'flid'=>'#apps_listing_orderby_publish',
'bktbefore'=>0,
'sid'=>'#apps',
'map'=>'publish',
'type'=>8,
'ref_sid'=>0,
'refmap'=>'DESC',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'apps_listing_orderby_publish',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>0,
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#apps_listing_orderby_enabled',
'bktbefore'=>0,
'sid'=>'#apps.userinfos',
'map'=>'enabled',
'type'=>8,
'ref_sid'=>0,
'refmap'=>'ASC',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'apps_listing_orderby_enabled',
'name'=>'',
'ordering'=>7,
'requiresvalue'=>0,
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' )
);
}