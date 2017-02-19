<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Feedback;
use Yii;
use yii\easyii\modules\page\api\Page;
use yii\web\Request;

class ContactsController extends Controller
{

    public function actionIndex()
    {
        $modelFeedback = new Feedback();
        $this->layout = 'home';
        $page = Page::get('contacts');
        return $this->render('index', [
            'modelFeedback' => $modelFeedback,
            'page' => $page,
        ]);
    }

    public function actionSave()
    {
        $modelFeedback = new Feedback();
        $request = Yii::$app->request;

        if ($modelFeedback->load($request->post())) {
            $modelFeedback->save();

//            print_r($modelFeedback);
//            exit;

            return 1;
        }
        else{
            return 0;
        }
    }
}