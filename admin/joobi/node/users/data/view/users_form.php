<?php defined('JOOBI_SECURE') or die('J....');
class Data_users_users_form_view extends WDataView{
var $yid=501800;
var $wid='#users.node';
var $type=51;
var $params='horizmenu=1
autosave=1
phpfile=1';
var $namekey='users_form';
var $menu=13;
var $frontend=1;
var $sid='#users';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='Users Form';
var $fields=1;
var $useredit=1;
var $name='1208359284QWNS';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466274,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_name',
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
'type'=>'output.text',
'sid'=>'#users.details',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'minlgt=1',
'ordering'=>2,
'map'=>'first_name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469804,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_firstname',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DABT',
'description'=>'1433954805HOYU' ),
array(
'type'=>'output.text',
'sid'=>'#users.details',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'minlgt=1',
'ordering'=>3,
'map'=>'middle_name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469805,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_middlename',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DABV',
'description'=>'1433954805HOYV' ),
array(
'type'=>'output.text',
'sid'=>'#users.details',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'minlgt=1',
'ordering'=>4,
'map'=>'last_name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469806,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_lastname',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DABX',
'description'=>'1433954805HOYW' ),
array(
'type'=>'output.text',
'sid'=>'#users',
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
'fid'=>2466273,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_username',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRV',
'description'=>'' ),
array(
'type'=>'output.email',
'sid'=>'#users',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>6,
'map'=>'email',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466275,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_email',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRU',
'description'=>'' ),
array(
'type'=>'output.password',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>7,
'map'=>'x[password]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466276,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_password',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DADP',
'description'=>'' ),
array(
'type'=>'output.password',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>8,
'map'=>'x[password_confirmed]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466299,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_password_confirm',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1352316765KOLP',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'map'=>'mobile',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466292,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_mobile',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364838SGIL',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'map'=>'html',
'level'=>0,
'initial'=>1,
'hidden'=>0,
'fid'=>2466283,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_html',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1401465959YVN',
'description'=>'1401465960RGMK' ),
array(
'type'=>'output.image',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'dftimg=userx',
'ordering'=>11,
'map'=>'filid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466319,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_filid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1228709252AHXW',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>12,
'map'=>'lgid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466271,
'core'=>1,
'did'=>'#users#users_language',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_lgid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732405TIXE',
'description'=>'1401465959YVW' ),
array(
'type'=>'output.select',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>13,
'map'=>'timezone',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466277,
'core'=>1,
'did'=>'#users#users_timezone',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_timezone',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242178310INQN',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>14,
'map'=>'curid',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466289,
'core'=>1,
'did'=>'#users#users_currency',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'users_form_users_curid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961948HYTE',
'description'=>'1401465960RGML' ),
array(
'type'=>'output.access',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>15,
'map'=>'rolid',
'level'=>0,
'initial'=>0,
'hidden'=>0,
'fid'=>2466286,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'users_form_users_rolid',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>16,
'map'=>'blocked',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466300,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'users_form_users_block',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1246541676GWQN',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#users',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>17,
'map'=>'confirmed',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466315,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'users_form_users_confirmed',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRX',
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
'mid'=>11706,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'users_form_users_apply',
'faicon'=>'',
'color'=>'',
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
'mid'=>11707,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'users_form_users_save',
'faicon'=>'',
'color'=>'',
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
'mid'=>11708,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'users_form_users_cancel',
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
'ordering'=>4,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>11709,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'users_form_users_help',
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