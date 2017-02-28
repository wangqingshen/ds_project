<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
			<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/deshang/trunk/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/deshang/trunk/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
   <!--  <link href="/deshang/trunk/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet"> -->
    <link href="/deshang/trunk/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/deshang/trunk/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/deshang/trunk/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/deshang/trunk/themes/simplebootx/Public/css/amazeui.min.css" rel="stylesheet">
	<link href="/deshang/trunk/themes/simplebootx/Public/css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
    <link href="/deshang/trunk/themes/simplebootx/Public/css/ie.css" rel="stylesheet">
	<![endif]-->
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		/*#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}*/
	</style>
	<style type="text/css">
	.common-banner-icon, .common-title-icon{
  		behavior: url(/deshang/trunk/themes/simplebootx/Public/iecss3/ie-css3.htc);
	}
	</style>
	
	</head>
<body class="">
<?php echo hook('body_start');?>
<header class="am-topbar">
	<div class="am-topbar-1">
		<h1 class="am-topbar-brand">
			<a href="/deshang/trunk/">德商资本</a>
		</h1>

		<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}">
			<span class="am-sr-only">导航切换</span>
			<span
      class="am-icon-bars"></span>
		</button>
		<div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
			<ul id="nav" class="am-nav am-nav-pills am-topbar-nav am-topbar-right" style="height:60px;margin-top: 0;">

				<li>
					<a href="/deshang/trunk/">首页</a>
				</li>
				<li class="nav-dropdown">
				 	<a href="<?php echo U('page/index',array('id'=>'2', 'state'=>'about_us'));?>" data-state="about_us">
				 		关于我们
				 		<span class="am-icon-caret-down"></span>
				 	</a>
				 	<div class="am-dropdown-wrapper">
				 		<span>
				 			<a href="<?php echo U('page/index#yb',array('state'=>'about_us','id'=>'2'));?>" data-state="about_us">优贝空间</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('page/index#jd',array('state'=>'about_us','id'=>'2'));?>" data-state="about_us">奇点基金</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('page/index#ck',array('state'=>'about_us','id'=>'2'));?>" data-state="about_us">创客基金</a>
				 		</span>
				 	</div>
				</li>
				<li>
					<a href="<?php echo U('page/index',array('id'=>'1', 'state'=>'case'));?>" data-state="case">投资案例</a>
				</li>
				<li>
					<a href="<?php echo U('list/index',array('id'=>'2', 'state'=>'news'));?>" data-state="news">新闻资讯</a>
				</li>
				<li class="nav-dropdown">
				 	<a href="<?php echo U('partner/index',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">
				 		合作伙伴
				 		<span class="am-icon-caret-down"></span>
				 	</a>
				 	<div class="am-dropdown-wrapper">
				 		<span>
				 			<a href="<?php echo U('partner/index#jcc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">北京金长川</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('partner/index#lgdc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">蓝光地产</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('partner/index#sldc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">西藏三利地产</a>
				 		</span>
				 	</div>
				</li>
				<li>
					<a href="<?php echo U('contact/index',array('id'=>'2','state'=>'contact_us'));?>" data-state="contact_us">联系我们</a>
				</li>
			</ul>

		</div>
	</div>
	<div id="nav-common-wrapper"></div>
</header>
<div id="news-banner" class="common-banner">
	<div class="common-banner-icon"></div>
</div>
<div class="common-title-container">
	<div class="ds-title-div">
		<em class="common-title-icon"></em>
		<span style="margin-left:18px;">新闻资讯</span>
	</div>
</div>
<div class="news-detail-wrapper">
	<div class="news-detail-container">
		<div class="news-detail-left">
			<h1 class="news-detail-title">南水北调工程荣获国家级自然保护项目大奖</h1>
			<div class="news-detail-info">
				<span>发布时间：2016/04/05</span>
				<span class="news-detail-line">|</span>
				<span>浏览：100</span>
			</div>
			<div class="news-detail-content">
				德商资本致力于用投资改变世界，满足优质创业项目再种子、天使、A轮、PE多层次融资需求。同时，还将在方向、战略、战术、人才、资源、行业、公司管理等方面提供全方位辅导和帮助，欢迎优质创业项目加入！
				德商资本，是四川资金管有量名列前茅的投资机构，同时也是最具成长性的全国化快速发展企业，我们为员工提供最具发展空间的广阔平台，无论您是经验丰富的职场达人，还是初出茅庐的职场菜鸟，我们欢迎每一个有想法和创见的人加入！
				在德商，无论您在哪个部门，您是何种身份，都是我们团队的一部分无论您是经验丰富的职场达人，初出茅庐的应届毕业生，还是成长中的在校生我们期待每一个有创见的人加入德商
			</div>
			<div class="news-detail-btn">
				<a class="news-detail-prev" href="#">上一篇：世界环保组织机构正式成立</a>
				<a class="news-detail-next" href="#">下一篇：马尔代夫三日游免费不是梦</a>
			</div>
			<div class="news-detail-btn">
				<a class="news-detail-return" href="<?php echo U('list/index',array('id'=>'2', 'state'=>'news'));?>">返回列表</a>
			</div>
		</div>
		<div class="news-detail-right">
			<h2 class="news-detail-t">最新资讯</h2>
			<ul class="news-detail-list">
				<li><a href="#">电信宽带安置中心部署</a></li>
				<li><a href="#">LOL职业联赛正式启动</a></li>
				<li><a href="#">新版《花瓣在望》正式开拍，大腕云集</a></li>
				<li><a href="#">德商资本在纽约挂牌上市</a></li>
			</ul>
			<div style="text-align: center;padding-top: 20px;">
				<a class="news-detail-more" href="#">更多...</a>
			</div>
		</div>
	</div>
</div>
<!-- <br>
<br>
<br> -->
<!-- Footer ==================================================
<hr> -->
<?php echo hook('footer');?>
<footer class="ds-footer">
	<div class="am-for-content">
		<div class="am-for-l">
			<p class="am-for-logo">德商资本</p>
			<small >CopyRight © 2016 BusinessBigDataAll Rights Reserved 蜀ICP备13021</small>
		</div>
		<div class="am-for-r">
			<p><i></i>媒体合作发送至：media@zhenfund.com</p>
			<small >商业规划书发送至：dream@zhenfund.com</small>
		</div>
	</div>
</footer>
<!-- <div id="footer">
	<div class="links">
		<?php $links=sp_getlinks(); ?>
		<?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
	</div>
	<p>
		Made by <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>
		Code licensed under the 
		<a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
		<br />
		Based on 
		<a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.
		Icons from 
		<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
	</p>
</div>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div> -->
<!-- <?php echo ($site_tongji); ?> -->

<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/deshang/trunk/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--[if lt IE 9]>
    	<script src="/deshang/trunk/themes/simplebootx/Public/js/jquery.min.1.js"></script>
		<script src="/deshang/trunk/themes/simplebootx/Public/js/modernizr.js"></script>
		<script src="/deshang/trunk/themes/simplebootx/Public/js/amazeui.ie8polyfill.min.js"></script>
	<![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!-->
		<script src="/deshang/trunk/themes/simplebootx/Public/js/jquery.min.js"></script>
	<!--<![endif]-->
    <script src="/deshang/trunk/themes/simplebootx/Public/js/amazeui.min.js"></script>
    <script src="/deshang/trunk/public/js/wind.js"></script>
    <script src="/deshang/trunk/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/deshang/trunk/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		// $("#main-menu li.dropdown").hover(function(){
		// 	$(this).addClass("open");
		// },function(){
		// 	$(this).removeClass("open");
		// });
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/deshang/trunk/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>
	<script type="text/javascript">
		$("#nav li").hover(
			function(){
				clearTimeout(setTimeout("0")-1);
				$(".am-dropdown-wrapper").hide(); 
				if($(this).attr('class') == 'nav-dropdown' || $(this).attr('class') == 'nav-dropdown am-active') {
					$('#nav-common-wrapper').show();
					$(this).find('.am-dropdown-wrapper').show();
					$(this).find('a>span').removeClass('am-icon-caret-down').addClass('am-icon-caret-up');
				}
			},
			function(){
				$('#nav-common-wrapper').hide();
				$(this).find('.am-dropdown-wrapper').hide(); 
				$(this).find('a>span').removeClass('am-icon-caret-up').addClass('am-icon-caret-down');
			}
		);
		$(function(){
			var regState = new RegExp("state=([^&]*)(&|$)"),
				url = window.location.href,
				str = url.match(regState),
				state;
			if (str) {
				state = str[1];
			}
			if(state == undefined) {
				$('#nav li').eq(0).addClass('am-active');
			}else{
				$('#nav li').find('a[data-state="' + state + '"]').parent('li').addClass('am-active');
			}	
		});
	</script>


</body>
</html>