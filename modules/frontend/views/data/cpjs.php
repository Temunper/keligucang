<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>颗粒归仓</title>
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
        if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
            new WOW().init();
        }
        ;
    </script>
</head>

<body>

<!-- 头部导航开始 -->
<header>
    <div class="header wrap clearfix">
        <div class="header-l fl">
            <img src="image/logo.png" height="49" width="205" alt=""/>
        </div>
        <div class="header-r fr">
            <ul>
                <li>
                    <a href="<?= Url::toRoute('index') ?>">首页</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('company') ?>">企业介绍</a>
                </li>
                <li class="nowaday">
                    <a href="<?= Url::toRoute('product') ?>">产品介绍</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('tyg') ?>">美容洗护体验馆</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('join') ?>">招商加盟</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('news') ?>">行业资讯</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('about') ?>">联系我们</a>
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
    <img src="image/cpjs-title.png"/>
    <ul class="cpjs-list">
        <?php foreach ($model

                       as $value) { ?>
            <li class="cpjs-list-l"><img src="<?= $value->image ?>" alt="<?= $value->name ?>"/></li>
        <?php } ?>
    </ul>
    <?php $i = 1; ?>
    <?php foreach ($model

    as $value) { ?>

    <?php if ($i = 1) { ?>
    <div class="cpjs-listcont cpjs-listcont-s">
        <?php } else { ?>
        <div class="cpjs-listcont">
            <?php } ?>
            <div class="cpjs-listcont-c">
                <img src="<?= $value->dt_image ?>" alt="<?= $value->name ?>"/>
                <div>
                    <p><?= $value->name ?></p>
                    <h2><?= $value->name_En ?></h2>
                    <ul>
                        <li><?= $value->advantage_1 ?></li>
                        <li><?= $value->advantage_2 ?></li>
                        <li><?= $value->advantage_3 ?></li>
                    </ul>
                    <h3><?= $value->description_1 ?></h3>
                    <h3><?= $value->description_2 ?></h3>
                    <h3><?= $value->description_3 ?></h3>
                </div>
            </div>
        </div>

        <?php $i++; ?>
        <?php } ?>
    </div>
    <!--内容结束-->


    <!-- 底部开始 -->
    <footer>
        <div class="footer">
            <div class="footer-x-bg wow fadeInDown animated">
                <img src="image/cpjs-btm-tit.png"/>
            </div>
            <ul>
                <li>
                    <img src="image/bottom-logo.png"/>
                </li>
                <li>
                    <img src="image/bottom-ico-01.png"/>
                    <div>
                        <p>全国加盟热线</p>
                        <p> 400-851-3378</p>
                    </div>
                </li>
                <li>
                    <img src="image/bottom-ico-02.png"/>
                    <div>
                        <h2>公司名称</h2>
                        <h2>广州大仓美容咨询有限公司</h2>
                    </div>
                </li>
                <li>
                    <img src="image/bottom-ico-03.png"/>
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