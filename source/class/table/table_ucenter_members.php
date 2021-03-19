<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_common_member.php 31849 2012-10-17 04:39:16Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_ucenter_members extends discuz_table_archive
{
	public function __construct() {

		$this->_table = 'ucenter_members';
		$this->_pk    = 'uid';
		$this->_pre_cache_key = 'ucenter_members_';

		parent::__construct();
	}

	
	public function update_username_by_uid($uid, $username){
		return DB::update($this->_table, ['username'=>$username],['uid' => intval($uid)],'UNBUFFERED');
	}
}

?>