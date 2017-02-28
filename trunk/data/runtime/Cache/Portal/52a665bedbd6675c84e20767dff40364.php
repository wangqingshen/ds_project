<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($site_name); ?> 关于我们</title>
	<meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
	<meta name="description" content="<?php echo ($seo_description); ?>">
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
<body>
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
				<li class="nav-dropdown" style="min-width: 70px;">
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
				<li class="nav-dropdown" style="min-width: 70px;">
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
				 			<a href="<?php echo U('partner/index#sldc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">三利地产</a>
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
<div id="about-us-banner" class="common-banner">
	<div class="common-banner-icon"></div>
</div>
<div class="common-title-container">
	<div class="ds-title-div">
		<em class="common-title-icon"></em>
		<span style="margin-left:18px;">关于我们</span>
	</div>
</div>
<div id="about-us-wrapper" class="ds-part">
	<div class="us-bg" style="background:url(/deshang/trunk/themes/simplebootx/Public/images/us_bg.png) no-repeat center;"></div>
	<div id="yb" class="list-item" style="top: 35px;">
		<a href="http://www.ubespace.cn" target="__blank"><div class="list-item-logo" style="background:url('/deshang/trunk/themes/simplebootx/Public/images/ybkj.png') no-repeat center;"></div></a>
		<div class="list-item-title">
			<em></em>
			<span>优贝空间</span>
		</div>
		<div class="list-item-desc">
		优贝空间是成都首家投资驱动型孵化器和加速器，为国内、国际的优质创新创业项目提供“投前孵化”及“投后加速”管理服务。我们致力于面向西南地区寻找精英创业团队，并以“基金+孵化”的模式助力创业者，为其提供最优质的深度价值服务。团队入驻后拥有的不止是简单的办公空间和基础服务，我们更以成都为起点，结合国内及国际化的优质投资机构及一线合作伙伴，用资金和资源为企业提供长期发展支持，助推项目迅速成长，快速发展。优贝空间的价值在于，我们作为连接西南地区优质项目与国内一线优质资源的高速发展通道，汇聚了国内一线资源协同参与孵化，助力精英创业项目走向全国。
		</div>
	</div>
	<div id="jd" class="list-item"  style="top: 415px;">
		<a href="http://www.qidianfund.com" target="__blank"><div class="list-item-logo" style="background:url('/deshang/trunk/themes/simplebootx/Public/images/jdjj.png') no-repeat center;"></div></a>
		<div class="list-item-title">
			<em></em>
			<span>奇点基金</span>
		</div>
		<div class="list-item-desc">
		奇点基金是成立于2015年5月，第一期募资1亿元，主要以投资A轮或pre-A轮项目为主，是成都最早布局移动互联网+创投机构之一，关注于移动互联网、TMT、智能硬件、大健康、工具软件、旅游、体育等领域的成长期创业项目。目前已在短时间内赢得业内良好口碑，是国内首屈一指的专业创投基金。
		<br>
		奇点基金的投资理念是做“最懂创业者的创投基金”，其业界口碑主要得益于尊重和热忱对待每一位创业者，从不敷衍。除了为创业者提供资金投资外，还提供战略战术、商业分析、资源对接以及投资建议、创业指导等全方位辅导，为不同阶段的创业者和项目提供个性化支持和服务。我们希望能发掘和吸引更多的优秀项目和创业者，因为我们不仅仅是您的造梦者，还要助您成就梦想。
		</div>
	</div>
	<div id="ck" class="list-item"  style="top: 795px;">
		<div class="list-item-logo" style="background:url('/deshang/trunk/themes/simplebootx/Public/images/ckjj.png') no-repeat center;"></div>
		<div class="list-item-title">
			<em></em>
			<span>创客基金</span>
		</div>
		<div class="list-item-desc">
		创客基金成立于2015年，第一期募资2亿元，主要以投资B轮及新三板挂牌定增为主，是一家专注于股权投资及管理的国内领先私募投资机构。主要投资移动互联网、智能硬件、现代服务业、文化娱乐、新能源等成熟期企业。
		创客基金团队从事投资行业多年，经验丰富，对行业趋势、技术发展、项目价值能够作出专业化研判和预测。能为企业提供专业化咨询建议和多项增值服务，帮助他们持续成长为行业领先者。<br>
		创客基金一直以来坚持“独立研究、风险可控、科学决策、价值投资”的核心理念，秉承专业严谨的投资体系、精益求精的投资态度，高度谨慎的投资决策，与时俱进的投资理念，不断实现企业的规模发展和稳健增值。
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
			<p><i></i>商业计划书发送至：BP@desunfund.com</p>
			<i></i><small >求职简历发送至：HR@desunfund.com</small>
			<br>
			<small>咨询电话：028-83129317</small>
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

    
<!-- JavaScript -->
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