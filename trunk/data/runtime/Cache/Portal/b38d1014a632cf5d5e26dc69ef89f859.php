<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_name); ?> 首页</title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
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
	
		<!-- <link href="/deshang/trunk/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet"> -->
	</head>
<body class="body-white">
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

<?php $home_slides=sp_getslide("index_slide"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
<div class="ds-part">
	<div data-am-flexslider="{playAfterPaused: 3000, animation: 'fade'}" class="am-slider am-slider-default">
		<ul class="am-slides">
			<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
					<a href="<?php echo ($vo["slide_url"]); ?>" target="_blank">
					<img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>"></a></li><?php endforeach; endif; ?>
		</ul>
	</div>
</div>
<div id="ds-part1" class="ds-part">
	<div class="am-content-1">
		<div class="am-content-header-logo"></div>
		<div class="am-content-header-t">德商资本</div>
		<div class="am-content-desc"> 
			<!-- <em >成都德商投资集团</em> -->
			<span>
				德商资本成立于2014年，总部位于成都市高新区孵化园德商国际大楼，是四川最大民营投资机构，目前资金管理规模超过10个亿。德商资本专注于为初创期、成长期以及成熟期等不同发展阶段的优质创新型企业，提供从种子轮、天使轮、A轮、B轮到IPO、产业并购等全程融资服务。德商资本规划在未来5年内上市，上市后管理资金规模达到100亿，成为国内最有影响力的投资机构之一。

为实现投资业务的全产业链布局，德商资本打造了从优贝空间孵化器到德商奇点基金、德商创客基金、德商鼎祥基金等系列产品线布局。同时整合国内优质资源，紧紧把握行业趋势，为项目团队提供创业培训、专家指导、信息咨询、上市指导等增值服务，全力协助被投企业发展。

德商资本目前业务范围已拓展至北京、深圳，接下来还将在上海、广州等城市展开全国性快速布局。德商资本主要专注于移动互联网、智能硬件、大健康、现代服务业、文化娱乐、旅游、体育等领域。德商资本将持续寻找全球优质项目，致力于用投资改变世界，与优质创业者共同创造未来。
			</span>
		</div>
	</div>
</div>
<div id="ds-part2" class="ds-part">
	<div class="am-sec-content"></div>
</div>
<div id="ds-part3" class="ds-part">
	<div class="am-thr-content">
		<i class="arrow-up"></i>
		<div class="am-thr-content-title">
			<em class="am-thr-content-cht">团队介绍</em>
			<em class="am-thr-content-ent">OUR TEAM</em>
		</div>
		<div class="am-thr-content-logo"></div>
		<div class="am-thr-content-desc">
			德商资本团队数十人，广聚业界高级金融、法律、投资专家等精英人士，在行业分析、投资管理、产业经营、IPO等方面，均有深刻的认识和理解，具备丰富的实践操作经验。团队一直以来本着最诚信、最专业、和最高效的服务精神及务实的作风，致力于用投资改变世界，与优质创业者共同创造未来。
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


<script src="/deshang/trunk/themes/simplebootx/Public/js/slippry.min.js"></script>
<?php echo hook('footer_end');?>
</body>
</html>