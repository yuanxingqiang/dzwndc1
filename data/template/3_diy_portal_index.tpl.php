<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('3');?><?php include template('common/header'); ?>        <div class="stomach_shell">
<div class="stomach">
<div class="left_stomach">
<div id="blinds">

    <!--
<div class="shutter">

<div class="shutter-img">
<a href="<?php echo $r['url'];?>" data-shutter-title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
<a href="#" data-shutter-title="Super Man"><img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/images/shutter_2.jpg" alt="#"></a>
<a href="#" data-shutter-title="The Hulk"><img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/images/shutter_3.jpg" alt="#"></a>
<a href="#" data-shutter-title="The your"><img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/images/shutter_4.jpg" alt="#"></a>

</div>

<ul class="shutter-btn">
<li class="prev"></li>
<li class="next"></li>
</ul>

<div class="shutter-desc">
<p></p>
</div>

</div>
    --><?php block_display('3');?><script src="<?php echo $_G['siteurl'];?>static/dzwn_v1/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $_G['siteurl'];?>static/dzwn_v1/js/velocity.js" type="text/javascript"></script>
<script src="<?php echo $_G['siteurl'];?>static/dzwn_v1/js/shutter.js" type="text/javascript"></script>

<script>
$(function () {
$('.shutter').shutter({
shutterW: 675, // 容器宽度
shutterH: 300, // 容器高度
isAutoPlay: true, // 是否自动播放
playInterval: 5000, // 自动播放时间
curDisplay: 3, // 当前显示页
fullPage: false // 是否全屏展示
});
});
</script>
</div>
<div class="article_list">
    <?php if(is_array($forum_info)) foreach($forum_info as $forum_key => $forum_val) { ?><a href="forum.php?mod=viewthread&amp;tid=<?php echo $forum_val['tid'];?>">
<div class="article_synopsis">
    <div class="article_left">
<div class="article_title">
<?php echo $forum_val['subject'];?>
</div>
<div class="article_abstract">
<?php echo $forum_val['message'];?>
</div>
</div>
<?php if($forum_val['pic_url']) { ?>
<div class="article_right">
<div class="article_pic">
<img class="article_img" src="<?php echo $_G['siteurl'];?>data/attachment/forum/<?php echo $forum_val['pic_url'];?>" />
</div>
</div>
<?php } ?>
</div>
</a>
<?php } ?>


<!--
<a href="#">
<div class="article_synopsis">
    <div class="article_left">
<div class="article_title">
此处为文章标题
</div>
<div class="article_abstract">
此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,
</div>
</div>
<div class="article_right">
<div class="article_pic">
<img class="article_img" src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/hmbb.jpg" />
</div>
</div>
</div>
</a>

<a href="#">
<div class="article_synopsis">
    <div class="article_left">
<div class="article_title">
此处为文章标题
</div>
<div class="article_abstract">
此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,
</div>
</div>
<div class="article_right">
<div class="article_pic">
<img class="article_img" src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/pkq.jpg"/>
</div>
</div>
</div>
</a>

<a href="#">
<div class="article_synopsis">
    <div class="article_left">
<div class="article_title">
此处为文章标题
</div>
<div class="article_abstract">
此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,
</div>
</div>
<div class="article_right">
<div class="article_pic">
<img class="article_img" src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/hlq.jpg" />
</div>
</div>
</div>
</a>

<a href="#">
<div class="article_synopsis">
    <div class="article_left">
<div class="article_title">
此处为文章标题
</div>
<div class="article_abstract">
此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,此处为文章摘要,
</div>
</div>
<div class="article_right">
<div class="article_pic">
<img class="article_img" src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/wzbf.jpg" />
</div>
</div>
</div>
</a>


-->

</div>
</div>
<div class="right_stomach">
        <!--
    <div class="c-dropdown js-dropdown">
    <input type="hidden" name="Framework" id="Framework" class="js-dropdown__input">
<span class="c-button c-button--dropdown js-dropdown__current">我  要  发  布</span>
<ul class="c-dropdown__list">
<li class="c-dropdown__item"><a href="group.php">群组发帖</a></li>
    <li class="c-dropdown__item"><a href="forum.php?mod=forumdisplay&amp;fid=40">发 活 动</a></li>
    <li class="c-dropdown__item"><a href="home.php?mod=follow">发 广 播</a></li>
    </ul>
</div>

<script src="<?php echo $_G['siteurl'];?>static/dzwn_v1/js/function_button1.js" type="text/javascript"></script>

-->

<div class="function_buttons">

    <div class="once_button">
    <button id="main_button" onclick="button_click();">发  布</button>
<button class="forum_button" id="pub1"><a href="group.php">群组发帖</a></button>
<button class="forum_button" id="pub2"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=40">发 活 动</a></button>
<button class="forum_button" id="pub3"><a href="home.php?mod=follow">发 广 播</a></button>
</div>

</div>   

<div class="ranks">
<div class="rank" id="attention">
<hr/ style="border: 5px solid #eebb00;">
<div class="rank_head" id="attention_head">
    最受关注
</div>
<div class="rank_body">
    <?php if(is_array($most_followed_10_forums_info)) foreach($most_followed_10_forums_info as $followed_forum_key => $followed_forum_val) { ?>    <div class="li">
    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $followed_forum_val['tid'];?>"><?php echo $followed_forum_key+1;?>.<?php echo $followed_forum_val['subject'];?></a>
</div>
<?php } ?>
<!--
<div class="li">
    <a href="#">2.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">3.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">4.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">5.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">6.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">7.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">8.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">9.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">10.ssafdfsafd</a>
</div>
-->
</div>
</div>
<div class="rank" id="new">
    <hr/ style="border: 5px solid #eebb00;">
<div class="rank_head" id="new_head">
    最新
</div>
<div class="rank_body"><?php if(is_array($newest_10_forums_info)) foreach($newest_10_forums_info as $new_forum_key => $new_forum_val) { ?>    <div class="li">
    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $new_forum_val['tid'];?>"><?php echo $new_forum_key+1;?>.<?php echo $new_forum_val['subject'];?></a>
</div>
<?php } ?>

<!--
<div class="li">
    <a href="#">2.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">3.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">4.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">5.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">6.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">7.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">8.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">9.ssafdfsafd</a>
</div>
<div class="li">
    <a href="#">10.ssafdfsafd</a>
</div>
-->
</div>
</div>
</div>
    <div class="index_ad">
    <div class="right-side-focus">
<ul>
<li><a href="javascript:;"><img src="static/dzwn_v1/img/ad.jpg"></a></li>
<li><a href="javascript:;"><img src="static/dzwn_v1/img/ad1.jpg"></a></li>
</ul>	
</div>
<script>
    (function(jQuery) {
jQuery.fn.fullScreen = function(settings) {//首页焦点区满屏背景广告切换
var defaults = {
time: 5000,
css: 'full-screen-slides-pagination'
};
var settings = jQuery.extend(defaults, settings);
return this.each(function(){
var jQuerythis = jQuery(this);
var size = jQuerythis.find("li").size();
var now = 0;
var enter = 0;
var speed = settings.time;
jQuerythis.find("li:gt(0)").hide();
var btn = '<ul class="' + settings.css + '">';
for (var i = 0; i < size; i++) {
btn += '<li>' + '<a href="javascript:void(0)">' + (i + 1) + '</a>' + '</li>';
}
btn += "</ul>";
jQuerythis.after(btn);
var jQuerypagination = jQuerythis.next();
jQuerypagination.find("li").first().addClass('current');
jQuerypagination.find("li").click(function() {
var change = jQuery(this).index();
jQuery(this).addClass('current').siblings('li').removeClass('current');
jQuerythis.find("li").eq(change).css('z-index', '800').show();
jQuerythis.find("li").eq(now).css('z-index', '900').fadeOut(400,
function() {
jQuerythis.find("li").eq(change).fadeIn(500);
});
now = change;
}).mouseenter(function() {
enter = 1;
}).mouseleave(function() {
enter = 0;
});
function slide() {
var change = now + 1;
if (enter == 0){
if (change == size) {
change = 0;
}
jQuerypagination.find("li").eq(change).trigger("click");
}
setTimeout(slide, speed);
}
setTimeout(slide, speed);
});
}
jQuery.fn.jfocus = function(settings) {//首页焦点广告图切换
var defaults = {
time: 5000
};
var settings = jQuery.extend(defaults, settings);
return this.each(function(){
var jQuerythis = jQuery(this);
var sWidth = jQuerythis.width();
var len = jQuerythis.find("ul li").length;
var index = 0;
var picTimer;
var btn = "<div class='pagination'>";
for (var i = 0; i < len; i++) {
btn += "<span></span>";
}
btn += "</div><div class='arrow pre'></div><div class='arrow next'></div>";
jQuerythis.append(btn);
jQuerythis.find(".pagination span").css("opacity", 0.4).mouseenter(function() {
index = jQuerythis.find(".pagination span").index(this);
showPics(index);
}).eq(0).trigger("mouseenter");
jQuerythis.find(".arrow").css("opacity", 0.0).hover(function() {
jQuery(this).stop(true, false).animate({
"opacity": "0.5"
},
300);
},
function() {
jQuery(this).stop(true, false).animate({
"opacity": "0"
},
300);
});
jQuerythis.find(".pre").click(function() {
index -= 1;
if (index == -1) {
index = len - 1;
}
showPics(index);
});
jQuerythis.find(".next").click(function() {
index += 1;
if (index == len) {
index = 0;
}
showPics(index);
});
jQuerythis.find("ul").css("width", sWidth * (len));
jQuerythis.hover(function() {
clearInterval(picTimer);
},
function() {
picTimer = setInterval(function() {
showPics(index);
index++;
if (index == len) {
index = 0;
}
},
settings.time);
}).trigger("mouseleave");
function showPics(index) {
var nowLeft = -index * sWidth;
jQuerythis.find("ul").stop(true, false).animate({
"left": nowLeft
},
300);
jQuerythis.find(".pagination span").stop(true, false).animate({
"opacity": "0.4"
},
300).eq(index).stop(true, false).animate({
"opacity": "1"
},
300);
}
});
}
jQuery.fn.jfade = function(settings) {//首页标准模块中间多图广告鼠标触及凸显
var defaults = {
start_opacity: "1",
high_opacity: "1",
low_opacity: ".1",
timing: "500"
};
var settings = jQuery.extend(defaults, settings);
settings.element = jQuery(this);
//set opacity to start
jQuery(settings.element).css("opacity", settings.start_opacity);
//mouse over
jQuery(settings.element).hover(
//mouse in
function() {
jQuery(this).stop().animate({
opacity: settings.high_opacity
},
settings.timing); //100% opacity for hovered object
jQuery(this).siblings().stop().animate({
opacity: settings.low_opacity
},
settings.timing); //dimmed opacity for other objects
},
//mouse out
function() {
jQuery(this).stop().animate({
opacity: settings.start_opacity
},
settings.timing); //return hovered object to start opacity
jQuery(this).siblings().stop().animate({
opacity: settings.start_opacity
},
settings.timing); // return other objects to start opacity
});
return this;
}
})(jQuery);
function takeCount() {
setTimeout("takeCount()", 1000);
jQuery(".time-remain").each(function(){
var obj = jQuery(this);
var tms = obj.attr("count_down");
if (tms>0) {
tms = parseInt(tms)-1;
var days = Math.floor(tms / (1 * 60 * 60 * 24));
var hours = Math.floor(tms / (1 * 60 * 60)) % 24;
var minutes = Math.floor(tms / (1 * 60)) % 60;
var seconds = Math.floor(tms / 1) % 60;

if (days < 0) days = 0;
if (hours < 0) hours = 0;
if (minutes < 0) minutes = 0;
if (seconds < 0) seconds = 0;
obj.find("[time_id='d']").html(days);
obj.find("[time_id='h']").html(hours);
obj.find("[time_id='m']").html(minutes);
obj.find("[time_id='s']").html(seconds);
obj.attr("count_down",tms);
}
});
}
function update_screen_focus(){
var ap_ids = '';//广告位编号
jQuery(".full-screen-slides li[ap_id]").each(function(){
var ap_id = jQuery(this).attr("ap_id");
ap_ids += '&ap_ids[]='+ap_id;
});
jQuery(".jfocus-trigeminy a[ap_id]").each(function(){
var ap_id = jQuery(this).attr("ap_id");
ap_ids += '&ap_ids[]='+ap_id;
});
if (ap_ids != '') {
jQuery.ajax({
type: "GET",
url: SHOP_SITE_URL+'/index.php?act=adv&op=get_adv_list'+ap_ids,
dataType:"jsonp",
async: true,
success: function(adv_list){
jQuery(".full-screen-slides li[ap_id]").each(function(){
var obj = jQuery(this);
var ap_id = obj.attr("ap_id");
var color = obj.attr("color");
if (typeof adv_list[ap_id] !== "undefined") {
var adv = adv_list[ap_id];
obj.css("background",color+' url('+adv['adv_img']+') no-repeat center top');
obj.find("a").attr("title",adv['adv_title']);
obj.find("a").attr("href",adv['adv_url']);
}
});
jQuery(".jfocus-trigeminy a[ap_id]").each(function(){
var obj = jQuery(this);
var ap_id = obj.attr("ap_id");
if (typeof adv_list[ap_id] !== "undefined") {
var adv = adv_list[ap_id];
obj.attr("title",adv['adv_title']);
obj.attr("href",adv['adv_url']);
obj.find("img").attr("alt",adv['adv_title']);
obj.find("img").attr("src",adv['adv_img']);
}
});
}
});
}
}
jQuery(function(){
setTimeout("takeCount()", 1000);
//首页Tab标签卡滑门切换
jQuery(".tabs-nav > li > h3").bind('mouseover', (function(e) {
if (e.target == this) {
var tabs = jQuery(this).parent().parent().children("li");
var panels = jQuery(this).parent().parent().parent().children(".tabs-panel");
var index = jQuery.inArray(this, jQuery(this).parent().parent().find("h3"));
if (panels.eq(index)[0]) {
tabs.removeClass("tabs-selected").eq(index).addClass("tabs-selected");
panels.addClass("tabs-hide").eq(index).removeClass("tabs-hide");
}
}
}));

jQuery('.jfocus-trigeminy > ul > li > a').jfade({
start_opacity: "1",
high_opacity: "1",
low_opacity: ".5",
timing: "200"
});
jQuery('.fade-img > a').jfade({
start_opacity: "1",
high_opacity: "1",
low_opacity: ".5",
timing: "500"
});
jQuery('.middle-goods-list > ul > li').jfade({
start_opacity: "0.9",
high_opacity: "1",
low_opacity: ".25",
timing: "500"
});
jQuery('.recommend-brand > ul > li').jfade({
start_opacity: "1",
high_opacity: "1",
low_opacity: ".5",
timing: "500"
});

jQuery(".full-screen-slides").fullScreen();
jQuery(".jfocus-trigeminy").jfocus();
jQuery(".right-side-focus").jfocus();
jQuery(".groupbuy").jfocus({time:8000});
jQuery("#saleDiscount").jfocus({time:8000});
//	jQuery("a[href='']").removeAttr("target").attr("href","javascript:void(0)");

//右侧滚动条
jQuery(document).scroll(function(){
var scrTop = (document.body.scrollTop || document.documentElement.scrollTop);
if (scrTop > 200)
{
jQuery(".fix_right .back").show();
} else
{
jQuery(".fix_right .back").hide();
}
});
jQuery(".fix_right .back").click(function(){
jQuery("html, body").animate({
 scrollTop: 0
}, 120);
});
});

//top划过效果
jQuery(function(){
jQuery(".login_wrap ul li").hover(function(){
jQuery(this).css("background","#fff");
jQuery(this).children(".user_index").show();
},function(){
jQuery(this).css("background","none");
jQuery(this).children(".user_index").hide();
})
});

//工具首页banner
jQuery(function(){
var numpic = jQuery('#slides li').size()-1;
var nownow = 0;
var inout = 0;
var TT = 0;
var SPEED = 7000;


jQuery('#slides li').eq(0).siblings('li').css({'display':'none'});


var ulstart = '<ul id="pagination">',
ulcontent = '',
ulend = '</ul>';
ADDLI();
var pagination = jQuery('#pagination li');
var paginationwidth = jQuery('#pagination').width();
jQuery('#pagination').css('margin-left',(470-paginationwidth))

pagination.eq(0).addClass('current')

function ADDLI(){
//var lilicount = numpic + 1;
for(var i = 0; i <= numpic; i++){
ulcontent += '<li>' + '<a href="#">' + (i+1) + '</a>' + '</li>';
}

jQuery('#slides').after(ulstart + ulcontent + ulend);	
}

pagination.on('click',DOTCHANGE)

function DOTCHANGE(){

var changenow = jQuery(this).index();

jQuery('#slides li').eq(nownow).css('z-index','900');
jQuery('#slides li').eq(changenow).css({'z-index':'800'}).show();
pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
jQuery('#slides li').eq(nownow).fadeOut(400,function(){jQuery('#slides li').eq(changenow).fadeIn(500);});
nownow = changenow;
}

pagination.mouseenter(function(){
inout = 1;
})

pagination.mouseleave(function(){
inout = 0;
})

function GOGO(){

var NN = nownow+1;

if( inout == 1 ){
} else {
if(nownow < numpic){
jQuery('#slides li').eq(nownow).css('z-index','900');
jQuery('#slides li').eq(NN).css({'z-index':'800'}).show();
pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
jQuery('#slides li').eq(nownow).fadeOut(400,function(){jQuery('#slides li').eq(NN).fadeIn(500);});
nownow += 1;

}else{
NN = 0;
jQuery('#slides li').eq(nownow).css('z-index','900');
jQuery('#slides li').eq(NN).stop(true,true).css({'z-index':'800'}).show();
jQuery('#slides li').eq(nownow).fadeOut(400,function(){jQuery('#slides li').eq(0).fadeIn(500);});
pagination.eq(NN).addClass('current').siblings('li').removeClass('current');

nownow=0;

}
}
TT = setTimeout(GOGO, SPEED);
}

TT = setTimeout(GOGO, SPEED); 

});

//导航转换
jQuery(function(){
jQuery(".nav-main-right a").mouseover(function(){
jQuery(this).addClass("special").siblings().removeClass("special");
})
});
</script>

</div>
</div>
</div>
<script>
    var bottomMark = 0;
    var page = 1;
window.onscroll = function(){
    if(bottomMark==0){
    var viewHeight = document.documentElement.scrollTop || document.body.scrollTop;
var pageHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
if(viewHeight/pageHeight >= 0.5 ) {
page++;
//alert(document.body.scrollHeight);
jQuery.ajax({url:"portal.php?mod=ajax",success:function(e){
var result = JSON.parse(e);
if(result.pop().end==1){
bottomMark=1;
}
var article;
for(var i=0;i<(result.length-1);i++){
    article = '<a href="forum.php?mod=viewthread&amp;tid='+result[i].tid+'">'+
'<div class="article_synopsis">'+
'<div class="article_left">'+
'<div class="article_title">'+
result[i].subject+
'</div>'+
'<div class="article_abstract">'+
result[i].message+
'</div>'+
'</div>';
if(result[i].pic_url){
    article += '<div class="article_right">'+
'<div class="article_pic">'+
'<img class="article_img" src="{<?php echo $_G;?>[\'siteurl\']}data/attachment/forum/{<?php echo $forum_val;?>[\'pic_url\']}" />'+
'</div>'+
'</div>';
}
article +=	'</div>'+
    '</a>';
}

    jQuery("div.article_list").append(article);

}});
} 
}else if(bottomMark==1){

}
    
}
</script>
<div class="stomach_over">
已经到底了
</div>
        </div>
      
</div>

<script>
    var button_i = 0; 
    function button_click(){
    var old_button = document.getElementById("main_button");
var new_buttons = document.getElementsByClassName("forum_button");

//old_button.style.display = "none";

if(button_i==0){
    for(var i = 0;i<new_buttons.length;i++){
        new_buttons[i].style.display = "inline-block";
}
button_i=1;
}else{
    for(var i = 0;i<new_buttons.length;i++){
        new_buttons[i].style.display = "none";
}
button_i=0;
}

}
</script>

</body>
</html>
