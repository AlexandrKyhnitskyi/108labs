<?php

namespace app\models;

use Yii;
use yii\easyii\validators\EscapeValidator;
use yii\easyii\validators\ReCaptchaValidator;
use yii\easyii\modules\feedback\models\Feedback as EasyiiFeedback;

class Feedback extends EasyiiFeedback {

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['name', 'email', 'phone', 'title', 'text'], 'trim'],
            [['name','title', 'text'], EscapeValidator::className()],
            ['title', 'string', 'max' => 128],
            ['email', 'email'],
            ['phone', 'match', 'pattern' => '/^[\d\s-\+\(\)]+$/'],
            ['reCaptcha', ReCaptchaValidator::className(), 'when' => function($model){
                return $model->isNewRecord && Yii::$app->getModule('admin')->activeModules['feedback']->settings['enableCaptcha'];
            }],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => '',
            'name' => '',
            'title' => '',
            'text' => '',
            'answer_subject' => '',
            'answer_text' => '',
            'phone' => '',
            'reCaptcha' => ''
        ];
    }

}