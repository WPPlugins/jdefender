<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_credential_form_recaptcha_view extends WDataView{
var $yid=502182;
var $wid='#main.node';
var $type=51;
var $params='autosave=1';
var $namekey='main_credential_form_recaptcha';
var $menu=13;
var $pagination=1;
var $sid='#main.credential';
var $form=1;
var $icon='db';
var $rolid='#sadmin';
var $alias='Google reCaptcha Credential form';
var $name='1425007249TGNU';
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
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'alias',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469465,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'2da139z725_copy1425005509',
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
exepicklisttask=apply
num=1',
'ordering'=>2,
'map'=>'crdidtype',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469466,
'core'=>1,
'did'=>'#main#main_credentials_type',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'2da139z726_copy1425005509',
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
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'map'=>'username',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469468,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_recaptcha_site_key',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1425007246IWYI',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=50',
'ordering'=>4,
'map'=>'passcode',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469467,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_recaptcha_secret_key',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1225819494GKOC',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1',
'ordering'=>5,
'map'=>'publish',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469469,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'2da139z729_copy1425005509',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>6,
'publish'=>1,
'parent'=>0,
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>0,
'icon'=>'save',
'action'=>'apply',
'mid'=>13587,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2da139z72a_copy1425005509',
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
'params'=>'formvalidation=1',
'ordering'=>2,
'level'=>0,
'icon'=>'done',
'action'=>'save',
'mid'=>13588,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2da139z72b_copy1425005509',
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
'mid'=>13589,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2da139z72c_copy1425005509',
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