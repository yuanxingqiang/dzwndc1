<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>大嘴蜗牛</title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2020 Tencent Cloud." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_3_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_3_forum_misc.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? $_G['scheme'].'//'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>' />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>

<link rel="stylesheet" type="text/css" href="<?php echo $_G['siteurl'];?>static/dzwn_v1/css/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_G['siteurl'];?>static/dzwn_v1/css/homepage.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_G['siteurl'];?>static/dzwn_v1/css/shutter.css">

</head>

<body>
<div id="append_parent"></div><div id="ajaxwaitid"></div>
    <div class="mainBody">
        <div class="menu_shell">
            <div class="menu">
                <div class="logo">
    <a href="http://dazuiwoniu.nat123.net/dzwndc/">
                    <img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/dzwn_logo.jpg" alt="" class="logo_pic">
                </div>
                <div class="options">
                    <div class="opiton1">
                        发现	
</div>
                    <div class="opiton1">
                        关注
                    </div>
                </div>
                <div class="options">
                    <div class="search">
                        <form action="<?php echo $_G['siteurl'];?>index.php" method="get" target="_blank">
                            <input type="hidden" name="m" value="search"/>
                            <input type="hidden" name="c" value="index"/>
                            <input type="hidden" name="a" value="init"/>
                            <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
                            <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                           <input placeholder="搜索" id="q" type="text"><input type="submit" value="搜 索" id="submit" />
                        </form>	
                    </div>
                </div>
                
<!--
                <div class="space">
                </div>
-->

<?php if($_G['member']['uid'] == 0) { ?>
                <div class="regist_and_login">
<div class="log w27">
    <span class="r"><a href="<?php echo $_G['siteurl'];?>/member.php?mod=register" target="_blank">注册</a> <span>|</span> <a href="<?php echo $_G['siteurl'];?>/member.php?mod=logging&action=login" target="_top">登录</a></span>
</div>
</div>

                <?php } else { ?>
<div class="options">
                    <div class="opiton2">
                        <img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/notes.svg" class="notice_pic">
</div>
                    <div class="opiton2">
                        <img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/messages.svg" class="notice_pic">
</div>
                    <div class="opiton3">
                        <img src="<?php echo $_G['siteurl'];?>uc_server/avatar.php?uid=<?php echo $data['0']['uid'];?>&size=small&ts=1" class="head_pic">					
                    </div>
<div class="log w27">
    <span class="r"><a href="<?php echo $_G['siteurl'];?>member.php?mod=logging&action=logout&formhash=<?php echo $_G['formhash'];?>" target="_top">登出</a></span>
</div>

                </div>
<?php } ?>
                
            </div>
        </div>
        
        
        
<div id="recommended_topics">
                <div id="recommended_topics_inner"><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { ?>    <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
    <div class="topic">
    <a href="<?php echo $nav['filename'];?>"><?php echo $nav['navname'];?></a>
</div>
<?php } } ?>

<!--

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>

<div class="topic">
<a href="#">
#话题#
</a>
</div>
-->


                </div>
</div>