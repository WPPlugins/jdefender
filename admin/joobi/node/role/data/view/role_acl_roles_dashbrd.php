<?php defined('JOOBI_SECURE') or die('J....');
class Data_role_role_acl_roles_dashbrd_view extends WDataView{
var $yid=1770;
var $wid='#role.node';
var $type=2;
var $params='nested=1';
var $namekey='role_acl_roles_dashbrd';
var $pagination=1;
var $filters=1;
var $sid='#role';
var $form=1;
var $icon='role';
var $rolid='#manager';
var $alias='Roles Dashboard';
var $name='';
var $description='1470784882CMWE';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'#role',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'rolid',
'lid'=>6484,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'acl_roles_dashbrd_role_rolid',
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
'sid'=>'#roletrans',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'lien=controller=role&task=edit(eid=rolid)',
'ordering'=>3,
'map'=>'name',
'lid'=>6486,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'acl_roles_dashbrd_roletrans_name',
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
'sid'=>'#roletrans',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'description',
'lid'=>6487,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'acl_roles_dashbrd_roletrans_description',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#role',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'map'=>'parent',
'lid'=>6489,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'acl_roles_dashbrd_role_parent',
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

var $filtersA=array(
array(
'flid'=>'#list_roles_dashboard',
'bktbefore'=>0,
'sid'=>'#role',
'map'=>'type',
'type'=>1,
'ref_sid'=>0,
'refmap'=>2,
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>1,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'list_roles_dashboard',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' )
);
}