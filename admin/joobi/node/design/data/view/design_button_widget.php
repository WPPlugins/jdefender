<?php defined('JOOBI_SECURE') or die('J....');
class Data_design_design_button_widget_view extends WDataView{
var $yid=501787;
var $wid='#design.node';
var $type=51;
var $params='autosave=1';
var $namekey='design_button_widget';
var $menu=13;
var $sid='#main.widget';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='Bootstrap Button widget';
var $name='1400708901APLU';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.fieldset',
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
'fid'=>2466100,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'design_button_widget_button',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1219769905FKPU',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'p[text]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466096,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_button_widget_text',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_button',
'name'=>'1206732400OWYY',
'description'=>'1400708900IRZZ' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=30',
'ordering'=>3,
'map'=>'p[link]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466101,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_button_widget_link',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_button',
'name'=>'1206961869IGNO',
'description'=>'1400788093LHUF' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'p[target]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466102,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_button_widget_target',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_button',
'name'=>'1356733768PTQW',
'description'=>'1400788093LHUG' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'map'=>'p[size]',
'level'=>0,
'initial'=>'standard',
'hidden'=>0,
'fid'=>2466098,
'core'=>1,
'did'=>'#main#main_button_size',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_button_widget_size',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_button',
'name'=>'1206961877KAKC',
'description'=>'1400708901APLS' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>6,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466099,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'design_button_widget_icon',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNB',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=20',
'ordering'=>7,
'map'=>'p[icon]',
'level'=>0,
'initial'=>'now',
'hidden'=>0,
'fid'=>2466095,
'core'=>1,
'did'=>'#main#main_icons',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_button_widget_icon_icon',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_icon',
'name'=>'1206961869IGNB',
'description'=>'1400708900IRZV' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>8,
'map'=>'p[color]',
'level'=>0,
'initial'=>'standard',
'hidden'=>0,
'fid'=>2466097,
'core'=>1,
'did'=>'#main#main_button_color',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#registered',
'namekey'=>'design_button_widget_color',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_icon',
'name'=>'1400708900IRZU',
'description'=>'1400708900IRZY' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466103,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'design_button_widget_popup',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1400788093LHUB',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'map'=>'p[popUpIs]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466104,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'design_button_widget_ispopup',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_popup',
'name'=>'1400788093LHUC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=10',
'ordering'=>11,
'map'=>'p[popUpWidth]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466105,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'design_button_widget_popUpWidth',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_popup',
'name'=>'1400788093LHUD',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=10',
'ordering'=>12,
'map'=>'p[popUpHeight]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2466106,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'design_button_widget_popUpHeight',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_button_widget_popup',
'name'=>'1400788093LHUE',
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
'mid'=>11591,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_apply_copy1270_copy1400696976_copy1400701062',
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
'mid'=>11592,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_save_copy2959_copy1400696976_copy1400701062',
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
'mid'=>11593,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_cancel_copy6018_copy1400696976_copy1400701062',
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
'mid'=>11594,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_help_copy3582_copy1400696976_copy1400701062',
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