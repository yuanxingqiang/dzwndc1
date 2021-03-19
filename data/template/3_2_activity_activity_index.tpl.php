<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('activity_index');?><?php include template('common/header'); ?>        <!--
    <div class="banner_container">
    	<ul id="slides">
    		<li style="background:url(<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/1.jpg) no-repeat 50% 0px; z-index: 900px;"></li>
    		<li style="background:url(<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/201602221510015175.jpg) no-repeat 50% 0px; z-index: 900px;"></li>
    	</ul>
    </div>
-->
    
    <div class="tools">
    	<div class="tools_container">


<!--
    		<div class="tools_left">
    			<span class="search_box">
    				<input type="text" autocomplete="off" class="search" name="search" placeholder="请输入你想搜索的工具">
    				<i class="fa fa-search search_icon"></i>
    			</span>
    			<a class="icon_one comment" href="javascript:;" data-id="1" target="_blank">
    				<span class="php"></span>
    				<em>PHP工具</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="icon_two comment" href="javascript:;" data-id="2" target="_blank">
    				<span class="jq"></span>
    				<em>JQuery插件</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="icon_three comment" href="javascript:;" data-id="3" target="_blank">
    				<span class="H5"></span>
    				<em>HTML5工具</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			
    			<a class="icon_four comment" href="javascript:;" data-id="4" target="_blank">
    				<span class="linux"></span>
    				<em>Linux组件</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="icon_five comment" href="javascript:;" data-id="5" target="_blank">
    				<span class="js"></span>
    				<em>JavaScript工具</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="icon_six comment" href="javascript:;" data-id="6" target="_blank">
    				<span class="development"></span>
    				<em>开发工具</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="icon_seven comment" href="javascript:;" data-id="7" target="_blank">
    				<span class="server"></span>
    				<em>服务器工具</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="icon_eight comment" href="javascript:;" data-id="8" target="_blank">
    				<span class="other"></span>
    				<em>其他软件</em>
    				<i class="fa fa-caret-up caret"></i>
    			</a>
    			<a class="upload" href="javascript:;" target="_blank">我要上传</a>
    		</div>
-->

  <div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
<tr>
  <td></td>
  <td>时段：</td>
  <td colspan="6">
    
  </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>频道：</td>
  <td colspan="6">
    <ul class="multicheck">
<li><input type="checkbox" name="checkbox" id="chanel1" style="display:none" checked="false" ><label for="chanel1" class="checkbox-label checkbox-Num1" data-num="1">全部</label></li>
<li><input type="checkbox" name="checkbox" id="chanel2" style="display:none" checked="false" ><label for="chanel2" class="checkbox-label">行业</label></li>
<li><input type="checkbox" name="checkbox" id="chanel3" style="display:none" checked="false"><label for="chanel3" class="checkbox-label">生活</label></li>
<li><input type="checkbox" name="checkbox" id="chanel4" style="display:none" checked="false"><label for="chanel4" class="checkbox-label">亲子</label></li>
</ul>
  </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>分类：</td>
  <td colspan="6">
     <ul class="multicheck">
<li><input type="checkbox" name="checkbox" id="kind1" style="display:none" checked="false"><label for="kind1" class="checkbox-label checkbox-Num1" data-num="1">全部</label></li>
<li><input type="checkbox" name="checkbox" id="kind2" style="display:none" checked="false" ><label for="kind2" class="checkbox-label">IT互联网</label></li>
<li><input type="checkbox" name="checkbox" id="kind3" style="display:none" checked="false" ><label for="kind3" class="checkbox-label">创业</label></li>
<li><input type="checkbox" name="checkbox" id="kind4" style="display:none" checked="false" ><label for="kind4" class="checkbox-label">科技</label></li>
<li><input type="checkbox" name="checkbox" id="kind5" style="display:none" checked="false" ><label for="kind5" class="checkbox-label">金融</label></li>
<li><input type="checkbox" name="checkbox" id="kind6" style="display:none" checked="false" ><label for="kind6" class="checkbox-label">游戏</label></li>
<li><input type="checkbox" name="checkbox" id="kind7" style="display:none" checked="false" ><label for="kind7" class="checkbox-label">教育</label></li>
<li><input type="checkbox" name="checkbox" id="kind8" style="display:none" checked="false" ><label for="kind8" class="checkbox-label">电商</label></li>
<li><input type="checkbox" name="checkbox" id="kind9" style="display:none" checked="false" ><label for="kind9" class="checkbox-label">文娱</label></li>
<li><input type="checkbox" name="checkbox" id="kind10" style="display:none" checked="false" ><label for="kind10" class="checkbox-label">营销</label></li>
<li><input type="checkbox" name="checkbox" id="kind11" style="display:none" checked="false" ><label for="kind11" class="checkbox-label">设计</label></li>
<li><input type="checkbox" name="checkbox" id="kind12" style="display:none" checked="false" ><label for="kind12" class="checkbox-label">地产</label></li>
<li><input type="checkbox" name="checkbox" id="kind13" style="display:none" checked="false" ><label for="kind13" class="checkbox-label">医疗</label></li>
<li><input type="checkbox" name="checkbox" id="kind14" style="display:none" checked="false" ><label for="kind14" class="checkbox-label">服务业</label></li>
<li><input type="checkbox" name="checkbox" id="kind15" style="display:none" checked="false" ><label for="kind15" class="checkbox-label">区块链</label></li>
<li><input type="checkbox" name="checkbox" id="kind16" style="display:none" checked="false" ><label for="kind16" class="checkbox-label">区演出</label></li>
<li><input type="checkbox" name="checkbox" id="kind17" style="display:none" checked="false" ><label for="kind17" class="checkbox-label">文艺</label></li>
<li><input type="checkbox" name="checkbox" id="kind18" style="display:none" checked="false" ><label for="kind18" class="checkbox-label">手工</label></li>
<li><input type="checkbox" name="checkbox" id="kind19" style="display:none" checked="false" ><label for="kind19" class="checkbox-label">公益</label></li>
<li><input type="checkbox" name="checkbox" id="kind20" style="display:none" checked="false" ><label for="kind20" class="checkbox-label">户外运动</label></li>
<li><input type="checkbox" name="checkbox" id="kind21" style="display:none" checked="false" ><label for="kind21" class="checkbox-label">聚会交友</label></li>
<li><input type="checkbox" name="checkbox" id="kind22" style="display:none" checked="false" ><label for="kind22" class="checkbox-label">区块链</label></li>
<li><input type="checkbox" name="checkbox" id="kind23" style="display:none" checked="false" ><label for="kind23" class="checkbox-label">区块链</label></li>
<li><input type="checkbox" name="checkbox" id="kind24" style="display:none" checked="false" ><label for="kind24" class="checkbox-label">区块链</label></li>
<li><input type="checkbox" name="checkbox" id="kind25" style="display:none" checked="false" ><label for="kind25" class="checkbox-label">区块链</label></li>	
</ul>
  </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>状态：</td>
  <td colspan="6">
    <ul class="dowebok">
<ul class="multicheck">
<li><input type="checkbox" name="checkbox" id="stage1" style="display:none" checked="false" ><label for="stage1" class="checkbox-label checkbox-Num1" data-num="1">1</label></li>
<li><input type="checkbox" name="checkbox" id="stage2" style="display:none" checked="false" ><label for="stage2" class="checkbox-label">2</label></li>
<li><input type="checkbox" name="checkbox" id="stage3" style="display:none" checked="false" ><label for="stage3" class="checkbox-label">3</label></li>
<li><input type="checkbox" name="checkbox" id="stage4" style="display:none" checked="false" ><label for="stage4" class="checkbox-label">4</label></li>
</ul>
  </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>金额：</td>
  <td colspan="6">
    <ul class="dowebok">
<ul class="multicheck">
<li><input type="checkbox" name="checkbox" id="price1" style="display:none" checked="false" ><label for="price1" class="checkbox-label checkbox-Num1" data-num="1">1</label></li>
<li><input type="checkbox" name="checkbox" id="price2" style="display:none" checked="false" ><label for="price2" class="checkbox-label">2</label></li>
<li><input type="checkbox" name="checkbox" id="price3" style="display:none" checked="false" ><label for="price3" class="checkbox-label">3</label></li>
<li><input type="checkbox" name="checkbox" id="price4" style="display:none" checked="false" ><label for="price4" class="checkbox-label">4</label></li>
</ul>
  </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td colspan="2">
      关键字：<input type="text" id="activity_keywords_text" /><button style="width:50px;height:25px;background-color:orange;color:#FFF;border:0px;">筛选</button>
      </td>
  <td></td>
  <td colspan="3">
    <button style="width:60px;height:30px;background-color:orange;color:#FFF;border:0px;">清空条件</button>
  </td>
  <td><button style="width:60px;height:30px;background-color:orange;color:#FFF;border:0px;">发布活动</button></td>
  <td></td>
</tr>
  </tbody>
</table>

<script>
var labels = document.getElementsByClassName("checkbox-label");
for(let label of labels){
label.onclick=function(){
if(label.getAttribute("data-num")!=1){
//alert(1);
var chekbox = document.getElementById(label.getAttribute("for"));
if(chekbox.checked==true){
label.style.backgroundColor="orange";
label.style.color="#FFF";
}else{
label.style.backgroundColor="#FFF";
label.style.color="black";
}
//console.log(jQuery(this).parent().parent().children(":first").find("input"));

jQuery(this).parent().parent().children(":first").find("input").checked="false";
jQuery(this).parent().parent().children(":first").find("label").css("backgroundColor","#FFF");
jQuery(this).parent().parent().children(":first").find("label").css("color","black");

}

}
}

jQuery("label.checkbox-Num1").click(function(){
jQuery(this).prev().checked=true;
jQuery(this).css("backgroundColor","orange");
jQuery(this).css("color","#FFF");
jQuery(this).parent().nextAll().find("input").checked="false";
jQuery(this).parent().nextAll().find("input").next().css("backgroundColor","#FFF");
jQuery(this).parent().nextAll().find("input").next().css("color","black");
});
</script>
  </div>



    		<div class="tools_right">
    			<div class="tools_classify" >
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify" >
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify" >
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify" >
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify" >
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			<div class="tools_classify">
    				<a class="tools_img" href="javascript:;" target="_blank">
    					<img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/tools/index.png">
    				</a>
    				<div class="tools_info">
    					<a href="javascript:;" target="_blank">超级好用的PhpStorm</a>
    					<p>做最前沿的前端技术，如HTML5、CSS、青菜，少，手写笔，CoffeeScript，打字，埃米特，JavaScript，与重构、调试和单元测试可用。在浏览器中看到即时的变化，由于编辑。</p>
    				</div>
    				<div class="tools_fields">
    					<i class="fa fa-indent indent"></i>
    					<span>PHP</span>
    					<span>开发工具</span>
    				</div>
    				<div class="tools_stat">
    					<i class="fa fa-eye eye"></i>
    					<span class="number">336</span>
    					<div class="tools_author" title="提供者">
    						<i class="fa fa-user user"></i>
    					</div>
    					<div class="author_name">棒棒糖</div>
    				</div>
    			</div>
    			
    			<div class="pagination"> 
<ul class="pages">
<li>
<span>首页</span>
</li>
<li>
<span>上一页</span>
</li>
<li>
<span class="currentpage">1</span>
</li>
<li>
<a class="demo" href="javascript:;"><span>2</span></a>
</li>
<li>
<a class="demo" href="javascript:;"><span>3</span></a>
</li>
<li>
<a class="demo" href="javascript:;"><span>4</span></a>
</li>
<li>
<a class="demo" href="javascript:;"><span>5</span></a>
</li>
<li>
<a class="demo" href="javascript:;"><span>6</span></a>
</li>
<li>
<span>...</span>
</li>
<li>
<a class="demo" href="javascript:;"><span>下一页</span></a>
</li>
<li><a class="demo" href="javascript:;"><span>末页</span></a>
</li>
</ul> 
</div>
    		</div>
                <!--<div class="tools_right"><img src="<?php echo $_G['siteurl'];?>static/dzwn_v1/img/serch-null.png" width="340" height="400" alt="" style=" display:block;margin:3rem auto 4rem"/></div>-->
    	</div>
    </div>

<div class="footer_other">
<div class="other_container">
<p class="content_us">
<span><a href="javascript:;">关于我们</a></span>
<span><a href="javascript:;">加入大嘴蜗牛</a></span>
<span><a href="javascript:;">媒体报道与合作</a></span>
<span><a href="javascript:;">广告服务</a></span>
<span><a href="javascript:;">免责声明</a></span>
<span><a href="javascript:;">联系我们</a></span>
<span><a class="last" href="javascript:;">移动版</a></span>
</p>
<div class="content_text">
<p>
<span class="content_qq"><i></i>287504112</span>
<span class="content_tel"><i class="fa fa-phone-square"></i>022-287504112</span>
<span class="content_time"><i class="fa fa-clock-o"></i>工作时间：周一至周五(08:30~18:00)</span>
<span>版权归PhPChina所有&nbsp;&nbsp; |&nbsp;&nbsp; 基于PHP技术构建 &nbsp;&nbsp;|&nbsp;&nbsp;  本站使用腾讯云服务器+七牛云</span>
</p>
<p>Copyright：2005-2016 大嘴蜗牛.All Rights Reserved 京ICP备07504665号</p>
</div>
</div>
</div>

</div>

</body>
<script>
jQuery(function(){
leftNavArr = ['one_icon','two_icon','three_icon','four_icon','five_icon','six_icon','seven_icon','eight_icon']
var leftaA = jQuery(".comment");
         	var olderRoot = jQuery(".comment").parent().find('.root');
         	var olderIndex = olderRoot.index() || 0;
         	leftaA.on('click',function(event){
             var index = jQuery(this).index()-1;
             //数据分类ID
             var dataId = jQuery(this).attr('data-id');
             olderRoot.removeClass(leftNavArr[olderIndex]).removeClass('root');
             jQuery(this).addClass('root').addClass(leftNavArr[index]);
             jQuery(this).find("i").css("display","block").parent(".comment").siblings().find("i").hide();
             olderIndex = index;
             olderRoot = jQuery(this);
//           var color = jQuery(this).css("background-color");
//
//           jQuery.fn.getHexBackgroundColor=function(property)
//				{ 
//					var rgb=property;
//				    rgb=rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)jQuery/); 
//				    function hex(x) 
//				    { 
//				      return ("0"+parseInt(x).toString(16)).slice(-2); 
//				    } 
//				    rgb="#"+hex(rgb[1])+hex(rgb[2])+hex(rgb[3]); 
//
//				  return rgb; 
//				}  
//           var kk=jQuery.fn.getHexBackgroundColor(color);
//         	jQuery(".tools_img").css("border-color",kk);
//           ajaxData(dataId);
             event.stopPropagation();
             event.preventDefault();
             return false;
             
});
var k=0;
jQuery(".tools_classify").each(function(){
k++;
if(k<17){
jQuery(this).children(".tools_img").addClass("qq"+k);

}else{
jQuery(this).children(".tools_img").addClass("qq1");
k=1;
}
});

jQuery(".search").focus(function(){
jQuery(this).css("box-shadow","rgba(102,175,233,0.5) 0px 0px 6px");
})
jQuery(".search").blur(function(){
jQuery(this).css("box-shadow","1px 1px 8px rgba(210,206,206,0.35) inset,1px 1px 4px rgba(255,255,255,0.4)");
})

jQuery(".tools_author .user").click(function(){
jQuery(this).parent(".tools_author").hide(300).siblings(".author_name").show(300);
});
jQuery(".author_name").click(function(){
jQuery(this).hide(300).siblings(".tools_author").show(300);
});
jQuery(document).scroll(function(){
//				var scrTop = (document.body.scrollTop || document.documentElement.scrollTop);
var top = jQuery(document).scrollTop() ; 
if(top>486){
if(top<1020){
jQuery(".tools_left").css("top", (top-490) + "px");
}
}else{
jQuery(".tools_left").css("top", "0px");
}
})
        });
</script>
</html>
