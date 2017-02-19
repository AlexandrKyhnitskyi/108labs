<?php

namespace app\controllers;

use app\modules\portfolio\api\News;
use app\modules\portfolio\api\NewsObject;
use yii\easyii\models\TagAssign;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use app\modules\portfolio\models;
use yii\easyii\models\Tag;
use yii\easyii\modules\page\api\Page;
use Yii;

class PortfolioController extends Controller
{

        public function actionIndex()
    {
        $this->layout = 'home';
        $tags = Tag::find()->all();
        if(Yii::$app->request->isAjax){
            $name = Yii::$app->request->post('tags');
            $projects = News::items(['tags' => $name]);
            $page = News::pagination();

            return $this->renderPartial('index', [
                'projects' =>$projects,
                'page' => $page
            ]);

        }
        $projects = News::items();
        $page = News::pagination();
        $page2 = Page::get('portfolio');
        return $this->render('index',
            [
             'tags' => $tags,
             'projects' =>$projects,
             'page' => $page,
             'page2' => $page2
            ]);
    }
    public function actionProject($slug)
    {
        $this->layout = 'home';
        $project = News::get($slug);
        $page = Page::get('news');

        return $this->render('project',
            [
                'project' => $project,
                'page' => $page,

            ]);
    }
}