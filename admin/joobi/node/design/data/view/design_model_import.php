<?php defined('JOOBI_SECURE') or die('J....');
class Data_design_design_model_import_view extends WDataView{
var $yid=502221;
var $wizard=1;
var $wid='#design.node';
var $type=51;
var $namekey='design_model_import';
var $menu=13;
var $filters=1;
var $sid='#design.model';
var $form=1;
var $icon='extension';
var $tmid=672;
var $rolid='#admin';
var $alias='XML Import Upload file';
var $faicon='fa-retweet';
var $name='1206732405TIXA';
var $description='';
var $wname='1340745649OCDR';
var $wdescription='1443057212NEYD';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.file',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'x[importfile]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470050,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_model_import_files',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732421RJQA',
'description'=>'' ),
array(
'type'=>'output.ajaxinfo',
'sid'=>0,
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470048,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'design_model_import_status',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVH',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'level'=>0,
'icon'=>'archive',
'action'=>'importupload',
'mid'=>13846,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'design_model_import_import',
'faicon'=>'fa-arrow-circle-down',
'color'=>'success',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1207155379JNIN',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'default',
'action'=>'cancel',
'mid'=>13847,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'design_model_import_cancel',
'faicon'=>'fa-arrow-left',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHA',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'level'=>0,
'icon'=>'default',
'action'=>'divider',
'mid'=>13848,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'apps_show_divider_install_back_copy1442014948_copy1442546652',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>13850,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'apps_show_help_copy1442014948_copy1442546652',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#extension_show_enabled1_copy1442014948_copy1442546',
'bktbefore'=>0,
'sid'=>'#apps.userinfos',
'map'=>'enabled',
'type'=>8,
'ref_sid'=>0,
'refmap'=>'DESC',
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'extension_show_enabled1_copy1442014948_copy1442546',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' )
);
}