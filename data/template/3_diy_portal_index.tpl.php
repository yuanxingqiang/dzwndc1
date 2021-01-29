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
   <!-- <div class="function_buttons">  -->
    <div class="c-dropdown js-dropdown">
    <input type="hidden" name="Framework" id="Framework" class="js-dropdown__input">
<span class="c-button c-button--dropdown js-dropdown__current">我  要  发  布</span>
    <ul class="c-dropdown__list">
    <li class="c-dropdown__item" data-dropdown-value="angular">发 帖 子</li>
<li class="c-dropdown__item" data-dropdown-value="backbone">发 日 志</li>
<li class="c-dropdown__item" data-dropdown-value="ember">发 活 动</li>
<li class="c-dropdown__item" data-dropdown-value="knockout">发 广 播</li>
</ul>
</div>

<script src="<?php echo $_G['siteurl'];?>static/dzwn_v1/js/function_button1.js" type="text/javascript"></script>

<!--
    <div class="once_button">
    <button id="main_button" onclick="button_click();">发  布</button>
<button class="forum_button" >发 帖 子</button>
<button class="forum_button" >发 日 志</button>
<button class="forum_button" >发 活 动</button>
<button class="forum_button" >发 广 播</button>
</div>
-->
    
<!--</div>  -->
<div class="ranks">
<div class="rank" id="attention">
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
    <div id="advertisement">
    <a href="http://book.kongfz.com/135797/1134103120/" target="blank">
        <img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/adver.jpg" style="width:100%" />
</a>
</div>
</div>
</div>
</div>
<div class="stomach_over">
已经到底了
</div>
        </div>
      
</div>

<script>
    function button_click(){
    var old_button = document.getElementById("main_button");
var new_buttons = document.getElementsByClassName("forum_button");

old_button.style.display = "none";
for(var i = 0;i<new_buttons.length;i++){
    new_buttons[i].style.display = "inline-block";
}

}
</script>

</body>
</html>
