<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_credential_form_easysocial_view extends WDataView{
var $yid=502220;
var $wid='#main.node';
var $type=51;
var $params='autosave=1';
var $namekey='main_credential_form_easysocial';
var $menu=13;
var $pagination=1;
var $sid='#main.credential';
var $form=1;
var $icon='db';
var $rolid='#sadmin';
var $alias='EasySocial Credential form';
var $name='1355852779ARKR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.column',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470035,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'main_credential_form_easysocial_column_1',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1357146843BHQE',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'alias',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470039,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_easysocial_name',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_credential_form_easysocial_column_1',
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
'ordering'=>3,
'map'=>'crdidtype',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470040,
'core'=>1,
'did'=>'#main#main_credentials_type',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_easysocial_type',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_credential_form_easysocial_column_1',
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
'fid'=>2470041,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_easysocial_publish',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_credential_form_easysocial_column_1',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'map'=>'username',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470042,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_easysocial_username',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_credential_form_easysocial_column_1',
'name'=>'1400174181LTIR',
'description'=>'1400176087FPTT' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=50',
'ordering'=>6,
'map'=>'passcode',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470043,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'main_credential_form_easysocial_passcode',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_credential_form_easysocial_column_1',
'name'=>'1225819494GKOC',
'description'=>'' ),
array(
'type'=>'output.column',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>7,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470036,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'main_credential_form_easysocial_column_2',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1357146843BHQF',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'nestedview=main_social_api',
'ordering'=>8,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470037,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'main_credential_form_easysocial_nested',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_credential_form_easysocial_column_2',
'name'=>'1227580858CXTV',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'map'=>'p[forparams]',
'level'=>0,
'initial'=>'',
'hidden'=>1,
'fid'=>2470038,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'main_credential_form_easysocial_main_credential_params',
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
'type'=>6,
'publish'=>1,
'parent'=>0,
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>0,
'icon'=>'save',
'action'=>'apply',
'mid'=>13843,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8pmkz72c_copy1400174047_copy1442446642_copy1442446824_copy1442447164',
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
'mid'=>13844,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8pmkz72d_copy1400174047_copy1442446642_copy1442446824_copy1442447164',
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
'mid'=>13845,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8pmkz72e_copy1400174047_copy1442446642_copy1442446824_copy1442447164',
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