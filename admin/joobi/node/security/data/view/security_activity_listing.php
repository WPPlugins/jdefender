<?php defined('JOOBI_SECURE') or die('J....');
class Data_security_security_activity_listing_view extends WDataView{
var $yid=501639;
var $wid='#security.node';
var $type=2;
var $namekey='security_activity_listing';
var $menu=13;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#security.activity';
var $form=1;
var $icon='diagram';
var $rolid='#manager';
var $alias='security activity Listing';
var $name='1262946859HUKY';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>0,
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>15827,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_',
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
'type'=>'output.checkbox',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'actid',
'lid'=>15829,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_actid_1',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1381452367HPOD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.iptracker',
'sid'=>'#security.activity',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'dsict=6
align=center',
'ordering'=>3,
'map'=>'ip',
'lid'=>15833,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_ip',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241769455CJUW',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>4,
'map'=>'name',
'lid'=>15832,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_activity_listing_security_activity_users_name_contain',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1208359284QWNS',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=name_username
remt=1
lien=controller=users&task=show(eid=uid)
lienrolid=admin
popuplink=1
align=center',
'ordering'=>5,
'map'=>'name',
'lid'=>20058,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_users_name',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#security_activity_listing_security_activity_users_name_contain',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
popuplink=1
align=center',
'ordering'=>6,
'map'=>'email',
'lid'=>20060,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_users_email',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#security_activity_listing_security_activity_users_name_contain',
'name'=>'1206732411EGRU',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.selectone',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>7,
'map'=>'login',
'lid'=>20066,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>'#security#security_login',
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_activity_listing_login',
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
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'remt=1
popuplink=1
align=center',
'ordering'=>8,
'map'=>'username',
'lid'=>20059,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_users_username',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'lien=controller=security-activity-pages&task=listing(actid=actid)
lienrolid=admin
usebtn=1
color=success
popuplink=1
poph=95%
popw=90%
align=center',
'ordering'=>9,
'map'=>'actid',
'lid'=>15869,
'level'=>50,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_details',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364837KIWC',
'description'=>'1381500658RYCH',
'textlink'=>'1242282435FMHI' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'align=center',
'ordering'=>10,
'map'=>'returningcount',
'lid'=>15927,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'security_activity_listing_returningcount',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364838SGIM',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'direction=1
ovly=0
formatdate=5
align=center',
'ordering'=>11,
'map'=>'created',
'lid'=>15831,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_created',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1326234730JLQN',
'description'=>'1381500658RYCG',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'order=1
direction=1
formatdate=73
align=center',
'ordering'=>12,
'map'=>'modified',
'lid'=>15907,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_modified2',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282450QJBL',
'description'=>'1382364838SGIQ',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'ovly=0
spc=<br>
formatdate=77
align=center',
'ordering'=>13,
'map'=>'duration',
'lid'=>15830,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_duration',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1240888717QTPD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.types',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=os
align=center',
'ordering'=>14,
'map'=>'os',
'lid'=>15918,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_os',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282413PMND',
'description'=>'1382364838SGIT',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'infonly=1
align=center',
'ordering'=>15,
'map'=>'mobile',
'lid'=>15926,
'level'=>50,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_mobile',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364838SGIL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.types',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=browser
infonly=1
align=center',
'ordering'=>16,
'map'=>'browser',
'lid'=>15917,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_browser',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIOD',
'description'=>'1382364838SGIS',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'infonly=1
align=center',
'ordering'=>17,
'map'=>'secure',
'lid'=>15921,
'level'=>50,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_secure',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364838SGIJ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=referer
align=center',
'ordering'=>18,
'map'=>'referer',
'lid'=>15912,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'security_activity_listing_referer',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364838SGII',
'description'=>'1382364838SGIR',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'ovly=1',
'ordering'=>19,
'map'=>'referer',
'lid'=>15920,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'security_activity_listing_referer_overlay',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#security_activity_listing_referer',
'name'=>'1382364838SGII',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>20,
'map'=>'ctyid',
'lid'=>15836,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_ctyid',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESPA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=blocked
infonly=1',
'ordering'=>21,
'map'=>'blocked',
'lid'=>15923,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_blocked',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>1,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282446GIMB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>22,
'map'=>'uid',
'lid'=>15839,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_users_uid',
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
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>23,
'map'=>'space',
'lid'=>15919,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#admin',
'namekey'=>'security_activity_listing_space',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'1246509034IEIY',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>24,
'map'=>'uid',
'lid'=>15838,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_security_activity_uid',
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
'sid'=>'#security.activity',
'search'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'width=2%',
'ordering'=>25,
'map'=>'actid',
'lid'=>15837,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'2t5q48z36c',
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
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>7,
'publish'=>1,
'parent'=>0,
'params'=>'confirm=1
lslct=1',
'ordering'=>4,
'level'=>0,
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>10692,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'security_activity_listing_security_activity_delete',
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
'ordering'=>5,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>10693,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activity_listing_security_activity_help',
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
'flid'=>'#2tj738z72',
'bktbefore'=>0,
'sid'=>'#security.activity',
'map'=>'uid',
'type'=>1,
'ref_sid'=>0,
'refmap'=>'uid',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'2tj738z72',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#security#security_space_picklist',
'ordering'=>1 ),
array(
'did'=>'#security#security_country_pickliost',
'ordering'=>4 ),
array(
'did'=>'#security#security_blockedvisitor_picklist',
'ordering'=>3 ),
array(
'did'=>'#security#security_login',
'ordering'=>2 )
);
}