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
		<img class="f-banner-bg" src="image/contact-banner.jpg"/>
		<div class="bx">
			<img class="f-banner-text f-contact-text wow zoomIn animated" src="image/contact-banner-text.png"/>
		</div>
	</div>
	<!--banner结束-->
	
	<!--公司地址开始-->
	<div class="contact-dz">
		<div class="bx">
			<img src="image/contact-dz.jpg">
		</div>
	</div>
	<!--公司地址开始-->
	
	<!--地图开始-->
	<div class="contact-dt">
		<iframe src="<?= Url::toRoute('map')?>" width="100%" height="640px" frameborder="0" scrolling="no"></iframe>
	</div>
	<!--地图结束-->
	
	<!-- 底部开始 -->
    <footer>
        <div class="footer">
        	<div class="footer-x-bg wow fadeInDown animated">
        		<img src="image/contact-btm-tit.png" />
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
    
    

	</body>

</html>