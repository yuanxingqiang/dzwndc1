<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('follow_feed');
0
|| checktplrefresh('./template/dzwn_dc/home/follow_feed.htm', './template/default/common/userabout.htm', 1613833872, 'diy', './data/template/3_diy_home_follow_feed.tpl.php', './template/dzwn_dc', 'home/follow_feed')
|| checktplrefresh('./template/dzwn_dc/home/follow_feed.htm', './template/default/common/seditor.htm', 1613833872, 'diy', './data/template/3_diy_home_follow_feed.tpl.php', './template/dzwn_dc', 'home/follow_feed')
|| checktplrefresh('./template/dzwn_dc/home/follow_feed.htm', './template/default/common/upload.htm', 1613833872, 'diy', './data/template/3_diy_home_follow_feed.tpl.php', './template/dzwn_dc', 'home/follow_feed')
|| checktplrefresh('./template/dzwn_dc/home/follow_feed.htm', './template/default/common/seccheck.htm', 1613833872, 'diy', './data/template/3_diy_home_follow_feed.tpl.php', './template/dzwn_dc', 'home/follow_feed')
|| checktplrefresh('./template/dzwn_dc/home/follow_feed.htm', './template/default/home/follow_feed_li.htm', 1613833872, 'diy', './data/template/3_diy_home_follow_feed.tpl.php', './template/dzwn_dc', 'home/follow_feed')
|| checktplrefresh('./template/dzwn_dc/home/follow_feed.htm', './template/default/home/space_userabout.htm', 1613833872, 'diy', './data/template/3_diy_home_follow_feed.tpl.php', './template/dzwn_dc', 'home/follow_feed')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=follow">广播</a>
</div>
</div>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="ct" class="ct2_a wp cl">
<?php if($_G['setting']['homestyle']) { ?>
<div class="appl"><?php if(!empty($_G['setting']['pluginhooks']['global_userabout_top'][$_G['basescript'].'::'.CURMODULE])) echo $_G['setting']['pluginhooks']['global_userabout_top'][$_G['basescript'].'::'.CURMODULE];?>
<ul><?php if(is_array($_G['setting']['spacenavs'])) foreach($_G['setting']['spacenavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>			
<?php echo $nav['code'];?>
<?php } } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_userabout_bottom'][$_G['basescript'].'::'.CURMODULE])) echo $_G['setting']['pluginhooks']['global_userabout_bottom'][$_G['basescript'].'::'.CURMODULE];?></div>
<?php } else { ?>
<div class="appl">
<div class="tbn">
<h2 class="mt bbda">广播</h2>
<ul>
<li<?php echo $actives['follow'];?>><a href="home.php?mod=follow&amp;view=follow">我收听的</a></li>
<li<?php echo $actives['special'];?>><a href="home.php?mod=follow&amp;view=special">特别收听</a></li>
<li<?php echo $actives['other'];?>><a href="home.php?mod=follow&amp;view=other">广播大厅</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['follow_nav_extra'])) echo $_G['setting']['pluginhooks']['follow_nav_extra'];?>
</ul>
</div>
</div>
<?php } ?>
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->




<?php if(!empty($_G['setting']['pluginhooks']['follow_top'])) echo $_G['setting']['pluginhooks']['follow_top'];?>

<?php if(in_array($do, array('feed', 'view'))) { if(helper_access::check_module('follow') && ( $do == 'feed' || ( $do == 'view' && $viewself))) { ?>
<div id="flw_header" class="mbw bbs cl">
<?php if($do == 'feed') { ?>
<div class="my_flw_stats y">
<ul>
<li><span class="xg1">广播</span><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>"><strong class="xi2"><?php echo $space['feeds'];?></strong></a></li>
<li><span class="xg1">收听</span><a href="home.php?mod=follow&amp;do=following&amp;uid=<?php echo $uid;?>"><strong class="xi2"><?php echo $space['following'];?></strong></a></li>
<li><span class="xg1">听众</span><a href="home.php?mod=follow&amp;do=follower&amp;uid=<?php echo $uid;?>"><strong class="xi2"><?php echo $space['follower'];?></strong></a></li>
</ul>
</div>
<?php } ?>

<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
</script><?php $dmfid = $_G['setting']['followforumid'] && !empty($defaultforum) ? $_G['setting']['followforumid'] : 0;?><form method="post" autocomplete="off" id="fastpostform" action="home.php?mod=spacecp&amp;ac=follow&amp;op=newthread&amp;topicsubmit=yes&amp;infloat=yes&amp;handlekey=fastnewpost&amp;inajax=1" onsubmit="return fastpostvalidate(this);" style="float: left;">
<div id="fastpostreturn" style="margin:-5px 0 5px"></div>
<div id="flw_post_subject" style="display:none;">
<span id="flw_checklen" class="y"><span id="checklen" class="xg1">80</span></span>
<input type="text" id="subject" name="subject" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" />
</div>

<div id="flw_post_extra" class="mtn cl">
<div<?php if($_G['setting']['fastsmilies']) { ?> class="hasfsl"<?php } ?> id="fastposteditor">
<div class="tedt">
<div class="area">
<textarea rows="5" cols="80" name="message" id="fastpostmessage" onKeyDown="seditor_ctlent(event, '$(\'fastpostsubmit\').click()');" tabindex="12" class="pt xs2"></textarea>
</div>
<div id="flw_bar" class="bar"><?php $seditor = array('fastpost', array('smilies', 'at'), 0, '<span id="spanButtonPlaceholder">上传</span>');?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="文字加粗" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="设置文字颜色" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="图片" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="添加链接" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="引用" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="代码" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@朋友" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@朋友</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div></div>
</div>
</div>
<script type="text/javascript">
var editorid = '';
var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
</script>

<div class="upfl<?php if(empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?> hasfsl<?php } ?>">
<div id="attachlist" class="fieldset flash cl"><span style="font-size:0"></span></div>
<?php if(empty($_G['setting']['pluginhooks']['follow_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo STATICURL;?>js/webuploader/webuploader.css?<?php echo VERHASH;?>">
<script src="<?php echo STATICURL;?>js/mobile/jquery.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo STATICURL;?>js/webuploader/webuploader.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>webuploader.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
var upload = new SWFUpload({
// Backend Settings
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=upload&fid=<?php echo $dmfid;?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"},

// File Upload Settings
file_size_limit : "<?php echo $swfconfig['max'];?>",	// 100MB
file_types : "<?php echo $swfconfig['attachexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['attachexts']['depict'];?>",
file_upload_limit : <?php echo $swfconfig['limit'];?>,
file_queue_limit : 0,
// Event Handler Settings (all my handlers are in the Handler.js file)
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,
// Button Settings
button_image_url : "<?php echo IMGDIR;?>/flw_post_attach.png",
button_placeholder_id : "spanButtonPlaceholder",
button_width: 18,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",
custom_settings : {
progressTarget : "attachlist",
uploadSource: 'forum',
uploadType: 'attach',
<?php if($swfconfig['maxsizeperday']) { ?>
maxSizePerDay: <?php echo $swfconfig['maxsizeperday'];?>,
<?php } if($swfconfig['maxattachnum']) { ?>
maxAttachNum: <?php echo $swfconfig['maxattachnum'];?>,
<?php } ?>
uploadFrom: 'fastpost'
},

// Debug Settings
debug: false
});
</script>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['follow_upload_extend'])) echo $_G['setting']['pluginhooks']['follow_upload_extend'];?>
<?php } ?>
<script type="text/javascript">
var fid = <?php if($_G['setting']['followforumid']) { ?><?php echo $_G['setting']['followforumid'];?><?php } else { ?>0<?php } ?>;
var resulttype = 'follow';
var attachBtn = $('flw_bar').getElementsByTagName('object')[0];
var flwbarBtn = $('flw_bar').getElementsByTagName('a');
if(BROWSER.ie && BROWSER.ie < 7 && attachBtn) {
attachBtn.style.left = flwbarBtn ? flwbarBtn.length * 25 : 0;
}

</script>
</div>

<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm sec"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A'.random(3) : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } ?>

<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="usesig" value="<?php echo $usesigcheck;?>" />
<input type="hidden" name="adddynamic" value="1" />
<input type="hidden" name="addfeed" value="1" />
<input type="hidden" name="topicsubmit" value="true" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />

<div class="cl">
<div class="z ptm" id="forumlistdev" style="display: none;">
<select name="defaultforum" id="fid" class="ps z" onchange="modifyformurl(this.value);">
<option value="0">浏览其它版块</option>
</select>
<select name="forumlist" id="forumlist" class="ps z" onchange="addforumlist(this);" style="display: none;">
<option value="0">选择版块</option>
<?php echo $forumlist;?>
</select>

<div class="ftid">
<span class="ftid" id="threadclass"></span>
</div>
</div>
<div class="y">
<p class="ptm pnpost">
<label><input type="checkbox" name="syncbbs" id="syncbbs" value="1" onclick="showSyncInfo(this.checked)" />同步到论坛</label>&nbsp;
<button <?php if($_G['uid']) { ?>type="submit" <?php } else { ?>type="button" onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes')" <?php } ?>name="topicsubmit_btn" id="fastpostsubmit" value="topicsubmitbtn" tabindex="13" class="pn pnc"><strong>发表帖子</strong></button>
</p>
</div>
</div>
</div>
</form>

<script type="text/javascript">
var nofollowfeed = <?php if(!empty($list['feed'])) { ?>0<?php } else { ?>1<?php } ?>;
var userdatakey = cookiepre+'fastpost<?php echo $_G['uid'];?>';
function showSyncInfo(flag) {
display('flw_post_subject');
display('forumlistdev');
var sObj = $('subject');
sObj.value = '';
strLenCalc(sObj, 'checklen', 80);
}
function fastpostvalidateextra() {
var sObj = $('subject');
if(!$('syncbbs').checked) {
$('subject').value = '  ';
}
return true;
}
function backupContent() {
var obj = $('fastpostform');
if(!obj) return;
var data = subject = message = '';
saveUserdata(userdatakey, data);
for(var i = 0; i < obj.elements.length; i++) {
var el = obj.elements[i];
if(el.name != '' && el.tagName == 'SELECT') {
var elvalue = el.value;
if(trim(elvalue)) {
data += el.name + String.fromCharCode(9) + el.tagName + String.fromCharCode(9) + el.type + String.fromCharCode(9) + elvalue + String.fromCharCode(9, 9);
if(el.tagName == 'SELECT' && el.name == 'defaultforum') {
var values = {};
for(var j = 0; j < el.options.length; j++) {
var option = el.options[j];
var ov = parseInt(option.value);
if(typeof values[option.value] == 'undefined' && !isNaN(ov) && option.innerText != '' && option.innerText != 'undefined') {
data += el.name + String.fromCharCode(9) + option.tagName + String.fromCharCode(9) + option.value + String.fromCharCode(9) + option.text + String.fromCharCode(9, 9);
values[option.value] = option.value;
}
}
}
}
}
}
saveUserdata(userdatakey, data);
}
function addforumlist(listObj) {
var fid = listObj.value;
if(fid) {
var dforum = $('fid');
//判断是否已经在列表中
var haveoption = false;
for(var i = 0; i < dforum.options.length; i++) {
if(dforum.options[i].value == fid) {
dforum.selectedIndex = i;
haveoption = true;
break;
}
}
if(!haveoption) {
var option = listObj.options[listObj.selectedIndex];
var oOption = document.createElement("OPTION");
oOption.text = trim(option.text);
oOption.value = option.value;
dforum.options.add(oOption);
dforum.selectedIndex = dforum.options.length-1;
}

modifyformurl(fid);
}
dforum.style.display = '';
listObj.style.display = 'none';
}
function modifyformurl(mfid) {
if(parseInt(mfid)) {
backupContent();
//noteX 修改表单中的两个固定地址
$('fastpostform').action = 'home.php?mod=spacecp&ac=follow&op=newthread&topicsubmit=yes&infloat=yes&handlekey=fastnewpost&inajax=1&fid='+mfid;
if(upload) {
fid = mfid;
var uploadurl = '<?php echo $_G['siteroot'];?>misc.php?mod=swfupload&action=swfupload&operation=upload&fid='+mfid;
upload.setUploadURL(uploadurl);
}
getthreadclass();
} else {
var flist = $('forumlist');
var dforum = $('fid');
dforum.style.display = 'none';
flist.style.display = '';
}

}

function resumeContent() {
var data = loadUserdata(userdatakey);
if(in_array((data = trim(data)), ['', 'null', 'false', null, false])) {
modifyformurl();
return false;
}
var data = data.split(/\x09\x09/);
var formObj = $('fastpostform');
var sValue = 0;
for(var i = 0; i < formObj.elements.length; i++) {
var el = formObj.elements[i];
if(el.name != '' && el.tagName == 'SELECT') {
for(var j = 0; j < data.length; j++) {
var ele = data[j].split(/\x09/);
if(ele[0] == el.name) {
elvalue = !isUndefined(ele[3]) ? ele[3] : '';
if(ele[1] == 'SELECT') {
//添加选项
var values = {0:0<?php if($_G['setting']['followforumid']) { ?>,<?php echo $_G['setting']['followforumid'];?>:<?php echo $_G['setting']['followforumid'];?><?php } ?>};
for(var oi = 0; oi < data.length; oi++) {
var oObj = data[oi].split(/\x09/);
if(oObj[0] == el.name && oObj[1] == 'OPTION' && typeof values[oObj[2]] == 'undefined') {
var oOption = document.createElement("OPTION");
el.options.add(oOption);
oOption.text = oObj[3];
values[oObj[2]] = oOption.value = oObj[2];
if(elvalue == oObj[2]) {
el.selectedIndex = el.options.length-1;
modifyformurl(elvalue);
}
}
}
if(el.options.length < 2) {
modifyformurl(0);
}

}
break
}
}
}
}
}
function succeedhandle_fastnewpost(url, msg, values) {
if(nofollowfeed) {
window.location.reload();
} else {
if(parseInt(values.feedid)) {
getNewFollowFeed(values.tid, values.fid, values.pid, values.feedid);
} else {
showDialog(msg, 'notice', null, null, 0, null, null, null, null, 3);
}
showCreditPrompt();
//清空上次的输入
var sObj = $('subject');
$('attachlist').innerHTML = $('fastpostmessage').value = sObj.value = '';
strLenCalc(sObj, 'checklen', 80);
if(values.sechash) {
updatesecqaa(values.sechash);
updateseccode(values.sechash);
$('seccodeverify_'+values.sechash).value='';
}
//var msg = '您的主题已发布，<a href="'+url+'" class="xi2">点击这里查看主题</a>'
//showDialog(msg, 'notice', null, null, 0, null, null, null, null, 3);
}

}
function getNewFollowFeed(tid, fid, pid, feedid) {
var x = new Ajax();
x.get('forum.php?mod=ajax&action=getpostfeed&inajax=1&tid='+tid+'&fid='+fid+'&pid='+pid+'&feedid='+feedid, function(s){
newli = document.createElement("li");
newli.innerHTML = s;
var listObj = $('followlist');

listObj.insertBefore(newli, listObj.firstChild);
});
}

resumeContent();

function cleartitle(obj) {
if($('flw_post_subject').style.display== 'none') {
var sObj = $('subject');
sObj.value = '';
strLenCalc(sObj, 'checklen', 80);
obj.innerHTML = '添加标题';
} else {
obj.innerHTML = '自动截取标题';
}
}
</script>

</div>
<?php } if(in_array($do, array('feed', 'view'))) { if($do == 'feed' && $_G['setting']['homestyle']) { ?>
<ul class="mbw tb cl">
<li<?php echo $actives['follow'];?>><a href="home.php?mod=follow&amp;view=follow">我收听的</a></li>
<li<?php echo $actives['special'];?>><a href="home.php?mod=follow&amp;view=special">特别收听</a></li>
<li<?php echo $actives['other'];?>><a href="home.php?mod=follow&amp;view=other">广播大厅</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['follow_nav_extra'])) echo $_G['setting']['pluginhooks']['follow_nav_extra'];?>
</ul>
<?php } if(!empty($list['feed'])) { ?>
<div class="flw_feed">
<ul id="followlist"><?php $carray = array();?><?php $beforeuser = 0;?><?php $hiddennum = 0;?><?php if(is_array($list['feed'])) foreach($list['feed'] as $feed) { $content = $list['content'][$feed['tid']];?><?php $thread = $list['threads'][$content['tid']];?><?php if(!empty($thread) && $thread['displayorder'] >= 0 || !empty($feed['note'])) { ?>
<li class="cl<?php if($lastviewtime && $feed['dateline'] > $lastviewtime) { ?> unread<?php } ?>" id="feed_li_<?php echo $feed['feedid'];?>" onmouseover="this.className='flw_feed_hover cl'" onmouseout="this.className='cl'">
<?php if($_GET['do'] != 'view' && !isset($_GET['banavatar'])) { ?>
<div class="z flw_avt">
<?php if($beforeuser != $feed['uid']) { $beforeuser = $feed['uid'];?><a href="home.php?mod=space&amp;uid=<?php echo $feed['uid'];?>" class="z" c="1" shref="home.php?mod=space&amp;uid=<?php echo $feed['uid'];?>"><?php echo avatar($feed[uid],'small');?></a>
<span class="cnr"></span>
<?php } ?>
</div>
<?php } ?>
<div class="flw_article" <?php if($_GET['do'] == 'view' || $_GET['banavatar']) { ?>style="margin-left:0"<?php } ?>>
<?php if($feed['uid'] == $_G['uid'] || $_G['adminid'] == 1) { ?>
<a href="home.php?mod=spacecp&amp;ac=follow&amp;feedid=<?php echo $feed['feedid'];?>&amp;op=delete" id="c_delete_<?php echo $feed['feedid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);" class="flw_delete">删除</a>
<?php } ?>
<div class="flw_author">
<a href="home.php?mod=space&amp;uid=<?php echo $feed['uid'];?>" c="1" shref="home.php?mod=space&amp;uid=<?php echo $feed['uid'];?>"><?php echo $feed['username'];?></a>
<span class="xg1">&nbsp;<?php echo dgmdate($feed['dateline'], 'u');?></span>
</div>
<?php if($feed['note']) { ?>
<div class="flw_quotenote xs2 pbw">
<?php echo $feed['note'];?>
</div>
<div class="flw_quote">
<?php } if(!empty($thread) && $thread['displayorder'] >= 0) { ?>
<h2 class="wx pbn">
<?php if(isset($carray[$feed['cid']])) { ?>
<a href="javascript:;" onclick="vieworiginal(this, 'original_content_<?php echo $feed['feedid'];?>');return false;" class="flw_readfull y xw0 xs1 xi2">+ 展开全文</a>
<?php } if($thread['fid'] != $_G['setting']['followforumid']) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $content['tid'];?>&amp;extra=page%3D1" target="_blank"><?php echo $thread['subject'];?></a>
<?php } ?>
</h2>

<div class="pbm c cl" id="original_content_<?php echo $feed['feedid'];?>" <?php if(isset($carray[$feed['cid']])) { ?> style="display: none"<?php } ?>>
<?php echo $content['content'];?>
<?php if($thread['special'] && $thread['fid'] != $_G['setting']['followforumid']) { ?>
<br/>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $content['tid'];?>&amp;extra=page%3D1" target="_blank">这是一个特殊主题，点这里可以回原帖查看详细内容</a>
<?php } ?>
</div>
<div class="xg1 cl">
<span class="y">
<?php if(helper_access::check_module('follow')) { ?>
<a href="javascript:;" id="relay_<?php echo $feed['feedid'];?>" onclick="quickrelay(<?php echo $feed['feedid'];?>, <?php echo $thread['tid'];?>);">转播(<?php echo $content['relay'];?>)</a>&nbsp;
<?php } ?> 
<a href="javascript:;" onclick="quickreply(<?php echo $thread['fid'];?>, <?php echo $thread['tid'];?>, <?php echo $feed['feedid'];?>)">回复(<?php echo $thread['replies'];?>)</a>
</span>
<?php if($feed['note']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $feed['uid'];?>"><?php echo $thread['author'];?></a> 发表于 <?php echo dgmdate($thread['dateline']);?>&nbsp;<?php } if($thread['fid'] != $_G['setting']['followforumid'] && $_G['cache']['forums'][$thread['fid']]['name']) { ?>#<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>"><?php echo $_G['cache']['forums'][$thread['fid']]['name'];?></a><?php } ?>
</div>
<?php } else { ?>
<div class="pbm c cl" id="original_content_<?php echo $feed['feedid'];?>" <?php if(isset($carray[$feed['cid']])) { ?> style="display: none"<?php } ?>>
该主题已被删除
</div>
<?php } if($feed['note']) { ?></div><?php } ?>
</div>
<div id="replybox_<?php echo $feed['feedid'];?>" class="flw_replybox cl" style="display: none;"></div>
<div id="relaybox_<?php echo $feed['feedid'];?>" class="flw_replybox cl" style="display: none;"></div>
</li>
<?php } else { $hiddennum++;?><?php } if(!isset($carray[$feed['cid']])) { $carray[$feed['cid']] = $feed['cid'];?><?php } } ?></ul>

<?php if(count($list['feed']) > 19 && ($archiver || $primary)) { ?>
<div id="loadingfeed" class="flw_more"><a href="javascript:;" onclick="loadmore();return false;" class="xi2">更多 &raquo;</a></div>
<?php } else { ?>
<div id="loadingfeed"></div>
<?php } ?>
<iframe id="downloadframe" name="downloadframe" width="0" height="0" marginwidth="0" frameborder="0" src="about:blank"></iframe>
<script type="text/javascript">
function succeedhandle_attachpay(url, msg, values) {
hideWindow('attachpay');
window.location.href = url;
//$('downloadframe').src = url;
}
</script>
</div>
<?php } else { ?>
<div class="emp">
<h2 class="mbw xg1 xs2 hm"><?php if($viewself) { ?>还没有关注的内容<?php } else { ?>TA还没有发表广播<?php } ?></h2>
<?php if($do == 'feed' && $view == 'special') { ?>
<div class="mtw hm xg1">
您可以将指定的用户加入到“特别收听”列表，然后通过页面筛选阅读他们广播, <a href="home.php?mod=follow&amp;do=following&amp;uid=<?php echo $uid;?>" class="xi2">添加特别收听</a>
</div>
<?php } if(!empty($recommend) && $showrecommend && $view != 'special') { $showrecommend = false;?><div class="flw_user_list mbm">
<h3 class="xi2 xs2 mbw ptm pbm bbda">推荐收听</h3>
<ul class="ml mls cl"><?php if(is_array($recommend)) foreach($recommend as $ruid => $rusername) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $ruid;?>" class="avt" c="1" shref="home.php?mod=space&amp;uid=<?php echo $ruid;?>"><?php echo avatar($ruid,small);?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $ruid;?>" style="text-decoration: none !important;"><?php echo $rusername;?></a></p>
<?php if(helper_access::check_module('follow')) { ?>
<span><a id="a_followmod_<?php echo $ruid;?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $ruid;?>&amp;from=block" onclick="ajaxget(this.href);doane(event);" style="text-decoration: none !important;">收听</a></span>
<?php } ?>
</li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>
<?php } if(count($list['feed']) > 19 && ($archiver || $primary)) { ?>
<script type="text/javascript">
var scrollY = 0;
var page = 2;
var feedInfo = {scrollY: 0, archiver: <?php echo $archiver;?>, primary: <?php echo $primary;?>, query: true, scrollNum:1};
var loadingfeed = $('loadingfeed');

function loadmore() {
var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
var sHeight = document.documentElement.scrollHeight;
if(currentScroll >= scrollY && currentScroll > (sHeight/5-5) && (feedInfo.primary ||feedInfo.archiver) && feedInfo.query) {
/*
if(feedInfo.scrollNum) {
loadingfeed.className="flw_loading hm vm";
loadingfeed.innerHTML = "<img src=\"<?php echo IMGDIR;?>/loading.gif\" class=\"vm\" /> 加载中...";
}
*/
feedInfo.query = false;
var archiver = 0;
if(feedInfo.primary) {
archiver = 0;
} else if(feedInfo.archiver) {
archiver = 1;
}
var url = 'home.php?mod=spacecp&ac=follow&op=getfeed&archiver='+archiver+'&page='+page+'&inajax=1'<?php if($do == 'feed') { ?>+'&viewtype=<?php echo $view;?>'<?php } elseif($do == 'view') { ?>+'&uid=<?php echo $uid;?>&banavatar=1'<?php } ?>;
var x = new Ajax();
x.get(url, function(s) {
if(trim(s) == 'false') {
if(!archiver) {
feedInfo.primary = false;
loadmore();
page = 1;
} else {
feedInfo.archiver = false;
page = 1;
}
} else {
$('followlist').innerHTML = $('followlist').innerHTML + s;
}
if(!feedInfo.primary && !feedInfo.archiver) {
loadingfeed.className = "";
loadingfeed.innerHTML = "";
}
feedInfo.query = true;
});
page++;
if(feedInfo.scrollNum) {
feedInfo.scrollNum--;
} else if(!feedInfo.scrollNum) {
window.onscroll = null;
}

}
scrollY = currentScroll;
}

window.onload = function() {
scrollY =  document.documentElement.scrollTop || document.body.scrollTop;
window.onscroll = loadmore;
}
</script>
<?php } } ?>

<script type="text/javascript">
var boxflag = {};
var parentReplyId = '';
function quickreply(fid, tid, feedid) {
$('relaybox_'+feedid).style.display = 'none';
var replyboxid = 'replybox_'+feedid;
if(parentReplyId && parentReplyId != feedid) {
var oldbox = $('replybox_'+parentReplyId);
oldbox.innerHTML = '';
oldbox.style.display = 'none';
}
if($(replyboxid).style.display == '' && boxflag[replyboxid]) {
$(replyboxid).style.display = 'none';
} else {
boxflag[replyboxid] = true;
ajaxget('forum.php?mod=ajax&action=quickreply&tid='+tid+'&fid='+fid+'&handlekey=qreply_'+feedid+'&feedid='+feedid, replyboxid);
$(replyboxid).style.display = '';
}
parentReplyId = feedid;
}
function quickrelay(feedid, tid) {
$('replybox_'+feedid).style.display = 'none';
var replyboxid = 'relaybox_'+feedid;
if($(replyboxid).style.display == '') {
$(replyboxid).style.display = 'none';
} else {
ajaxget('home.php?mod=spacecp&ac=follow&op=relay&feedid='+feedid+'&tid='+tid+'&handlekey=qrelay_'+feedid, replyboxid);
$(replyboxid).style.display = '';
}
}
</script>

<?php } elseif(in_array($do, array('following', 'follower'))) { if($list) { ?>
<ul class="flw_ulist"><?php if(is_array($list)) foreach($list as $fuid => $fuser) { ?><li class="cl<?php if(in_array($fuser['uid'], $newfollower_list)) { ?> unread<?php } ?>">
<?php if($do=='following') { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $fuser['followuid'];?>" title="<?php echo $fuser['fusername'];?>" id="edit_avt" class="flw_avt" shref="home.php?mod=space&amp;uid=<?php echo $fuser['followuid'];?>"><?php echo avatar($fuser['followuid'],small);?></a>
<?php if($viewself) { ?>
<a id="a_followmod_<?php echo $fuser['followuid'];?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $fuser['followuid'];?>" onclick="ajaxget(this.href);doane(event);" class="flw_btn_unfo">取消收听</a>
<?php } elseif($fuser['followuid'] != $_G['uid']) { if($fuser['mutual']) { if($fuser['mutual'] > 0) { ?><span class="z flw_status_2">互相收听</span><?php } else { ?><span class="z flw_status_1">TA未收听您</span><?php } ?><a id="a_followmod_<?php echo $fuser['followuid'];?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $fuser['followuid'];?>"  onclick="ajaxget(this.href);doane(event);" class="flw_btn_unfo">取消收听</a>
<?php } elseif(helper_access::check_module('follow')) { ?>
<a id="a_followmod_<?php echo $fuser['followuid'];?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $fuser['followuid'];?>" onclick="ajaxget(this.href);doane(event);" class="flw_btn_fo">收听</a>
<?php } } ?>
<h6 class="pbn xs2"><a href="home.php?mod=space&amp;uid=<?php echo $fuser['followuid'];?>" title="<?php echo $fuser['fusername'];?>" class="xi2" c="1" shref="home.php?mod=space&amp;uid=<?php echo $fuser['followuid'];?>"><?php echo $fuser['fusername'];?></a>&nbsp;<span id="followbkame_<?php echo $fuser['followuid'];?>" class="xg1 xs1 xw0"><?php if($fuser['bkname']) { ?><?php echo $fuser['bkname'];?><?php } ?></span></h6>
<?php if(!empty($fuser['recentnote'])) { ?><p><span class="xg1">最近动作: </span><?php echo $fuser['recentnote'];?></p><?php } ?>
<p class="ptm xg1">
<?php if($memberprofile[$fuid]['resideprovince'] || $memberprofile[$fuid]['residecity']) { ?>来自: <?php echo $memberprofile[$fuid]['resideprovince'];?> <?php echo $memberprofile[$fuid]['residecity'];?> &nbsp;<?php } ?>
听众: <a href="home.php?mod=follow&amp;do=follower&amp;uid=<?php echo $fuser['followuid'];?>"><strong class="xi2" id="followernum_<?php echo $fuser['followuid'];?>"><?php echo $memberinfo[$fuid]['follower'];?></strong></a>人 &nbsp;
收听: <a href="home.php?mod=follow&amp;do=following&amp;uid=<?php echo $fuser['followuid'];?>"><strong class="xi2"><?php echo $memberinfo[$fuid]['following'];?></strong></a>人 &nbsp;
<?php if($viewself && $fuser['followuid'] != $_G['uid']) { ?>
<span class="pipe">|</span>
<a href="home.php?mod=spacecp&amp;ac=follow&amp;op=bkname&amp;fuid=<?php echo $fuser['followuid'];?>&amp;handlekey=followbkame_<?php echo $fuser['followuid'];?>" id="fbkname_<?php echo $fuser['followuid'];?>" onclick="showWindow('followbkame_<?php echo $fuser['followuid'];?>', this.href, 'get', 0);"><?php if($fuser['bkname']) { ?>修改备注<?php } else { ?>添加备注<?php } ?></a>
<?php if(helper_access::check_module('follow')) { ?>
<span class="pipe">|</span>
<a id="a_specialfollow_<?php echo $fuser['followuid'];?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;special=<?php if($fuser['status'] == 1) { ?>2<?php } else { ?>1<?php } ?>&amp;fuid=<?php echo $fuser['followuid'];?>" onclick="ajaxget(this.href);doane(event);"><?php if($fuser['status'] == 1) { ?>取消特别收听<?php } else { ?>添加特别收听<?php } ?></a>
<?php } } ?>
</p>
<?php } else { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $fuser['uid'];?>" title="<?php echo $fuser['username'];?>" id="edit_avt" class="flw_avt" c="1" shref="home.php?mod=space&amp;uid=<?php echo $fuser['uid'];?>"><?php echo avatar($fuser['uid'],small);?></a>
<?php if($fuser['uid'] != $_G['uid']) { if($fuser['mutual']) { if($fuser['mutual'] > 0) { ?><span class="z flw_status_2">互相收听</span><?php } else { ?><span class="z flw_status_1">TA未收听您</span><?php } ?><a id="a_followmod_<?php echo $fuser['uid'];?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $fuser['uid'];?>"  onclick="ajaxget(this.href);doane(event);" class="flw_btn_unfo">取消收听</a>
<?php } elseif(helper_access::check_module('follow')) { ?>
<a id="a_followmod_<?php echo $fuser['uid'];?>" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $fuser['uid'];?>" onclick="ajaxget(this.href);doane(event);" class="flw_btn_fo">收听</a>
<?php } } ?>
<h6 class="pbn xs2"><a href="home.php?mod=space&amp;uid=<?php echo $fuser['uid'];?>" title="<?php echo $fuser['username'];?>" class="xi2" c="1" shref="home.php?mod=space&amp;uid=<?php echo $fuser['uid'];?>"><?php echo $fuser['username'];?></a></h6>
<p><span class="xg1">最近动作: </span><?php echo $fuser['recentnote'];?></p>
<p class="ptm xg1">
<?php if($memberprofile[$fuid]['resideprovince'] || $memberprofile[$fuid]['residecity']) { ?>来自: <?php echo $memberprofile[$fuid]['resideprovince'];?> <?php echo $memberprofile[$fuid]['residecity'];?> &nbsp;<?php } ?>
听众: <a href="home.php?mod=follow&amp;do=follower&amp;uid=<?php echo $fuser['uid'];?>"><strong class="xi2" id="followernum_<?php echo $fuser['uid'];?>"><?php echo $memberinfo[$fuid]['follower'];?></strong></a>人 &nbsp;
收听: <a href="home.php?mod=follow&amp;do=following&amp;uid=<?php echo $fuser['uid'];?>"><strong class="xi2"><?php echo $memberinfo[$fuid]['following'];?></strong></a>人
</p>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php if(!empty($multi)) { ?><div><?php echo $multi;?></div><?php } ?>
<br/>
<?php } else { ?>
<div id="nofollowmsg">
<div class="flw_thread">
<ul>
<li class="flw_article">
<div class="emp">
<h2 class="xg1 xs2 hm">
<?php if($viewself) { if($do=='following') { ?>
您还没有收听任何人，您可以先到<a href="home.php?mod=follow&amp;view=other" class="xi2">广播大厅</a>寻找感兴趣的人并收听他
<?php } else { ?>
还没有人收听您，多<a href="home.php?mod=follow" class="xi2">发广播</a>多互动，别人才会收听您 :)
<?php } } else { if($do=='following') { ?>
TA还没有收听任何人
<?php } else { ?>
还没有人收听TA
<?php } } ?>
</h2>
</div>
</li>
</ul>
</div>
</div>
<?php } } if(!$_G['setting']['homepagestyle']) { ?><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><?php } if($do != 'feed') { ?>
</div>
</div>
<?php if($_G['setting']['homepagestyle']) { ?>
</div>
<div class="sd"><div id="pcd" class="bm cl"><?php $encodeusername = rawurlencode($space[username]);?><div class="bm_c">
<div class="hm">
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>" class="avtm"><?php echo avatar($space[uid],middle);?></a></p>
<h2 class="xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></h2>
</div>
<ul class="xl xl2 cl ul_list">
<?php if($space['self']) { if($_G['setting']['homepagestyle']) { ?>
<li class="ul_diy"><a href="home.php?mod=space&amp;do=index&amp;diy=yes">装扮空间</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_msg"><a href="home.php?mod=space&amp;do=wall">查看留言</a></li>
<?php } ?>
<li class="ul_avt"><a href="home.php?mod=spacecp&amp;ac=avatar">编辑头像</a></li>
<li class="ul_profile"><a href="home.php?mod=spacecp&amp;ac=profile">更新资料</a></li>
<?php } else { if(helper_access::check_module('follow')) { ?>
<li class="ul_broadcast"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>">查看广播</a></li>
<?php } if(helper_access::check_module('follow') && $space['uid'] != $_G['uid']) { ?>
<li class="ul_flw"><?php $follow = 0;?><?php $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);?><?php if(!$follow) { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $space['uid'];?>">收听TA</a>
<?php } else { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $space['uid'];?>">取消收听</a>
<?php } ?>
</li>
<?php } require_once libfile('function/friend');$isfriend=friend_check($space[uid]);?><?php if(!$isfriend) { ?>
<li class="ul_add"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend_li_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">加为好友</a></li>
<?php } else { ?>
<li class="ul_ignore"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">解除好友</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_contect"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">给我留言</a></li>
<?php } ?>
<li class="ul_poke"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">打个招呼</a></li>

<li class="ul_pm"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $space['uid'];?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">发送消息</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { ?>
<hr class="da mtn m0">
<ul class="ptn xl xl2 cl">
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">用户管理</a>
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">用户管理</a>
<?php } ?>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $encodeusername;?>" id="umanageli" onmouseover="showMenu(this.id)" class="showmenu">内容管理</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="width: 80px; display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">禁止用户</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">编辑用户</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="width: 80px; display:none;">
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;searchsubmit=1&amp;do=search&amp;users=<?php echo $encodeusername;?>" target="_blank">管理帖子</a></li>
<?php if(helper_access::check_module('doing')) { ?>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">管理记录</a></li>
<?php } if(helper_access::check_module('blog')) { ?>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理日志</a></li>
<?php } if(helper_access::check_module('feed')) { ?>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理动态</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理相册</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">管理图片</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">管理评论</a></li>
<?php } if(helper_access::check_module('share')) { ?>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理分享</a></li>
<?php } if(helper_access::check_module('group')) { ?>
<li><a href="admin.php?action=threads&amp;operation=group&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">群组主题</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;detail=1&amp;operation=group&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">群组帖子</a></li>
<?php } ?>
</ul>
<?php } } ?>
</div>
</div>
</div>
<script type="text/javascript">
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod');
if(values['type'] == 'add') {
fObj.innerHTML = '取消收听';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '收听TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
</script><?php } } ?>
</div>
</div>

<?php if(!$_G['setting']['homepagestyle']) { ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php } if($showguide && $do == 'feed') { ?>
<style type="text/css">
.widthauto #nv_menu { width: 95%; }
.widthauto #nv_menu div { position: absolute;left: 50%;margin-left: -472px;width:944px; }
</style>
<div id="nv_menu" style="display:none;">
<div>
<img src="<?php echo IMGDIR;?>/flw_guide.png" alt="" />
<button class="pn pnc" style="margin: -50px 0 20px 430px;" onclick="hideMenu()"><span>我知道了</span></button>
</div>
</div>
<script type="text/javascript">
showMenu({'ctrlid':'nv','pos':'13','cover':'1'});
</script>
<?php } ?>

<script type="text/javascript" reload="1">
function succeedhandle_followmod(url, msg, values) {
var numObj = $('followernum_'+values['fuid']);
if(numObj) {followernum = parseInt(numObj.innerHTML);}
if(values['type'] == 'add') {
if(values['from'] == 'head') {
if($('followflag')) $('followflag').style.display = '';
if($('unfollowflag')) $('unfollowflag').style.display = 'none';
if($('fbkname_'+values['fuid'])) $('fbkname_'+values['fuid']).style.display = '';
} else if($('a_followmod_'+values['fuid'])) {

$('a_followmod_'+values['fuid']).innerHTML = '取消收听';
if(values['from'] != 'block') {
$('a_followmod_'+values['fuid']).className = 'flw_btn_unfo';
}
$('a_followmod_'+values['fuid']).href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid']+(values['from'] == 'block' ? '&from=block' : '');

}
if(numObj) {
numObj.innerHTML = followernum + 1;
}

} else if(values['type'] == 'del') {
if(values['from'] == 'head') {
if($('followflag')) $('followflag').style.display = 'none';
if($('unfollowflag')) $('unfollowflag').style.display = '';
if($('followbkame_'+values['fuid'])) $('followbkame_'+values['fuid']).innerHTML = '';
if($('fbkname_'+values['fuid'])) {
$('fbkname_'+values['fuid']).innerHTML = '[添加备注]';
$('fbkname_'+values['fuid']).style.display = 'none';
}
} else if($('a_followmod_'+values['fuid']))  {
$('a_followmod_'+values['fuid']).innerHTML = '收听';
if(values['from'] != 'block') {
$('a_followmod_'+values['fuid']).className = 'flw_btn_fo';
}
$('a_followmod_'+values['fuid']).href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid']+(values['from'] == 'block' ? '&from=block' : '');
}
if(numObj) {
numObj.innerHTML = followernum - 1;
}
} else if(values['type'] == 'special') {
if(values['from'] == 'head') {
var specialObj = $('specialflag_'+values['fuid']);
if(values['special'] == 1) {
specialObj.className = 'flw_specialfo';
specialObj.innerHTML = '添加特别收听';
} else {
specialObj.className = 'flw_specialunfo';
specialObj.innerHTML = '取消特别收听';
}
specialObj.title = specialObj.innerHTML;
specialObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&special='+values['special']+'&fuid='+values['fuid']+'&from=head';
} else {
$('a_specialfollow_'+values['fuid']).innerHTML = values['special'] == 1 ? '添加特别收听' : '取消特别收听';
$('a_specialfollow_'+values['fuid']).href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&special='+values['special']+'&fuid='+values['fuid'];
}
}
}
function changefeed(tid, pid, flag, obj) {
var x = new Ajax();
var o = obj.parentNode;
for(var i = 0; i < 4; i++) {
if(o.id.indexOf('original_content_') == -1) {
o = o.parentNode;
} else {
break;
}
}
x.get('forum.php?mod=ajax&action=getpostfeed&inajax=1&tid='+tid+'&pid='+pid+'&type=changefeed&flag='+flag, function(s){
o.innerHTML = s;
});
}
function vieworiginal(clickobj, id) {
var obj = $(id);
if(obj.style.display == 'none') {
obj.style.display =  '';
clickobj.innerHTML = '- 收起';
} else {
obj.style.display =  'none';
clickobj.innerHTML = '+ 展开全文';
}
}
</script><?php include template('common/footer'); ?>