<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="<?php echo CHARSET;?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="description" content=""/>
<meta name="keywords" content="" />
<title></title>
<link rel="stylesheet" href="<?php echo $_G['siteurl'];?><?php echo $_G['style']['tpldir'];?>/m/css/comm.css?<?php echo $jsglobal['jsversion'];?>">
<script src="<?php echo $_G['siteurl'];?><?php echo $_G['style']['tpldir'];?>/m/js/jquery.min.js?<?php echo $jsglobal['jsversion'];?>" type="text/javascript"></script>
<script src="<?php echo $_G['siteurl'];?><?php echo $_G['style']['tpldir'];?>/m/js/jscache.js?<?php echo $jsglobal['jsversion'];?>" type="text/javascript"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript">
var SITE_INFO = <?php echo json_encode($site); ?>;
var DATA_DIR = '<?php echo $_G['siteurl'];?><?php echo $_G['style']['tpldir'];?>/m';
var JS_DIR = DATA_DIR + '/js/';
var TMPL_DIR = DATA_DIR + '/tmpl/';
var JSGLOBAL = <?php echo json_encode($jsglobal); ?>;
var COOKIE_PRE = JSGLOBAL.cookiepre;
var F = JSGLOBAL.f;
var FUNC_DIR = JSGLOBAL.path;
$('title').text(SITE_INFO.siteName);
JC.VERSION = JSGLOBAL.jsversion;
JC.file("fastclick.js");
JC.file("template.min.js");
JC.file("qqapi.custom.js");
JC.file("commtools.js");
JC.file("commfuncs.js");
JC.file("pagebase.js");
</script>
</head>
