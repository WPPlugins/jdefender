<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_report_dashboard_view extends WDataView{
var $yid=500889;
var $wid='#apps.node';
var $type=151;
var $params='subtitle=1
mtype=image';
var $namekey='apps_report_dashboard';
var $sid='#apps';
var $form=1;
var $icon='comment';
var $rolid='#manager';
var $alias='Apps Report Dashboard';
var $faicon='fa-pie-chart';
var $name='1267764046CYTO';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>0,
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'',
'lid'=>10410,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'apps_report_dashboard_report',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961899DDKO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=newappsrpt',
'ordering'=>3,
'map'=>'wid',
'lid'=>10409,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'apps_report_dashboard_apps_wid_1',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_report_dashboard_report',
'name'=>'1267764045MNMG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=allappsrpt',
'ordering'=>6,
'map'=>'wid',
'lid'=>10411,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'apps_report_dashboard_apps_wid',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_report_dashboard_report',
'name'=>'1267764045MNMH',
'description'=>'',
'textlink'=>'' )
);

var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>'#apps',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=allrpt',
'ordering'=>2,
'map'=>'wid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>467196,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'apps_report_dashboard_total_apps',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294174MWUX',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=installedrpt',
'ordering'=>3,
'map'=>'wid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>467195,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'apps_report_dashboard_installed_apps',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294174MWUY',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'filef=updaterpt',
'ordering'=>4,
'map'=>'wid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>467194,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'apps_report_dashboard_total_no._of_new_updated_apps',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294174MWUZ',
'description'=>'' )
);
}