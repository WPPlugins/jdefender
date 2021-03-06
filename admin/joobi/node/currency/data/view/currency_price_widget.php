<?php defined('JOOBI_SECURE') or die('J....');
class Data_currency_currency_price_widget_view extends WDataView{
var $yid=501634;
var $wid='#currency.node';
var $type=51;
var $params='autosave=1';
var $namekey='currency_price_widget';
var $menu=13;
var $sid='#main.widget';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='Price widget';
var $name='1379006374DSBA';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=12',
'ordering'=>2,
'map'=>'p[value]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464535,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'currency_price_widget_value',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961911NYAN',
'description'=>'1380567465GYFW' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'map'=>'p[currency]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2464536,
'core'=>1,
'did'=>'#currency#currency_form_publish',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'currency_price_widget_currency',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961948HYTE',
'description'=>'1380567465GYFX' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'p[symbol]',
'level'=>0,
'initial'=>0,
'hidden'=>0,
'fid'=>2464537,
'core'=>1,
'did'=>'#currency#currency_symbol',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'currency_price_widget_symbol',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732366OVLY',
'description'=>'1380567465GYFY' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=3',
'ordering'=>5,
'map'=>'p[decimal]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465270,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'currency_price_widget__decimal',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382809902KIWC',
'description'=>'1390568313NLDN' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=3',
'ordering'=>6,
'map'=>'p[style]',
'level'=>0,
'initial'=>0,
'hidden'=>0,
'fid'=>2465271,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'currency_price_widget_style',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1390568312ELWS',
'description'=>'1390568313NLDO' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=10',
'ordering'=>7,
'map'=>'p[class]',
'level'=>0,
'initial'=>0,
'hidden'=>0,
'fid'=>2467431,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'currency_price_widget_class',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1406947719ADVY',
'description'=>'1406947719ADVZ' )
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
'mid'=>10669,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_apply_copy1270_copy4954',
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
'mid'=>10670,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_save_copy2959_copy5225',
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
'mid'=>10671,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_cancel_copy6018_copy3824',
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
'mid'=>10672,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_help_copy3582_copy1355',
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