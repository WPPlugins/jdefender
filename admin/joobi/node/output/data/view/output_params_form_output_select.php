<?php defined('JOOBI_SECURE') or die('J....');
class Data_output_output_params_form_output_select_view extends WDataView{
var $yid=501436;
var $wid='#output.node';
var $type=51;
var $params='autosave=1
subtitle=1
phpfile=1';
var $namekey='output_params_form_output_select';
var $frontend=1;
var $form=1;
var $icon='about';
var $rolid='#allusers';
var $alias='Picklist Field parameters ( form )';
var $name='1206732388KEHY';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>0,
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=selectpicklist
num=1
width=6',
'ordering'=>1,
'map'=>'p[selectdid]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2461040,
'core'=>1,
'did'=>'#output#output_field_picklist_select_picklist',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'output_params_form_output.select_choose',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1357059111JYQC',
'description'=>'1356733769MICR' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'exepicklist=1
exepicklisttask=apply
num=1
width=6',
'ordering'=>2,
'map'=>'p[selectype]',
'level'=>0,
'initial'=>3,
'hidden'=>0,
'fid'=>2461037,
'core'=>1,
'did'=>'#output#output_field_number_choice',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'output_params_form_output.select_selectype',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1357059111JYQB',
'description'=>'1357059112CQZW' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1
width=6',
'ordering'=>3,
'map'=>'p[selectstyle]',
'level'=>0,
'initial'=>7,
'hidden'=>0,
'fid'=>2461038,
'core'=>1,
'did'=>'#output#output_field_picklist_style',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'output_params_form_output.select_selectstyle',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGOF',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'p[exepicklist]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471143,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'output_params_form_output_select_exepicklist',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1459825657LTUN',
'description'=>'1459825657LTUP' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'map'=>'p[exepicklisttask]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471144,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#allusers',
'namekey'=>'output_params_form_output_select_exepicklisttask',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1459825657LTUO',
'description'=>'1459825657LTUQ' )
);
}