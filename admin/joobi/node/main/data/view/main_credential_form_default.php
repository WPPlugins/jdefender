<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_credential_form_default_view extends WDataView{
var $yid=501403;
var $wid='#main.node';
var $type=51;
var $params='autosave=1';
var $namekey='main_credential_form_default';
var $menu=13;
var $pagination=1;
var $sid='#main.credential';
var $form=1;
var $icon='db';
var $rolid='#registered';
var $alias='Default Credential form';
var $name='1355852779ARKR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'alias',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460536,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_main_credentials_main_credential_alias',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'exepicklist=1
exepicklisttask=apply',
'ordering'=>2,
'map'=>'crdidtype',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460535,
'core'=>1,
'did'=>'#main#main_credentials_type',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_main_credentials_main_credential_type',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1',
'ordering'=>4,
'map'=>'publish',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460540,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_main_credentials_main_credential_publish',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1',
'ordering'=>11,
'map'=>'rolid',
'level'=>0,
'initial'=>7,
'hidden'=>0,
'fid'=>2460534,
'core'=>1,
'did'=>'#role#role_user_access',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_main_credentials_main_credential_rolid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>6,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'level'=>0,
'icon'=>'save',
'action'=>'apply',
'mid'=>9416,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8fe6z726',
'faicon'=>'fa-floppy-o',
'color'=>'info',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINB',
'description'=>'' ),
array(
'type'=>4,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'done',
'action'=>'save',
'mid'=>9415,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8fe6z725',
'faicon'=>'fa-check',
'color'=>'success',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'level'=>0,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>9417,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8fe6z727',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' )
);
}