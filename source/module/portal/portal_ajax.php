<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

list($navtitle, $metadescription, $metakeywords) = get_seosetting('portal');
if(!$navtitle) {
	$navtitle = $_G['setting']['navs'][1]['navname'];
	$nobbname = false;
} else {
	$nobbname = true;
}
if(!$metakeywords) {
	$metakeywords = $_G['setting']['navs'][1]['navname'];
}
if(!$metadescription) {
	$metadescription = $_G['setting']['navs'][1]['navname'];
}

if(isset($_G['makehtml'])){
	helper_makehtml::portal_index();
}

if(!isset($_GET['action'])||empty($_GET['action'])||$_GET['action']==''){
	$_GET['action']='index';
}
if($_GET['action']=='index'){
	$page = intval($_GET['page']);//接收discuz！传过来的分页信息，并转成整形
	if($page<=1){
		$page =2;//让$page最小值为2,不出现比2小的数
	}
	$forum_info = C::t('forum_post')->find_limit_forum_and_image($page);
	if(sizeof($forum_info)<8){
		$forum_info[sizeof($forum_info)] = array('end'=>1);
	}else{
		$forum_info[sizeof($forum_info)] = array('end'=>0);
	}
	echo(json_encode($forum_info));
}
