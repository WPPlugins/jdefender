<?php defined('JOOBI_SECURE') or die('J....');
class Data_security_security_activity_show_view extends WDataView{
var $yid=501640;
var $wid='#security.node';
var $type=151;
var $params='autosave=1';
var $namekey='security_activity_show';
var $menu=13;
var $pagination=1;
var $sid='#security.activity';
var $form=1;
var $icon='link';
var $rolid='#allusers';
var $alias='security activity Show';
var $name='1381452368HDUK';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.datetime',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>1,
'map'=>'modified',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464567,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_modified',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRL',
'description'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>2,
'map'=>'created',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464568,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_created',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRY',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>3,
'map'=>'name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464569,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_users_name',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961899DDKS',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>4,
'map'=>'ip',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464570,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_ip',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1220298080SMYT',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>5,
'map'=>'sessionid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464571,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_sessionid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1381452367HPOE',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>6,
'map'=>'secure',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464572,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_secure',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1213093191RHJC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>7,
'map'=>'uid',
'level'=>0,
'initial'=>'',
'hidden'=>1,
'fid'=>2464575,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_users_uid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>8,
'map'=>'ctyid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464573,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_ctyid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242112344IOLW',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activity',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'map'=>'uid',
'level'=>0,
'initial'=>'',
'hidden'=>1,
'fid'=>2464574,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_security_activity_uid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>2,
'publish'=>1,
'parent'=>0,
'params'=>'lslct=1',
'ordering'=>1,
'level'=>0,
'icon'=>'edit',
'action'=>'edit',
'mid'=>10698,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>10699,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>10700,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activity_show_security_activity_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);
}