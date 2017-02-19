<?php

namespace app\controllers;

use yii\web\Controller;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\data\Pagination;
class NewsController extends Controller
{
     public function actionIndex()
    {
        $this->layout = 'home';
        $news = News::items();
        $page = News::pagination();
        $page2 = Page::get('news');
        return $this->render('index',[
            'news'=>$news,
            'page'=>$page,
            'page2'=>$page2                           ]);
    }
    public function actionNew($slug)
    {
        $this->layout = 'home';
        $new = News::get($slug);
        $page = Page::get('news');

        return $this->render('new',
            [
                'new' => $new,
                'page'=>$page,

            ]);
    }
}