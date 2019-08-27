<?php

use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title><?= $model->title ?></title>
    <meta name="keywords" content="<?= $model->keywords ?>">
    <meta name="description" content="<?= $model->description ?>">
    <link rel="stylesheet" type="text/css" href="/web/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/web/css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="/web/css/index.css"/>
    <link rel="stylesheet" href="/web/css/animate.css"/>
    <script type="text/javascript" src="/web/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/web/js/swiper.min.js"></script>
    <script type="text/javascript" src="/web/js/wow.min.js"></script>
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
            <img src="/web/image/logo.png" height="49" width="205" alt=""/>
        </div>
        <div class="header-r fr">
            <ul>
                <li>
                    <a href="<?= Url::toRoute('index') ?>">首页</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('company') ?>">企业介绍</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('product') ?>">产品介绍</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('tyg') ?>">美容洗护体验馆</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('join') ?>">招商加盟</a>
                </li>
                <li class="nowaday">
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
    <img class="f-banner-bg" src="/web/image/news-banner.jpg"/>
    <div class="bx">
        <img class="f-banner-text f-news-text wow zoomIn animated" src="/web/image/news-banner-text.png"/>
    </div>
</div>
<!--banner结束-->

<!--新闻内容开始-->
<div class="newscont-c">
    <div class="bx">
        <div class="newscont-head">
            <h2><?= $model->title ?></h2>
            <p>time:<?= $model->year ?></p>
        </div>
        <div class="news-xq">
            <?= $model->content ?>
        </div>
        <div class="news-btn">
            <a href="<?= Url::toRoute(['change', 'next' => -1, 'id' => $model->id]) ?>">上一篇</a>
            <a href="<?= Url::toRoute(['change', 'next' => 1, 'id' => $model->id]) ?>">下一篇</a>
        </div>
    </div>
</div>
<!--新闻内容结束-->


<!-- 底部开始 -->
<footer>
    <div class="footer">
        <div class="footer-x-bg wow fadeInDown animated">
            <img src="/web/image/news-btm-tit.png"/>
        </div>
        <ul>
            <li>
                <img src="/web/image/bottom-logo.png"/>
            </li>
            <li>
                <img src="/web/image/bottom-ico-01.png"/>
                <div>
                    <p>全国加盟热线</p>
                    <p> 400-851-3378</p>
                </div>
            </li>
            <li>
                <img src="/web/image/bottom-ico-02.png"/>
                <div>
                    <h2>公司名称</h2>
                    <h2>广州大仓美容咨询有限公司</h2>
                </div>
            </li>
            <li>
                <img src="/web/image/bottom-ico-03.png"/>
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
<script>
    $(function () {
        var msg = "<?= $msg?>";
        if (msg != '') {
            alert(msg);
        }
    })
</script>
</html>