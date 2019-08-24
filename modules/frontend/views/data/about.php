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
                    <li>
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
                    <li class="nowaday">
                        <a href="<?= Url::toRoute('about')?>">联系我们</a>
                    </li>
					</ul>
            </div>
        </div>
    </header>
    <!-- 头部导航结束 -->
	
	
    <!--banner开始-->
	<div class="f-banner">
		<img class="f-banner-bg" src="image/about-banner.jpg"/>
		<div class="bx">
			<img class="f-banner-text f-about-text wow zoomIn animated" src="image/about-banner-text.png"/>
		</div>
	</div>
	<!--banner结束-->
	
	<!--内容开始-->
	<div class="about-cont">
		<div class="about-bx">
			<div class="about-js wow fadeInLeft animated">
				<img src="image/about-title01.png" />
				<p><span>广州大仓美容咨询有限公司</span>一家专注于美容、护肤和洗护产品生产研发、销售营销于一体的美丽事业公司。经多年对护肤消费的市场洞察，针对油质性皮肤研发出不含油质的美容洗护产品——颗粒归仓，帮助广大消费者，改善油质分泌，让肌肤恢复水润嫩白。
					产品推出后迅速风靡市场，受到广大用户的喜爱，成为国内领先的不含油质的皮肤控油健康专家。</p>
				<div>
					<img src="image/about-img01.jpg" />
					<img src="image/about-img02.jpg" />
				</div>
			</div>
			<div class="about-wh">
				<img src="image/about-title02.png" />
				<div class="about-wh-cont">
					<img src="image/about-img03.jpg" class="wow fadeInLeft animated"/>
					<ul class="wow fadeInRight animated">
						<li><img src="image/about-ico01.png"/><p><span>定位</span>轻奢美容洗护，油质皮肤调理专家</p></li>
						<li><img src="image/about-ico02.png"/><p><span>愿景</span>成为中国美容洗护产品和体验门店领跑者</p></li>
						<li><img src="image/about-ico03.png"/><p><span>使命</span>为消费者解决油质困扰，为加盟商带去财富商机</p></li>
						<li><img src="image/about-ico04.png"/><p><span>宗旨</span>坚持用最好的产品、最好的服务、最好的信誉， 为合作伙伴和消费者带来最好的效果</p></li>
					</ul>
				</div>
			</div>
			<div class="about-zz wow fadeInRight animated">
				<img src="image/about-title03.png" />
				<p>用最舒适的环境让顾客宾至如归，用最好的态度和心情迎接每一位顾客，用自己的专业解决每一位顾客的问题和困扰......用服务赋予产品最大的价值！</p>
				<div>
					<img src="image/about-img04.jpg" />
				</div>
			</div>
		</div>
	</div>
	<!--内容结束-->
	
	
	<!-- 底部开始 -->
    <footer>
        <div class="footer">
        	<div class="footer-x-bg wow fadeInDown animated">
        		<img src="image/about-btm-tit.png" />
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