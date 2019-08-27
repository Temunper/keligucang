<?php


use yii\helpers\Url; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>颗粒归仓</title>
		<link rel="stylesheet" type="text/css" href="/web/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/web/css/swiper.min.css" />
		<link rel="stylesheet" type="text/css" href="/web/css/index.css" />
		<link rel="stylesheet" href="/web/css/animate.css" />
		<script type="text/javascript" src="/web/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="/web/js/swiper.min.js"></script>
		<script type="text/javascript" src="/web/js/wow.min.js"></script>
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
                <img src="/web/image/logo.png" height="49" width="205" alt="" />
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
	<div class="index-banner">
		<div class="swiper-container swiper-list1">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="/web/image/index-banner-01.jpg" alt="" /></div>
				<div class="swiper-slide"><img src="/web/image/index-banner-02.jpg" alt="" /></div>
				<div class="swiper-slide"><img src="/web/image/index-banner-03.jpg" alt="" /></div>
			</div>
			<div class="swiper-pagination swiper-p1"></div>
		</div>
	</div>
	<!--banner结束-->
	
	<!--产品轮播1开始-->
	<div class="index-list">
		<div class="bx wow fadeInUp animated">
			<img src="/web/image/index-title01.png" />
		</div>
		<div class="index-seiper2">
			<div class="swiper-container swiper-list2">
			<div class="swiper-wrapper" style="width: 1300px; ">
				<div class="swiper-slide">
					<div class="index-list-cont">
						<img class="index-list-t" src="/web/image/index-list-t01.jpg"/>
						<img src="/web/image/index-list-i01.jpg"/>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="index-list-cont">
						<img src="/web/image/index-list-i02.jpg"/>
						<img class="index-list-t" src="/web/image/index-list-t02.jpg"/>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="index-list-cont">
						<img class="index-list-t" src="/web/image/index-list-t03.jpg"/>
						<img src="/web/image/index-list-i03.jpg"/>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="index-list-cont">
						<img src="/web/image/index-list-i04.jpg"/>
						<img class="index-list-t" src="/web/image/index-list-t04.jpg"/>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="index-list-cont">
						<img class="index-list-t" src="/web/image/index-list-t05.jpg"/>
						<img src="/web/image/index-list-i05.jpg"/>
					</div>
				</div>
			</div>
			<div class="swiper-button-next swiper-btnnext2"></div>
            <div class="swiper-button-prev swiper-btnprev2"></div>
		</div>
		</div>
		
	</div>
	<!--产品轮播1结束-->
	
	<!--背景开始-->
	<div class="index-bg"></div>
	<!--背景结束-->
	
	<!--产品轮播2开始-->
	<div class="index-cp">
		<div class="bx">
			<p>呵护身体的每一寸肌肤</p>
			<p>让亿万油质皮肤困扰者唤醒光泽</p>
			<span></span>
		</div>

	    <div class="index-list3">
		    <div class="swiper-container swiper-list3">
			    <div class="swiper-wrapper">
				    <div class="swiper-slide"><img src="/web/image/index-cplb01.jpg" alt="" /></div>
				    <div class="swiper-slide"><img src="/web/image/index-cplb02.jpg" alt="" /></div>
				    <div class="swiper-slide"><img src="/web/image/index-cplb03.jpg" alt="" /></div>
			    </div>
			    <div class="swiper-button-next swiper-btnnext3"></div>
                <div class="swiper-button-prev swiper-btnprev3"></div>
		    </div>
	    </div>

	</div>
	<!--产品轮播2结束-->
	
	
	<!--产品展示3开始-->
	<div class="index-cpzs">
		<div class="bx">
			<img src="/web/image/index-cp-title.png" />
			<ul class="picList">
				<li class="ind_pro_box_hover">
					<div class="img_box">
						<img src="/web/image/index-cp-01.jpg"/>
					</div>
					<div class="info">
						<div class="title">美容洗护服务</div>
						<div class="des"><p>BEAUTY CARE SERVICE</p><span></span>基于产品，打造专业化定制化美容洗护服务。专业技师以专业手法带给消费者最好的产品体验效果，以服务联动带货，用服务最大化赋值产品。</div>
					</div>
				</li>
				<li class="ind_pro_box_hover">
					<div class="img_box">
						<img src="/web/image/index-cp-02.jpg"/>
					</div>
					<div class="info">
						<div class="title">品质产品专卖</div>
						<div class="des"><p>QUALITY PRODUCT MONOPOLY</p><span></span>差异化产品定位，优质的产品功效，独特的产品配方，让颗粒归仓每一款产品都能风靡市场，只需一次购买便能彻底俘获顾客。</div>
					</div>
				</li>
				<li class="ind_pro_box_hover">
					<div class="img_box">
						<img src="/web/image/index-cp-03.jpg"/>
					</div>
					<div class="info">
						<div class="title">会员定向纳客</div>
						<div class="des"><p>MEMBER ORIENTATION</p><span></span>完善的会员管理和福利体系，快速积累忠实会员，让每一位会员都成为门店纳客渠道。新成老，老带新，门店客流循环不断。</div>
					</div>
				</li>
			</ul>

		</div>
	</div>
	<!--产品展示3结束-->
	
	
	
	
	<!-- 底部开始 -->
    <footer>
        <div class="footer">
        	<div class="footer-x-bg wow fadeInDown animated">
        		<img src="/web/image/index-btm-tit.png" />
        	</div>
        	<ul>
        		<li>
        			<img src="/web/image/bottom-logo.png" />
        		</li>
        		<li>
        			<img src="/web/image/bottom-ico-01.png" />
        			<div>
        				<p>全国加盟热线</p>
        				<p> 400-851-3378</p>
        			</div>
        		</li>
        		<li>
        			<img src="/web/image/bottom-ico-02.png" />
        			<div>
        				<h2>公司名称</h2>
        				<h2>广州大仓美容咨询有限公司</h2>
        			</div>
        		</li>
        		<li>
        			<img src="/web/image/bottom-ico-03.png" />
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
	//轮播
	    var swiper1 = new Swiper('.swiper-list1', {
	    	effect : 'fade',
            centeredSlides: true,
            loop : true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        });
        
        var swiper2 = new Swiper('.swiper-list2', {
        	slidesPerView: 4,
//	    	effect : 'fade',
            slidesPerGroup: 1,
//          centeredSlides: true,
            loop : true,
            loopFillGroupWithBlank: true,
            centerInsufficientSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-btnnext2',
            prevEl: '.swiper-btnprev2',
        },
        });
        
        
        var swiper3 = new Swiper('.swiper-list3', {
	    	effect : 'fade',
            centeredSlides: true,
            loop : true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-btnnext3',
            prevEl: '.swiper-btnprev3',
        },
        });



    </script>
    
    
    
	</body>
</html>