<?php defined('JOOBI_SECURE') or die('J....');
class Data_email_email_preferences_view extends WDataView{
var $yid=501552;
var $wid='#email.node';
var $type=51;
var $params='autosave=1
subtitle=1
phpfile=1';
var $namekey='email_preferences';
var $menu=13;
var $form=1;
var $icon='about';
var $rolid='#manager';
var $alias='Email Preferences';
var $name='1376354241MCXO';
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
'fid'=>2455979,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_mail_column_1',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350446IEXT',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'faicon=fa-user
color=success',
'ordering'=>2,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4574,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_sender_informations',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_1',
'name'=>'1455125726ASVX',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'map'=>'c[email.node][enable]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471088,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_enable',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1457054596SPIO',
'description'=>'1238171067TJEZ' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'c[email.node][unconfirmed]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471758,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_unconfirmed',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1491249555REMX',
'description'=>'1491249556AIHA' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'exepicklist=1
exepicklisttask=applypref',
'ordering'=>5,
'map'=>'c[email.node][usecms]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4569,
'core'=>1,
'did'=>'#email#email_mailer_used',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_usecms',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732441PCHA',
'description'=>'1429656247FOMX' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'requirednode=main.node',
'ordering'=>6,
'map'=>'c[email.node][themedefault]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471921,
'core'=>1,
'did'=>'#main#main_theme_default',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_default_theme',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1494944024QFXX',
'description'=>'1451226241CQCS' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'exepicklist=1
exepicklisttask=applypref',
'ordering'=>7,
'map'=>'c[email.node][type]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2470826,
'core'=>1,
'did'=>'#email#email_type',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_type',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1451226240CBOU',
'description'=>'1494944024QFXY' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>8,
'map'=>'c[email.node][fromname]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2455359,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_fromname',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OWZZ',
'description'=>'1230529409HCEQ' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'email=1',
'ordering'=>9,
'map'=>'c[email.node][fromemail]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4570,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_fromemail',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAB',
'description'=>'1206732400OXAA' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>10,
'map'=>'c[email.node][replyname]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4572,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_replyname',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAD',
'description'=>'1230529409HCES' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'email=1',
'ordering'=>11,
'map'=>'c[email.node][replyemail]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4573,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_replyemail',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAF',
'description'=>'1206732400OXAE' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>12,
'map'=>'c[email.node][senderemail]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4571,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_senderemail',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAH',
'description'=>'1418159448BFDE' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>13,
'map'=>'c[email.node][embedimages]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459632,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_embedimages',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1211811528BLZC',
'description'=>'1490899739NGXJ' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'requirednode=main.node',
'ordering'=>14,
'map'=>'c[main.node][attachement]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471746,
'core'=>1,
'did'=>'#main#main_attachement',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_attachement',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1490899736NQWF',
'description'=>'1457054596SPIP' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>15,
'map'=>'c[email.node][multiplepart]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>464528,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_multiplepart',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1238386599SWCB',
'description'=>'1238386599SWCA' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=encoding',
'ordering'=>16,
'map'=>'c[email.node][encoding]',
'level'=>0,
'initial'=>'base64',
'hidden'=>0,
'fid'=>4498,
'core'=>1,
'did'=>'#email#email_encoding_format',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_encoding',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAM',
'description'=>'1230529409HCEP' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'ws=1
width=10',
'ordering'=>17,
'map'=>'c[email.node][charset]',
'level'=>0,
'initial'=>'utf-8',
'hidden'=>0,
'fid'=>4577,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_charset',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAO',
'description'=>'1230529409HCET' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=6',
'ordering'=>18,
'map'=>'c[email.node][wordwrap]',
'level'=>0,
'initial'=>200,
'hidden'=>0,
'fid'=>4497,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_wordwrap',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1206732400OXAQ',
'description'=>'1206732400OXAP' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>19,
'map'=>'c[email.node][displayname]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>463567,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_displayname',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1221500643MXPC',
'description'=>'1432597570JKXF' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>20,
'map'=>'c[email.node][strictsender]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469754,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_strictsender',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sender_informations',
'name'=>'1432597570JKXE',
'description'=>'1230529409HCEV' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'color=info',
'ordering'=>21,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465288,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_mailers',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_1',
'name'=>'1358226529IGTD',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'spantit=1
nestedview=email_mailer_listing_email_mailer_nested',
'ordering'=>22,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465289,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_multiple_mailers_nested',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mailers',
'name'=>'1233297975SESK',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'faicon=fa-mobile
color=warning',
'ordering'=>24,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465540,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'apps_preferences_form_sms',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_1',
'name'=>'1391084842GKUF',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>25,
'map'=>'c[email.node][smsenable]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465541,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'apps_preferences_form_email_smsenable',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sms',
'name'=>'1394047259FZYB',
'description'=>'1394047259FZYD' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>26,
'map'=>'c[email.node][smssplit]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465542,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'apps_preferences_form_email_smssplit',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_sms',
'name'=>'1394047259FZYC',
'description'=>'1394047259FZYE' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'faicon=fa-bullhorn
color=info',
'ordering'=>27,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469179,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'apps_preferences_form_notification',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_1',
'name'=>'1215507793BYPC',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>28,
'map'=>'c[email.node][usenotification]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469180,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#sadmin',
'namekey'=>'apps_preferences_form_email_usenotification',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_notification',
'name'=>'1413480000AADX',
'description'=>'1413480000AADZ' ),
array(
'type'=>'output.column',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>29,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2455978,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_mail_column_2',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350446IEXS',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'color=warning',
'ordering'=>30,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4575,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_general_preferences_mail_config',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_2',
'name'=>'1206732400OXAI',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'exepicklist=1
exepicklisttask=applypref',
'ordering'=>31,
'map'=>'c[email.node][mailer]',
'level'=>0,
'initial'=>'phpmail',
'hidden'=>0,
'fid'=>3988,
'core'=>1,
'did'=>'#email#email_mailer_options',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_mailer',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_mail_config',
'name'=>'1206732400OXAK',
'description'=>'1206732400OXAJ' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>32,
'map'=>'c[email.node][sendmailpath]',
'level'=>0,
'initial'=>'/usr/sbin/sendmail',
'hidden'=>0,
'fid'=>4568,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_sendmailpath',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_mail_config',
'name'=>'1206732400OXAS',
'description'=>'1206732400OXAR' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>33,
'map'=>'c[email.node][hostname]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4576,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_hostname',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_mail_config',
'name'=>'1213269308ATGG',
'description'=>'1418159448BFDF' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'color=danger',
'ordering'=>34,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465203,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_general_preferences_dkim_settings',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_2',
'name'=>'1389097357SYEW',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'exepicklist=1
exepicklisttask=applypref',
'ordering'=>35,
'map'=>'c[email.node][mailerdkimyesno]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465204,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_mail_form_dkim_yesno',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_dkim_settings',
'name'=>'1389276474NYRE',
'description'=>'1389109176QJTJ' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>36,
'map'=>'c[email.node][dkimselector]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471587,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_mail_form_dkim_dkimselector',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_dkim_settings',
'name'=>'1480688989OSRE',
'description'=>'1480688990GUIW' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>37,
'map'=>'c[email.node][dkimkeyloc]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465205,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_mail_form_dkim_dkimkeyloc',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_dkim_settings',
'name'=>'1389109176QJTH',
'description'=>'1389109176QJTK' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>38,
'map'=>'c[email.node][dkimpassphrase]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465206,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_mail_form_dkim_dkimpassphrase',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_dkim_settings',
'name'=>'1389109176QJTI',
'description'=>'1389109176QJTL' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>39,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4567,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_general_preferences_smtp_config',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_2',
'name'=>'1206732400OXAV',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>40,
'map'=>'c[email.node][smtp_host]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2455358,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_smtp_host',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_smtp_config',
'name'=>'1242282446GIJE',
'description'=>'1206732400OXAW' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'width=6',
'ordering'=>41,
'map'=>'c[email.node][smtp_port]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>3985,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_smtp_port',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_smtp_config',
'name'=>'1291008730NUNX',
'description'=>'1206732400OXAW' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=smtpsecure',
'ordering'=>42,
'map'=>'c[email.node][smtp_secure]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>4496,
'core'=>1,
'did'=>'#email#email_smtpsecure',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_smtp_secure',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_smtp_config',
'name'=>'1206732400OXAZ',
'description'=>'1206732400OXAY' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>43,
'map'=>'c[email.node][smtp_auth_required]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>3986,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_smtp_auth_required',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_smtp_config',
'name'=>'1206732400OXBB',
'description'=>'1206732400OXBA' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>44,
'map'=>'c[email.node][smtp_username]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>3984,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_smtp_username',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_smtp_config',
'name'=>'1206732400OXBD',
'description'=>'1206732400OXBC' ),
array(
'type'=>'output.password',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>45,
'map'=>'c[email.node][smtp_password]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>3983,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_smtp_password',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_smtp_config',
'name'=>'1206732400OXBF',
'description'=>'1206732400OXBE' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'faicon=fa-area-chart
color=info',
'ordering'=>46,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465308,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_general_preferences_statistics',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_2',
'name'=>'1206734818GVVM',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>47,
'map'=>'c[email.node][keep_email]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2471551,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#listmanager',
'namekey'=>'apps_preferences_form_email_node_keep_email',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1409690288JIOT',
'description'=>'1409690289LNKX' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>48,
'map'=>'c[email.node][statistics_sent]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465309,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_sent',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1452555139AFID',
'description'=>'1411591679SPDN' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>49,
'map'=>'c[email.node][statistics_read]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465310,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_read',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1389694549OWBJ',
'description'=>'1391563523DXRB' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>50,
'map'=>'c[email.node][statistics_link]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469141,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_link',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1411145491LZHV',
'description'=>'1411591679SPDO' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>51,
'map'=>'c[email.node][statistics_peruser]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465311,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_peruser',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1411591679SPDM',
'description'=>'1391563523DXRC' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>52,
'map'=>'c[email.node][statistics_logfail]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2465312,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_logfail',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1391563523DXQZ',
'description'=>'1391607530RADD' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>53,
'map'=>'c[email.node][statistics_inactive]',
'level'=>0,
'initial'=>91,
'hidden'=>0,
'fid'=>2471554,
'core'=>1,
'did'=>'#email#email_statistics_kept',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_inactive',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1477606467AOFO',
'description'=>'1391563523DXRD' ),
array(
'type'=>'output.select',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>54,
'map'=>'c[email.node][statistics_clean]',
'level'=>0,
'initial'=>91,
'hidden'=>0,
'fid'=>2465313,
'core'=>1,
'did'=>'#email#email_statistics_kept',
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_statistics_clean',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_statistics',
'name'=>'1391607530RADC',
'description'=>'1477667689GKLB' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'faicon=fa-unlock-alt
color=danger',
'ordering'=>55,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469343,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_general_preferences_emailbyurl',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_preferences_form_mail_column_2',
'name'=>'1420549349HLDH',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>56,
'map'=>'c[email.node][allowbyurl]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469344,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_allowbyurl',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_emailbyurl',
'name'=>'1420549349HLDI',
'description'=>'1420549350PINY' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>57,
'map'=>'c[email.node][allowbyurlpwd]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>2469345,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#admin',
'namekey'=>'apps_preferences_form_email_node_allowbyurlpwd',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_general_preferences_emailbyurl',
'name'=>'1401307164QWBR',
'description'=>'1420549350PINZ' )
);
}