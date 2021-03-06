<?php defined('JOOBI_SECURE') or die('J....');
class Data_design_design_picklist_form_view extends WDataView{
var $yid=501431;
var $wid='#design.node';
var $type=51;
var $params='autosave=1
phpfile=1';
var $namekey='design_picklist_form';
var $menu=13;
var $sid='#design.picklist';
var $form=1;
var $icon='choice';
var $rolid='#admin';
var $alias='Pick-list';
var $name='1219769913SSOH';
var $description='1470785115NESU';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.tab',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'droplist=14',
'ordering'=>1,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460977,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_general',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWZR',
'description'=>'' ),
array(
'type'=>'output.column',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469252,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_column1',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_general',
'name'=>'1298350843FMVJ',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#design.picklisttrans',
'required'=>1,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'maxlgt=100
droplist=14',
'ordering'=>3,
'map'=>'name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460978,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_name',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column1',
'name'=>'1206732392OZVB',
'description'=>'1219769906LJNO' ),
array(
'type'=>'output.textarea',
'sid'=>'#design.picklisttrans',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'map'=>'description',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460980,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_description',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column1',
'name'=>'1206732392OZVG',
'description'=>'1219769906LJNM' ),
array(
'type'=>'output.select',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>6,
'map'=>'rolid',
'level'=>0,
'initial'=>1,
'hidden'=>0,
'fid'=>2460997,
'core'=>1,
'did'=>'#role#role_user_access',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_access',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column1',
'name'=>'1206732412DAEO',
'description'=>'1417090743CGRO' ),
array(
'type'=>'output.text',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'maxlgt=50
width=30',
'ordering'=>7,
'map'=>'namekey',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460979,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_namekey',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column1',
'name'=>'1398436917DTKC',
'description'=>'1418398709LVIH' ),
array(
'type'=>'output.publish',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=30',
'ordering'=>8,
'map'=>'publish',
'level'=>0,
'initial'=>1,
'hidden'=>0,
'fid'=>2461018,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_publish',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column1',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.column',
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
'fid'=>2469253,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_column2',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_general',
'name'=>'1298350843FMVK',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1
width=30',
'ordering'=>10,
'map'=>'type',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471110,
'core'=>1,
'did'=>'#design#design_picklist_type_form',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_source',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column2',
'name'=>'1213794965CUDE',
'description'=>'1458784398DZTI' ),
array(
'type'=>'output.yesno',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=30',
'ordering'=>11,
'map'=>'allowothers',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469254,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_allowothers',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column2',
'name'=>'1417090743CGRN',
'description'=>'1417090743CGRP' ),
array(
'type'=>'output.select',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'droplist=14',
'ordering'=>12,
'map'=>'parent',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2468364,
'core'=>1,
'did'=>'#main#main_picklist_parent',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_choose_parent',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column2',
'name'=>'1409860322PSNC',
'description'=>'1409860322PSNE' ),
array(
'type'=>'output.select',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>13,
'map'=>'outype',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2460985,
'core'=>1,
'did'=>'#design#design_picklist_style',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_style',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column2',
'name'=>'1206961869IGOF',
'description'=>'1421361227IJHC' ),
array(
'type'=>'output.select',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1',
'ordering'=>14,
'map'=>'p[search]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471680,
'core'=>1,
'did'=>'#design#design_picklist_search',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_search',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_column2',
'name'=>'1206732365OQJI',
'description'=>'1489775455FNHI' ),
array(
'type'=>'output.tab',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'droplist=14',
'ordering'=>16,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2461019,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_values',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1209675038APRU',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'droplist=14
spantit=1
nestedview=design_picklist_listing_nested_values',
'ordering'=>17,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2461020,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_values_nested',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_values',
'name'=>'1227580858CXTV',
'description'=>'' ),
array(
'type'=>'output.tab',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>18,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2461015,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_code',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961912MJQB',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=picklist
cols=150
rows=50
width=1200px
height=800px',
'ordering'=>20,
'map'=>'x[code]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2461017,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_code_php',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#design_picklist_form_code',
'name'=>'1219769905FKRB',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>21,
'map'=>'x[sidmemory]',
'level'=>0,
'initial'=>'',
'hidden'=>1,
'fid'=>2461109,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_x_sidmemory',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'num=1',
'ordering'=>22,
'map'=>'core',
'level'=>0,
'initial'=>'',
'hidden'=>1,
'fid'=>2471111,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_core',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#design.picklist',
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>23,
'map'=>'sid',
'level'=>0,
'initial'=>'',
'hidden'=>1,
'fid'=>2461108,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_picklist_form_sid',
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
'mid'=>9472,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'2cutgvz7216',
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
'mid'=>9473,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'2cutgvz7217',
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
'mid'=>9474,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'2cutgvz7218',
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