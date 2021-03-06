<?php defined('JOOBI_SECURE') or die('J....');
class Data_security_security_incident_dashboard_view extends WDataView{
var $yid=502330;
var $wid='#security.node';
var $type=2;
var $namekey='security_incident_dashboard';
var $menu=13;
var $dropdown=3;
var $sid='#security.incident';
var $form=1;
var $icon='link';
var $rolid='#manager';
var $alias='security incident on dashboard';
var $name='1453566970CLZL';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.selectone',
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>3,
'map'=>'severity',
'lid'=>20142,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>'#security#security_severity',
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_severity_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1454276769BVKA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.selectone',
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'type',
'lid'=>20143,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>'#security#security_incident',
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_type_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.iptracker',
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'dsict=6
align=center',
'ordering'=>5,
'map'=>'ip',
'lid'=>20144,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_ip_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1230531895KYXK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'lien=controller=users&task=show(eid=uid)
popuplink=1
align=center',
'ordering'=>6,
'map'=>'username',
'lid'=>20146,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_username_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1208359284QWNS',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'ovly=1
lien=controller=users&task=show(eid=uid)
popuplink=1',
'ordering'=>7,
'map'=>'name',
'lid'=>20147,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_name_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#security_listing_incident_username_copy1454691213',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'order=2
direction=1
formatdate=8
align=center',
'ordering'=>8,
'map'=>'created',
'lid'=>20150,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_created_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'map'=>'incdtid',
'lid'=>20178,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_incdtid2',
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
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'map'=>'url',
'lid'=>20155,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_url_copy1454691213',
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
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>11,
'map'=>'alias',
'lid'=>20151,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_alias_copy1454691213',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1453566969COLN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#security.incident',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'order=1
direction=1
width=2%',
'ordering'=>12,
'map'=>'publish',
'lid'=>20153,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_publish_copy1454691213',
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
'type'=>'',
'sid'=>'#users',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>13,
'map'=>'uid',
'lid'=>20156,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_listing_incident_uid_copy1454691213',
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
'ordering'=>4,
'level'=>0,
'icon'=>'deleteall',
'action'=>'delete',
'mid'=>14270,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'47cq19z72a3_copy1454691213',
'faicon'=>'fa-trash',
'color'=>'danger',
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
'ordering'=>5,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>14271,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'47cq19z72a4_copy1454691213',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);
}