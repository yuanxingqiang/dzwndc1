<?php

//定义安全常量
if(!defined('IN_DISCUZ')){
    exit('Access Denied');
}

//逻辑分发
if(empty($_GET['action'])){
    $_GET['action'] = 'index';
}

if($_GET['action'] == 'index'){ 
    include template('activity/activity_index');//此处改为引入模板
}