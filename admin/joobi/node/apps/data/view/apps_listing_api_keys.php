<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_listing_api_keys_view extends WDataView{
var $yid=501747;
var $wid='#apps.node';
var $type=2;
var $params='nolist=1';
var $namekey='apps_listing_api_keys';
var $filters=1;
var $sid='#apps';
var $form=1;
var $icon='column';
var $rolid='#manager';
var $alias='API keys';
var $name='1389902747HCAE';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'order=1',
'ordering'=>1,
'map'=>'name',
'lid'=>16811,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'apps_show_version_listing_apps_level_name',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OXBR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps.userinfos',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'map'=>'token',
'lid'=>16813,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#allusers',
'namekey'=>'apps_show_version_listing_apps_level_token',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1389275714NKEJ',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#extension_show_level_filter1_copy1961_copy6791',
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
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'extension_show_level_filter1_copy1961_copy6791',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' ),
array(
'flid'=>'#extension_show_level_filter1_copy1961_cop_copy1444',
'bktbefore'=>0,
'sid'=>'#apps.userinfos',
'map'=>'token',
'type'=>1,
'ref_sid'=>0,
'refmap'=>'',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>6,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'extension_show_level_filter1_copy1961_cop_copy1444',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' ),
array(
'flid'=>'#extension_show_level_filter1_copy1961',
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
'namekey'=>'extension_show_level_filter1_copy1961',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' )
);
}