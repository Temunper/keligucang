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
                    <li  class="nowaday">
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
		<img class="f-banner-bg" src="image/tyg-banner.jpg"/>
		<div class="bx">
			<img class="f-banner-text f-tyg-text wow zoomIn animated" src="image/tyg-banner-text.png"/>
		</div>
	</div>
	<!--banner结束-->
	
	<!--内容开始-->
	<div class="tyg-cont">
		<div class="tyg-bx">
			<div class="tyg-list1 wow zoomIn animated">
				<img src="image/tyg-tit01.png" />
				<div>
					<img src="image/tyg-img01.jpg" />
					<img src="image/tyg-img02.jpg" />
					<img src="image/tyg-img03.jpg" />
				</div>
			</div>
			<div class="tyg-list2">
				<img src="image/tyg-tit02.png" />
				<div class="tyg-list2-cont wow fadeInLeft animated">
					<img src="image/tyg-list01.jpg" />
					<ul>
						<li>01</li>
						<li>
							<h2>一流环境</h2>
							<span>FIRST CLASS ENVIRONMENT</span>
							<p>颗粒归仓美容洗护体验馆</p>
							<p>采用清新时尚的门店设计和品牌VI识别体系</p>
							<p>带给顾客更加轻松愉快的体验</p>
						</li>						
					</ul>
				</div>
				<div class="tyg-list2-cont  tyg-list2-cont2 wow fadeInRight animated">
					<img src="image/tyg-list02.jpg" />
					<ul >
						<li>02</li>
						<li>
							<h2>一流设备</h2>
							<span>FIRST CLASS EQUIPMENT</span>
							<p>颗粒归仓美容洗护体验馆配备专业美容师</p>
							<p>配置专业美容床、洗漱台等体验设备</p>
							<p>带给顾客更加轻松愉快的体验</p>
						</li>						
					</ul>
				</div>
				<div class="tyg-list2-cont wow fadeInLeft animated">
					<img src="image/tyg-list03.jpg" />
					<ul>
						<li>03</li>
						<li>
							<h2>一流服务</h2>
							<span>FIRST CLASS SERVICE</span>
							<p>颗粒归仓美容洗护体验馆配备专业美容师</p>
							<p>25 分钟专业手法，全身肌肤美容洗护一站式的体验服务</p>
							<p>带给顾客营造最舒适的体验感</p>
							<p>用服务赋予产品最大价值</p>
						</li>						
					</ul>
				</div>
				<div class="tyg-list2-cont tyg-list2-cont2 wow fadeInRight animated">
					<img src="image/tyg-list04.jpg" />
					<ul >
						<li>04</li>
						<li>
							<h2>大众消费</h2>
							<span>MASS CONSUMPTION</span>
							<p>门店服务收费实惠</p>
							<p>主打低消费高体验</p>
							<p>用最大的利润空间，容纳更广客源</p>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--内容结束-->
	
	
	<!-- 底部开始 -->
    <footer>
        <div class="footer">
        	<div class="footer-x-bg wow fadeInDown animated">
        		<img src="image/tyg-btm-tit.png" />
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