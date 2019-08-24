<?php
/**
 * Created by PhpStorm.
 * User: TEM
 * Date: 2019/8/24
 * Time: 17:56
 */

namespace app\modules\frontend\controllers;


use yii\web\Controller;

class DataController extends Controller
{
    //首页
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    //企业介绍
    public function actionCompany()
    {
        $this->layout = false;
        return $this->render('contact');
    }

    //产品介绍
    public function actionsProduct()
    {
        $this->layout = false;
        return $this->render('cpjs');
    }

    //美容洗护体验馆
    public function actionTyg()
    {
        $this->layout = false;
        return $this->render('tyg');
    }

    //招商加盟
    public function actionJoin()
    {
        $this->layout = false;
        return $this->render('join');
    }

    //新闻
    public function actionNews()
    {
        $this->layout = false;
        return $this->render('news');
    }

    //联系我们
    public function actionAbout()
    {
        $this->layout = false;
        return $this->render('about');
    }

    public function actionMap()
    {
        $this->layout = false;
        return $this->render('map');
    }
}