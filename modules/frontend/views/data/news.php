<?php

use app\components\LinkPager;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>颗粒归仓</title>
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

<!--内容开始-->
<div class="news-cont">
    <div class="bx">
        <div class="news-head">
            <div class="news-head-l">
                <img src="/web/image/news-head-text.png"/>
                <ul class="news-list">
                    <li class="news-list-l news-list-s">2019</li>
                    <li class="news-list-l">2018</li>
                    <li class="news-list-l">2017</li>
                    <li class="news-list-l">2016</li>
                </ul>
            </div>
            <img src="/web/image/news-head-img.jpg"/>
        </div>
        <div class="news-listcont news-listcont-s">
            <div class="news-listcont-c">
                <ul>
                    <?php $i = 1 ?>
                    <?php foreach ($model_2019
                                   as $item) { ?>
                        <?php if ($i % 2 == 0) { ?>
                            <li class="news-list2">
                        <?php } else { ?>
                            <li>
                        <?php } ?>
                        <img src="<?= $item->image ?>"/>
                        <a href="<?= Url::toRoute(['newscontent', 'id' => $item->id]) ?>">
                            <h2><?= $item->title ?></h2>
                            <span><?= date('j F Y',strtotime($item->year))?></span>
                            <i></i>
                            <p><?= $item->brief ?></p>
                            <h3>查看详情</br>MORE</h3>
                        </a>
                        </li>

                        <?php $i++;
                    } ?>
                </ul>
            </div>

            <?= LinkPager::widget([
                'pagination' => $pages_2019,
                'nextPageLabel' => '下一页', // 修改上下页按钮
                'prevPageLabel' => '上一页',
//                        'nextPageLabel' => true, // 不显示上下页按钮
                //'prevPageLabel' => false,
                'firstPageLabel' => '首页', // 设置首页尾页按钮
                'lastPageLabel' => '末页',
                'hideOnSinglePage' => true, // 当你数据不足2页时,分页默认不显示,但你可以让他显示出来
                'maxButtonCount' => 4,    // 分页 页码默认显示10页,不过你可以自由设置,比如显示5页
                'options' => ['class' => 'news-list-pag'], // 可以给分页添加class 然你你想换个颜色,居个中啊
            ]); ?>

        </div>

        <div class="news-listcont">
            <div class="news-listcont-c">
                <ul>
                    <?php $i = 1 ?>
                    <?php foreach ($model_2018

                                   as $item) { ?>
                        <?php if ($i % 2 == 0) { ?>
                            <li class="news-list2">
                        <?php } else { ?>
                            <li>
                        <?php } ?>
                        <img src="<?= $item->image ?>"/>
                        <a href="<?= Url::toRoute(['newscontent', 'id' => $item->id]) ?>">
                            <h2><?= $item->title ?></h2>
                            <span><?= date('j F Y',strtotime($item->year))?></span>
                            <i></i>
                            <p><?= $item->brief ?></p>
                            <h3>查看详情</br>MORE</h3>
                        </a>
                        </li>

                        <?php $i++;
                    } ?>
                </ul>
            </div>
            <?= LinkPager::widget([
                'pagination' => $pages_2018,
                'nextPageLabel' => '下一页', // 修改上下页按钮
                'prevPageLabel' => '上一页',
//                        'nextPageLabel' => true, // 不显示上下页按钮
                //'prevPageLabel' => false,
                'firstPageLabel' => '首页', // 设置首页尾页按钮
                'lastPageLabel' => '末页',
                'hideOnSinglePage' => true, // 当你数据不足2页时,分页默认不显示,但你可以让他显示出来
                'maxButtonCount' => 4,    // 分页 页码默认显示10页,不过你可以自由设置,比如显示5页
                'options' => ['class' => 'news-list-pag'], // 可以给分页添加class 然你你想换个颜色,居个中啊
            ]); ?>
        </div>
        <div class="news-listcont">
            <div class="news-listcont-c">
                <ul>
                    <?php $i = 1 ?>
                    <?php foreach ($model_2017

                                   as $item) { ?>
                        <?php if ($i % 2 == 0) { ?>
                            <li class="news-list2">
                        <?php } else { ?>
                            <li>
                        <?php } ?>
                        <img src="<?= $item->image ?>"/>
                        <a href="<?= Url::toRoute(['newscontent', 'id' => $item->id]) ?>">
                            <h2><?= $item->title ?></h2>
                            <span><?= date('j F Y',strtotime($item->year))?></span>
                            <i></i>
                            <p><?= $item->brief ?></p>
                            <h3>查看详情</br>MORE</h3>
                        </a>
                        </li>

                        <?php $i++;
                    } ?>
                </ul>
            </div>
            <?= LinkPager::widget([
                'pagination' => $pages_2017,
                'nextPageLabel' => '下一页', // 修改上下页按钮
                'prevPageLabel' => '上一页',
//                        'nextPageLabel' => true, // 不显示上下页按钮
                //'prevPageLabel' => false,
                'firstPageLabel' => '首页', // 设置首页尾页按钮
                'lastPageLabel' => '末页',
                'hideOnSinglePage' => true, // 当你数据不足2页时,分页默认不显示,但你可以让他显示出来
                'maxButtonCount' => 4,    // 分页 页码默认显示10页,不过你可以自由设置,比如显示5页
                'options' => ['class' => 'news-list-pag'], // 可以给分页添加class 然你你想换个颜色,居个中啊
            ]); ?>
        </div>
        <div class="news-listcont">
            <div class="news-listcont-c">
                <ul>
                    <?php $i = 1 ?>
                    <?php foreach ($model_2016

                                   as $item) { ?>
                        <?php if ($i % 2 == 0) { ?>
                            <li class="news-list2">
                        <?php } else { ?>
                            <li>
                        <?php } ?>
                        <img src="<?= $item->image ?>"/>
                        <a href="<?= Url::toRoute(['newscontent', 'id' => $item->id]) ?>">
                            <h2><?= $item->title ?></h2>
                            <span><?= date('j F Y',strtotime($item->year))?></span>
                            <i></i>
                            <p><?= $item->brief ?></p>
                            <h3>查看详情</br>MORE</h3>
                        </a>
                        </li>
                        <?php $i++;
                    } ?>
                </ul>
            </div>
            <?= LinkPager::widget([
                'pagination' => $pages_2016,
                'nextPageLabel' => '下一页', // 修改上下页按钮
                'prevPageLabel' => '上一页',
//                        'nextPageLabel' => true, // 不显示上下页按钮
                //'prevPageLabel' => false,
                'firstPageLabel' => '首页', // 设置首页尾页按钮
                'lastPageLabel' => '末页',
                'hideOnSinglePage' => true, // 当你数据不足2页时,分页默认不显示,但你可以让他显示出来
                'maxButtonCount' => 4,    // 分页 页码默认显示10页,不过你可以自由设置,比如显示5页
                'options' => ['class' => 'news-list-pag'], // 可以给分页添加class 然你你想换个颜色,居个中啊
            ]); ?>
        </div>
    </div>
</div>
<!--内容结束-->


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

<script>
    $(function () {

        $(".news-list-l").mouseenter(function () {
            $(this).addClass("news-list-s").siblings().removeClass("news-list-s");
            var idx = $(this).index();
            $(".news-listcont").eq(idx).addClass("news-listcont-s").siblings().removeClass("news-listcont-s");
        });
        $(function () {
            $(".active").children().addClass("news-list-xz")
        })
    });
</script>

</body>

</html>