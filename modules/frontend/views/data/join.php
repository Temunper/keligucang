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
                    <li  class="nowaday">
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
		<img class="f-banner-bg" src="image/join-banner.jpg"/>
		<div class="bx">
			<img class="f-banner-text f-join-text wow zoomIn animated" src="image/join-banner-text.png"/>
		</div>
	</div>
	<!--banner结束-->
	
	<!--内容开始-->
	<div class="join-cont">
		<div class="join-bx">			
			<span>Merchants join</span>
			<p>招商加盟</p>
			<div class="join-list1">
				<div class="join-list1-title wow fadeInLeft animated" data-wow-delay="0.2s">
					<h2>01</h2>
					<p>项目优势</p>
					<span>Project Benefits</span>
				</div>
				<div class="join-list1-cont wow fadeInLeft animated" data-wow-delay="0.2s">
					<span>提取自然精华，多重功效合一</span>
					<p>颗粒归仓产品创新秘方，原料由健康天然植物萃取而成，不含任何油质成分，顺应自然生命法则，每一款产品都具有深层清理、调理油质、滋养肌肤等多层功效，专为油性皮肤而生。</p>
				    <span>完整产品线，更强市场竞争力</span>
				    <p>颗粒归仓现已规划出未来十年的产品线，十余款美容洗护产品已经进入研发生产阶段，后续将根据市场和消费者需求实时推出新品，保持品牌和门店竞争力，快速占领市场。</p>
				    <span>更大的利润空间</span>
				    <p>颗粒归仓门店总部一站式供货，货源稳定、底价供应，用最低的投资门槛，给加盟商留出最大的利润空间。</p>
				    <span>多向渠道营收</span>
				    <p>颗粒归仓加盟店“服务+产品”营销模式，用服务带给顾客舒适美容体验的同时，让门店拓客、锁客、留客的各个环节进行连带销售，创收更加多元。完善会员体系，既可快速留住老顾客，又能够诱导老顾客带进新顾客，让每一位会员都成为引流渠道，形成客流循环。</p>
				</div>
			</div>
			<div class="join-list2">
				<div class="join-list1-title wow fadeInLeft animated" data-wow-delay="0.2s">
					<h2>02</h2>
					<p>加盟扶持</p>
					<span>Joining support</span>
				</div>
				<div class="join-list2-cont">
					<ul>
						<li class="wow fadeInUp animated" data-wow-delay="0.2s">
							<h3>协助和评估选址</h3>
							<img src="image/join-ico01.png"/>
							<p>总部协助加盟商进行开店前的市场考察、店面评估选址、制定价格体系等，并提供可行性建议。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.3s">
							<h3>区域代理支持</h3>
							<img src="image/join-ico01.png"/>
							<p>区域代理店商，享有后期新品系列直接代理权，可投放至化妆品、美容院、护肤品店渠道</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.4s">
							<h3>品牌形象支持</h3>
							<img src="image/join-ico01.png"/>
							<p>总部提供全套品牌识别体系，以及产品形象画册、宣传单等规范化宣传物料，强化品牌辨识度。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.5s">
							<h3>客户资源开发</h3>
							<img src="image/join-ico01.png"/>
							<p>总部拥有大量的客户资源，建立了庞大的客户网络，可以有效的帮助加盟商开放客户，打通渠道，快速实现成交。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.6s">
							<h3>社会资源整合</h3>
							<img src="image/join-ico01.png"/>
							<p>总部依靠多年的经营，建立了牢固的社会关系，为加盟商提供资源整合的途径，多方共同发力，达成共赢。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.7s">
							<h3>专家在线指导</h3>
							<img src="image/join-ico01.png"/>
							<p>总部一流营销专家全天24小时在线，时刻为加盟商解决经营过程遇到的问题，提供经营建议。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.8s">
							<h3>区域保护支持</h3>
							<img src="image/join-ico01.png"/>
							<p>只要签约，就拥有区域独家代理权，真正无忧赚钱。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="0.9s">
							<h3>媒体广告支持</h3>
							<img src="image/join-ico01.png"/>
							<p>总部将投入大量资金，全年线上线下广告的投放都会在各大网络平台向全国宣传，打造强势品牌。</p>
						</li>
						<li class="wow fadeInUp animated" data-wow-delay="1s">
							<h3>活动促销支持</h3>
							<img src="image/join-ico01.png"/>
							<p>提供一站式开业活动营销方案以造势宣传快速将门店推出市场，实现快速盈利。</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="join-list3">
				<div class="join-list1-title">
					<h2>03</h2>
					<p>加盟流程</p>
					<span>Joining process</span>
				</div>
				<div class="join-list3-cont">
					<ul>
						<li class="wow fadeInRight animated" data-wow-delay="0.2s">
							<img src="image/join-lc01.jpg" />
							<div>
								<p>合作咨询</p>
								<span>了解行业前景</span>
								<span>获取合作资料</span>
								<span>加盟信息及申请表</span>
							</div>
						</li>
						<li class="wow fadeInLeft animated" data-wow-delay="0.3s">
							<img src="image/join-lc02.jpg" />
							<div>
								<p>申请加盟</p>
								<span>确认开发的城市</span>
								<span>市场开发计划书</span>
								<span>填写加盟申请资料</span>
								<span>准备相应的资金</span>
							</div>
						</li>
						<li class="wow fadeInRight animated" data-wow-delay="0.4s">
							<img src="image/join-lc03.jpg" />
							<div>
								<p>签约</p>
								<span>加盟申请资料审核</span>
								<span>加盟资质审核</span>
								<span>市场开发计划/审核</span>
								<span>双发签订加盟合同</span>
							</div>
						</li>
						<li class="wow fadeInLeft animated" data-wow-delay="0.5s">
							<img src="image/join-lc04.jpg" />
							<div>
								<p>市场开发</p>
								<span>专业店铺评估</span>
								<span>市场调研</span>
								<span>开店申请</span>
								<span>现场考察</span>
							</div>
						</li>
						<li class="wow fadeInRight animated" data-wow-delay="0.6s">
							<img src="image/join-lc05.jpg" />
							<div>
								<p>新店开业</p>
								<span>门店装修方案/施工</span>
								<span>员工招募、培训</span>
								<span>物料设备的配送</span>
								<span>物料设备的配送</span>
								<span>门店开业管理指导</span>
							</div>
						</li>
						<li class="wow fadeInLeft animated" data-wow-delay="0.7s">
							<img src="image/join-lc06.jpg" />
							<div>
								<p>持续经营</p>
								<span>门店日常管理</span>
								<span>总部定期回访</span>
								<span>长期培训指导</span>
								<span>新品更新/推广</span>
								<span>营销活动执行</span>
							</div>
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
        		<img src="image/join-btm-tit.png" />
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