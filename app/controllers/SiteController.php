<?php

namespace app\controllers;

use yii\web\Controller;
use yii\easyii\modules\page\api\Page;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $page = Page::get('news');
        return $this->render('index',[
            'page'=>$page,
                           ]);
    }
}