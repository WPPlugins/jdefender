<?php defined('JOOBI_SECURE') or die('J....');
class Data_jdefender_jdefender_main_view extends WDataView{
var $yid=501648;
var $wid='#jdefender.application';
var $type=204;
var $params='mtype=image
phpfile=1';
var $namekey='jdefender_main';
var $menu=13;
var $subtype=110;
var $form=1;
var $icon='choice';
var $rolid='#manager';
var $alias='jDefender Horizontal Menu';
var $useredit=1;
var $name='1381452369MIXT';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'level'=>0,
'icon'=>'comment',
'action'=>'security-activity',
'mid'=>10744,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_activity',
'faicon'=>'fa-tasks',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1262946859HUKY',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'comment',
'action'=>'security-incident',
'mid'=>14235,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_incident',
'faicon'=>'fa-shirtsinbulk',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_activity',
'name'=>'1453566970CLZL',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'level'=>50,
'icon'=>'model',
'action'=>'security-badwords',
'mid'=>14260,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_audit_badwords',
'faicon'=>'fa-won',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_activity',
'name'=>'1453823763DDYH',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'level'=>50,
'icon'=>'model',
'action'=>'security-bademails',
'mid'=>14609,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_audit_bademails',
'faicon'=>'fa-connectdevelop',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_activity',
'name'=>'1488406250CZFM',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>5,
'level'=>0,
'icon'=>'report',
'action'=>'security-ip-blocked',
'mid'=>10750,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_security-ip-blocked',
'faicon'=>'fa-shield',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1459827188LAYT',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>6,
'level'=>0,
'icon'=>'members',
'action'=>'security-users',
'mid'=>10745,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_users',
'faicon'=>'fa-users',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_security-ip-blocked',
'name'=>'1229653442FEQZ',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>8,
'level'=>0,
'icon'=>'preferences',
'action'=>'security-ip',
'mid'=>10751,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_security-ip',
'faicon'=>'fa-cogs',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_security-ip-blocked',
'name'=>'1242110256EYLA',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'level'=>0,
'icon'=>'profile',
'action'=>'security-myip',
'mid'=>10752,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_my_ip',
'faicon'=>'fa-user',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_security-ip-blocked',
'name'=>'1242110256EYLB',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>13,
'level'=>50,
'icon'=>'filter',
'action'=>'security-audit',
'mid'=>10820,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_audit',
'faicon'=>'fa-shield',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382364837KIWA',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>14,
'level'=>50,
'icon'=>'model',
'action'=>'security-audit-model',
'mid'=>10843,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'jdefender_main_audit_model',
'faicon'=>'fa-table',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_audit',
'name'=>'1206732420EIUR',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>18,
'level'=>50,
'icon'=>'report',
'action'=>'security-activity-report',
'mid'=>10760,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report',
'faicon'=>'fa-tasks',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961854HENW',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>19,
'level'=>50,
'icon'=>'report',
'action'=>'security-activity-report',
'mid'=>10795,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report_activity',
'faicon'=>'fa-tasks',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_report',
'name'=>'1382379426ZSE',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>20,
'level'=>50,
'icon'=>'report',
'action'=>'security-activity-report-browser',
'mid'=>10846,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report_activity_browser',
'faicon'=>'fa-tasks',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_report_activity',
'name'=>'1382669591GNWM',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>21,
'level'=>50,
'icon'=>'report',
'action'=>'security-activity-report-os',
'mid'=>10827,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report_activity_os',
'faicon'=>'fa-tasks',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_report_activity',
'name'=>'1382669591GNWK',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>22,
'level'=>50,
'icon'=>'report',
'action'=>'security-activity-report-page-view',
'mid'=>10832,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report_activity_page_view',
'faicon'=>'fa-road',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_report',
'name'=>'1382462210SRPW',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>23,
'level'=>50,
'icon'=>'report',
'action'=>'security-blocked-report',
'mid'=>10796,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report_blcoked',
'faicon'=>'fa-tasks',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_report',
'name'=>'1382364843OQSY',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>24,
'level'=>50,
'icon'=>'report',
'action'=>'security-activity-report-page-visit',
'mid'=>11135,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_report_activity_pages_visits',
'faicon'=>'fa-random',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_report',
'name'=>'1385691711AHUC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>25,
'level'=>0,
'icon'=>'tools',
'action'=>'translation',
'mid'=>14367,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_tools_japps',
'faicon'=>'fa-wrench',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282438KRJW',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>26,
'level'=>0,
'icon'=>'lang',
'action'=>'apps-trans',
'mid'=>14368,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_apps-trans_japps',
'faicon'=>'fa-language',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1220793710GXYB',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'requirednode=translation.node',
'ordering'=>28,
'level'=>0,
'icon'=>'lang',
'action'=>'translation',
'mid'=>14369,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_language_japps',
'faicon'=>'fa-flag',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1206732392OZUS',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>30,
'level'=>0,
'icon'=>'send',
'action'=>'scheduler',
'mid'=>14370,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_scheduler_japps',
'faicon'=>'fa-calendar',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1298888291HSWK',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>33,
'level'=>0,
'icon'=>'listing',
'action'=>'main-credentials',
'mid'=>14371,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'jdefender_main_credentials_japps',
'faicon'=>'fa-key',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1340666912COKC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>35,
'level'=>0,
'icon'=>'listing',
'action'=>'apps-logs',
'mid'=>14372,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_apps-logs_japps',
'faicon'=>'fa-code-fork',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1253200893CXZC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'requirednode=main.node',
'ordering'=>36,
'level'=>0,
'icon'=>'listing',
'action'=>'main-cache',
'mid'=>14373,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_main-cache_japps',
'faicon'=>'fa-retweet',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1242178310INQS',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'requirednode=main.node',
'ordering'=>38,
'level'=>0,
'icon'=>'listing',
'action'=>'apps&search=jdefender',
'mid'=>14374,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_apps_japps',
'faicon'=>'fa-mobile',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1227580898LIDX',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>41,
'level'=>0,
'icon'=>'preferences',
'action'=>'apps&task=preferences',
'mid'=>14375,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_preferences_japps',
'faicon'=>'fa-cogs',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_tools_japps',
'name'=>'1206732392OZUQ',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>43,
'level'=>0,
'icon'=>'preferences',
'action'=>'security&task=preferences',
'mid'=>10746,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'jdefender_main_preferences',
'faicon'=>'fa-cogs',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUQ',
'description'=>'' ),
array(
'type'=>55,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>44,
'level'=>0,
'icon'=>'help',
'action'=>'https://joobi.co/index.php?option=com_jlinks&controller=redirect&link=support-portal',
'mid'=>10762,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_support',
'faicon'=>'fa-life-ring',
'color'=>'primary',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1213183509OYOB',
'description'=>'' ),
array(
'type'=>55,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>45,
'level'=>0,
'icon'=>'profile',
'action'=>'https://joobi.co/index.php?option=com_jlinks&controller=redirect&link=live-chat',
'mid'=>10763,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_live_cha',
'faicon'=>'fa-user',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_support',
'name'=>'1249442262PZQK',
'description'=>'' ),
array(
'type'=>55,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>47,
'level'=>0,
'icon'=>'about',
'action'=>'http://www.joobi.co/index.php?option=com_jlinks',
'mid'=>10765,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_documentation',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_support',
'name'=>'1213200727TEHQ',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>48,
'level'=>0,
'icon'=>'special',
'action'=>'apps&search=jdefender',
'mid'=>10766,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'jdefender_main_update',
'faicon'=>'fa-mobile',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#jdefender_main_support',
'name'=>'1227580898LIDX',
'description'=>'' )
);
}