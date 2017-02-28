<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($site_name); ?> 合作伙伴</title>
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
	<div id="partner-banner" class="common-banner">
		<div class="common-banner-icon"></div>
	</div>
	<div class="common-title-container">
		<div class="ds-title-div">
			<em class="common-title-icon"></em>
			<span style="margin-left:18px;">合作伙伴</span>
		</div>
	</div>
	<div class="partner-wrapper">
		<div id="jcc" class="partner-item" >
			<div class="partner-item-contaner">
				<div class="partner-img">
					<img src="/deshang/trunk/themes/simplebootx/Public/images/jcc.jpg" alt="合作伙伴logo" />
				</div>
				<div class="partner-detail">
					<div class="partner-desc">
						<h1 class="partner-title">
							<em class="partner-title-icon"></em>
							<span style="margin-left: 10px;">北京金长川</span>
						</h1>
						<span class="partner-content">北京金长川资本管理有限公司（GGR）成立于2008年9月，是专业从事私募股权投资（PE）和投资银行服务的创新企业金融整体解决方案服务商。公司总部设在北京，目前在成都、厦门、广州、深圳、重庆设有子公司。
						金长川资本为中国处于快速成长的创新型企业提供包括私募、上市、并购等资本市场服务。公司以投资银行业务为基础，以私募股权投资业务为核心，目前管理着3只总规模30亿元的私募股权投资基金，主要投资于节能环保、新材料、移动互联网020等新兴领域的创新企业以及传统行业的商业模式创新企业，重点专注于企业新三板挂牌前的投资。
						金长川资本拥有专业的管理团队、独特的商业模式、丰富的资本运作经验，以及良好的资源整合平台，与创新企业共同成长。
						</span>
					</div>
				</div>
			</div>
		</div>
		<div id="lgdc" class="partner-item" >
			<div class="partner-item-contaner">
				<div class="partner-img">
					<img src="/deshang/trunk/themes/simplebootx/Public/images/lgdc.jpg" alt="合作伙伴logo" />
				</div>
				<div class="partner-detail">
					<div class="partner-desc">
						<h1 class="partner-title">
							<em class="partner-title-icon"></em>
							<span style="margin-left: 10px;">蓝光地产</span>
						</h1>
						<span class="partner-content">
						四川蓝光发展股份有限公司（以下简称蓝光发展，股票代码：600466，SH）成立于1990年，2015年4月16日在上海证券交易所正式挂牌上市，系蓝光投资控股集团有限公司旗下上市公司。蓝光发展，专注于人类生活的核心需求，提供从生活到生命的创新解决方案，为大众创造幸福生活。
						蓝光发展确立了以“人居蓝光”+“生命蓝光“为顶层设计的”双轮驱动”立体战略格局。其中以“房地产业+现代服务业”为传统核心产业构筑起“人居蓝光”的战略分支，以“3D生物打印+生物医药”为创新支柱产业构筑起“生命蓝光”战略分支。
						2015年，蓝光发展荣膺中国房地产公司品牌价值TOP11，并首度跻身中国十大最具投资价值上市房企。
						</span>
					</div>
				</div>
			</div>
		</div>
		<div id="scdx" class="partner-item" >
			<div class="partner-item-contaner">
				<div class="partner-img">
					<img src="/deshang/trunk/themes/simplebootx/Public/images/scdx.jpg" alt="合作伙伴logo" />
				</div>
				<div class="partner-detail">
					<div class="partner-desc">
						<h1 class="partner-title">
							<em class="partner-title-icon"></em>
							<span style="margin-left: 10px;">四川鼎祥</span>
						</h1>
						<span class="partner-content">
						四川鼎祥股权投资基金有限公司是国内起步早，管理规范的专业投资公司，注册资本金3亿元。公司聚焦泛娱乐、大健康、TMT、航空军工、智能制造等领域，秉承价值成长的投资理念，在较高安全边际的价值投资基础上，追求相对较高的收益。拥有专业投资人队伍十余人，先后投资并培育了迅游科技（300467）、明星电缆（603333）、储翰科技（831964）等优秀上市公司。 
目前基金直接投资成都狮之吼科技有限公司、成发泰达航空科技有限公司、储翰科技、澜起科技、天风证券、福建同元、峨眉文旅等项目。
						</span>
					</div>
				</div>
			</div>
		</div>
		<div id="sldc" class="partner-item" >
			<div class="partner-item-contaner">
				<div class="partner-img">
					<img src="/deshang/trunk/themes/simplebootx/Public/images/sanli.jpg" alt="合作伙伴logo" />
				</div>
				<div class="partner-detail">
					<div class="partner-desc">
						<h1 class="partner-title">
							<em class="partner-title-icon"></em>
							<span style="margin-left: 10px;">三利地产</span>
						</h1>
						<span class="partner-content">
						西藏三利投资有限公司成立于2006年6月，注册资本六亿元人民币，公司的经营范围包括航空、
						酒店、地产、矿产等方面投资。西藏三利投资有限公司本着"开拓进取、做大做强"的企业愿景
						，在多个领域积极扩展投资业务、在每个投资领域精益求精的同时，也以"建设西藏、发展西藏"
						为己任。
						</span>
					</div>
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