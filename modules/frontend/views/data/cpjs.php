<?php

use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>颗粒归仓</title>
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" href="css/animate.css" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/swiper.min.js"></script>
		<script type="text/javascript" src="js/wow.min.js"></script>
		<script>
			if(!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
				new WOW().init();
			};
		</script>
	</head>

	<body>
		
	<!-- 头部导航开始 -->
    <header>
        <div class="header wrap clearfix">
            <div class="header-l fl">
                <img src="image/logo.png" height="49" width="205" alt="" />
            </div>
            <div class="header-r fr">
                <ul>
                    <li class="nowaday">
                        <a href="<?= Url::toRoute('index')?>">首页</a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute('company')?>">企业介绍</a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute('product')?>">产品介绍</a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute('tyg')?>">美容洗护体验馆</a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute('join')?>">招商加盟</a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute('news')?>">行业资讯</a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute('about')?>">联系我们</a>
                    </li>
					</ul>
            </div>
        </div>
    </header>
    <!-- 头部导航结束 -->
	
	
    <!--banner开始-->
	<div class="f-banner">
		<img class="f-banner-bg" src="image/cpjs-banner.jpg"/>
		<div class="bx">
			<img class="f-banner-text f-cpjs-text wow zoomIn animated" src="image/cpjs-banner-text.png"/>
		</div>
	</div>
	<!--banner结束-->
	
	<!--内容开始-->
	<div class="cpjs-cont">
		<img src="image/cpjs-title.png" />
		<ul class="cpjs-list">
			<li class="cpjs-list-l"><img src="image/cpjs-cp01.jpg"/></li>
			<li class="cpjs-list-l"><img src="image/cpjs-cp02.jpg"/></li>
			<li class="cpjs-list-l"><img src="image/cpjs-cp03.jpg"/></li>
		</ul>
		<div class="cpjs-listcont cpjs-listcont-s">
			<div class="cpjs-listcont-c">
				<img src="image/cpjs-cpdt01.jpg" />
				<div>
					<p>平衡养润调理泥膏</p>
					<h2>BALANCED MOISTURIZING MUD</h2>
					<ul>
						<li>创新质地</li>
						<li>深度清洁</li>
						<li>调理肌底</li>
					</ul>
					<h3>创新洁净质地，轻柔多泡，洗护纯净柔和，不伤肌肤</h3>
					<h3>绿色不含硅油成分，多泡不刺激，洗护更健康</h3>
					<h3>丰盈滋养头皮，调理头皮油质分泌，让秀发柔顺滑爽</h3>
				</div>
			</div>
		</div>
		<div class="cpjs-listcont ">
			<div class="cpjs-listcont-c">
				<img src="image/cpjs-cpdt02.jpg" />
				<div>
					<p>洗护套装</p>
					<h2>WASHING SUIT</h2>
					<ul>
						<li>不含硅油</li>
						<li>草本精华</li>
						<li>强润秀发</li>
					</ul>
					<h3>提炼天然草本精华，深入修复头皮，焕发秀发强韧光泽</h3>
					<h3>绿色不含硅油成分，多泡不刺激，洗护更健康</h3>
					<h3>丰盈滋养头皮，调理头皮油质分泌，让秀发柔顺滑爽</h3>
				</div>
			</div>
		</div>
		<div class="cpjs-listcont ">
			<div class="cpjs-listcont-c">
				<img src="image/cpjs-cpdt03.jpg" />
				<div>
					<p>红玫瑰中合油质补水保湿润肤水</p>
					<h2>RED ROSE HYDRATING WATER</h2>
					<ul>
						<li>玫瑰精华</li>
						<li>滋润补水</li>
						<li>中和油质</li>
					</ul>
					<h3>清澈剔透质地，快速吸收不黏腻，清润保湿的同时带来更多舒缓呵护</h3>
					<h3>饱含高保湿玫瑰精萃，深潜入肌，层层输送玫瑰水润能量</h3>
					<h3>天然纯净，中和皮肤油质的同时，促进皮肤滋润吸收，保持肌肤水润</h3>
				</div>
			</div>
		</div>
	</div>
	<!--内容结束-->
	

	
	
	<!-- 底部开始 -->
    <footer>
        <div class="footer">
        	<div class="footer-x-bg wow fadeInDown animated">
        		<img src="image/cpjs-btm-tit.png" />
        	</div>
        	<ul>
        		<li>
        			<img src="image/bottom-logo.png" />
        		</li>
        		<li>
        			<img src="image/bottom-ico-01.png" />
        			<div>
        				<p>全国加盟热线</p>
        				<p> 400-851-3378</p>
        			</div>
        		</li>
        		<li>
        			<img src="image/bottom-ico-02.png" />
        			<div>
        				<h2>公司名称</h2>
        				<h2>广州大仓美容咨询有限公司</h2>
        			</div>
        		</li>
        		<li>
        			<img src="image/bottom-ico-03.png" />
        			<div>
        				<h2>总部地址</h2>
        				<h2>广州番禺区大石街河村村</br>工业二路5号1栋1层113-116单元</h2>
        			</div>
        		</li>
        	</ul>
        </div>
        <div class="footer-bq">颗粒归仓有限公司中国•杭州西湖区 西溪路588号珀莱雅大楼版权所有浙ICP备09024834号-1浙公网安备 33010602001940号</div>
    </footer>
    <!-- 底部结束 -->
    
    <script>
    $(function () {
      
      $(".cpjs-list-l").mouseenter(function () {
        var idx = $(this).index();
        $(".cpjs-listcont").eq(idx).addClass("cpjs-listcont-s").siblings().removeClass("cpjs-listcont-s");
      });
      
    });
  </script>

	</body>

</html>