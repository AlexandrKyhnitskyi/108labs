<?php

namespace app\controllers;

use yii\web\Controller;
use yii\easyii\modules\page\api\Page;
use app\modules\about\api\About;

class AboutController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'home';
        $developer = About::items();
        $page = Page::get('about');
        return $this->render('index',
            ['developer'=>$developer,
             'page' => $page,  
            ]);
    }
}