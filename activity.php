<?php
define('APPTYPEID',14);            //应用id，不重复即可
define('CURSCRIPT','activity');        //其值与入口文件的文件名相同

require './source/class/class_core.php'; //引入核心类

//初始化
$discuz = C::app();
$discuz->init();

//逻辑分发处理
if(empty($_GET['mod']) || !in_array($_GET['mod'],array('index','list','company','ajax'))){
    $_GET['mod']='index';
}
define('CURMODULE',$GET['mod']);

//设置全局变量
$_G['disabledwidthauto']=1;

//根据Mod参数分发到对应模块
require_once libfile('activity/'.$_GET['mod'],'module');