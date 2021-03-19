<?php
//定义安全常量
if(!defined('IN_DISCUZ')){
    exit('Access Denied');
}

//逻辑分发
if(empty($_GET['action'])){
    $_GET['action'] = 'changeusername';
}

if($_GET['action'] == 'changeusername'){ 
    $uid = $_POST['userId'];
	$newname = $_POST['newname'];
	if(empty($newname) || $newname == ''){
		showmessage('新用户名不能为空！','home.php?mod=spacecp',array(),array('alert'=>'error','msgtype'=>2));
	}
	
	$newnameArray = str_split($newname,1);
	if(is_numeric($newnameArray[0])){
		showmessage('新用户名第一个字不能为数字！','home.php?mod=spacecp',array(),array('alert'=>'error','msgtype'=>2));
	};
	
	if(c::t('common_member')->fetch_uid_by_username($newname)){
		showmessage('该用户名已存在，换一个名字吧^_^','home.php?mod=spacecp',array(),array('alert'=>'error','msgtype'=>2));
	}
	
	if($uid != c::t('common_member')->fetch_uid_by_username($_G['username'])){
		showmessage('请用正确的账号登录！','home.php?mod=spacecp',array(),array('alert'=>'error','msgtype'=>2));
	}else{
		$change_name_result1 = c::t('common_member')->update_username_by_uid($uid, $newname);
		$change_name_result2 = c::t('ucenter_members')->update_username_by_uid($uid, $newname);
	    if($change_name_result1>0 && $change_name_result2>0){
			showmessage('修改成功！','home.php?mod=spacecp',array(),array('alert'=>'right','msgtype'=>2));
		}
	}
	
}