<?php defined('JOOBI_SECURE') or die('J....');
class Data_design_design_icon_widget_view extends WDataView{
var $yid=501786;
var $wid='#design.node';
var $type=51;
var $params='autosave=1';
var $namekey='design_icon_widget';
var $menu=13;
var $sid='#main.widget';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='Bootstrap Icon widget';
var $name='1400708901APLT';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=20',
'ordering'=>2,
'map'=>'p[icon]',
'level'=>0,
'initial'=>'now',
'hidden'=>0,
'fid'=>2466089,
'core'=>1,
'did'=>'#main#main_icons',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_icon_widget_icon',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNB',
'description'=>'1400708900IRZV' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=20',
'ordering'=>3,
'map'=>'p[animation]',
'level'=>0,
'initial'=>'now',
'hidden'=>0,
'fid'=>2466188,
'core'=>1,
'did'=>'#main#main_iconsanimation',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_icon_widget_animation',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1400812016CMWY',
'description'=>'1400812017YLA' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'p[text]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466090,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_icon_widget_text',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282452RPKT',
'description'=>'1400708900IRZW' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'map'=>'p[color]',
'level'=>0,
'initial'=>'standard',
'hidden'=>0,
'fid'=>2466093,
'core'=>1,
'did'=>'#main#main_button_color',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_icon_widget_color',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1400708900IRZU',
'description'=>'1400708900IRZY' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>7,
'map'=>'p[size]',
'level'=>0,
'initial'=>'standard',
'hidden'=>0,
'fid'=>2466091,
'core'=>1,
'did'=>'#main#main_button_size',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_icon_widget_size',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1400708900IRZT',
'description'=>'1400708900IRZX' )
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
'mid'=>11587,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_apply_copy1270_copy1400696976',
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
'mid'=>11588,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_save_copy2959_copy1400696976',
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
'mid'=>11589,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_cancel_copy6018_copy1400696976',
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
'mid'=>11590,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_help_copy3582_copy1400696976',
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