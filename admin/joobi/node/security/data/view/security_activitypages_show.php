<?php defined('JOOBI_SECURE') or die('J....');
class Data_security_security_activitypages_show_view extends WDataView{
var $yid=501642;
var $wid='#security.node';
var $type=151;
var $params='autosave=1';
var $namekey='security_activitypages_show';
var $menu=13;
var $pagination=1;
var $sid='#security.activitypages';
var $form=1;
var $icon='link';
var $rolid='#allusers';
var $alias='security activitypages Show';
var $name='1381452368HDUM';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.datetime',
'sid'=>'#security.activitypages',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>1,
'map'=>'created',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464580,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_security_activitypages_created',
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
'sid'=>'#security.activitypages',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>2,
'map'=>'actid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464581,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_security_activitypages_actid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1381452367HPOD',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activitypages',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>3,
'map'=>'pagetile',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464582,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_security_activitypages_pagetile',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1381452367HPOG',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activitypages',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>4,
'map'=>'pageurl',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464583,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_security_activitypages_pageurl',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1381452367HPOH',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#security.activitypages',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'formatdate=5',
'ordering'=>5,
'map'=>'ctrid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464584,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_security_activitypages_ctrid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1381452367HPOI',
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
'mid'=>10710,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_edit',
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
'mid'=>10711,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_cancel',
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
'mid'=>10712,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'security_activitypages_show_security_activity_pages_help',
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