<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_token_view extends WDataView{
var $yid=976;
var $wizard=1;
var $wid='#apps.node';
var $type=51;
var $params='autosave=1';
var $namekey='apps_token';
var $menu=13;
var $form=1;
var $icon='coupon';
var $rolid='#sadmin';
var $alias='Enter API key';
var $name='1389275715RJLO';
var $description='1470784870OXXT';
var $wname='1389275716SJHL';
var $wdescription='1230874957AEHC';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=apimessage
ws=1
width=60',
'ordering'=>1,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465305,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'apps_token_notice',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1213285196AFGY',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'ws=1
width=60',
'ordering'=>2,
'map'=>'x[token]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>3571,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'apps_token_token',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1389275714NKEJ',
'description'=>'1389275715RJLN' ),
array(
'type'=>'output.customized',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=currenttoken
ws=1
width=60',
'ordering'=>3,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465240,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'apps_token_existing',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1389386704BRFY',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'notitle=1
spantit=1
nestedview=apps_listing_api_keys
ws=1
width=60',
'ordering'=>4,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465258,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'apps_token_keys',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1389902747HCAE',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>4,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'level'=>0,
'icon'=>'done',
'action'=>'save',
'mid'=>1344,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'apps_token_save',
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
'ordering'=>2,
'level'=>0,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>1345,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'apps_token_cancel',
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