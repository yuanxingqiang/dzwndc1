<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: portal_index.php 31313 2012-08-10 03:51:03Z zhangguosheng $
 */

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

$page = intval($_GET['page']);//接收discuz！传过来的分页信息，并转成整形
if($page<1){
	$page =1;//让$page最小值为1，不出现小数
}
$forum_info = C::t('forum_post')->find_limit_forum_and_image($page);
$newest_10_forums_info = C::t('forum_post')->find_newest_10_forums();
$most_followed_10_forums_info = C::t('forum_thread')->find_most_followed_10_forums();
$forum_post_count=C::t('forum_post')->get_table_count();
$perpage=8;
$page_html = multi($forum_post_count,$perpage,$page,'portal.php');

include_once template('diy:portal/index');
?>