<?php

$asset = \app\assets\AppAsset::register($this);
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php

$this->title = $page->seo('title', $page->title);

Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $page->seo('keywords'),
]);
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $page->seo('description'),
]);

?>
<div class="col-xs-12 col-sm-3 ls-contacts">

    <h3>Контакты</h3>

    <div class="col-xs-12">
        <span class="fa fa-mobile"></span>

        <span>
            Моб. телефон:<br>
            <a href="">(063) 123 4567</a>
        </span>
    </div>

    <div class="col-xs-12">
        <span class="fa fa-envelope-o"></span>

        <span>
            Электронная почта:<br>
            <a href="">info@108labs.com</a>
        </span>
    </div>

    <div class="col-xs-12">
        <span class="fa fa-skype"></span>

        <span>
            Skype:<br>
            <a href="">108labs</a>
        </span>
    </div>
</div>


<?php $form = ActiveForm::begin([
    'action' => '/contacts/save',
            'id' => 'login-form',
]) ?>
<div class="col-xs-12 col-sm-7 con-form">

    <h3>Форма обратной связи</h3>
        <div class="col-xs-12 col-sm-5" style="height: 290px; width: 670px;">
                <?= $form->field($modelFeedback, 'name',[
                    'inputOptions' => [
                        'placeholder' => 'Представтесь пожалуйста',
                        'class'=>'first-textarea',
                         ],
                ]) ?>

                  <?= $form->field($modelFeedback, 'phone',[
                    'inputOptions' => [
                        'placeholder' => 'Контактный телефон',
                        'class'=>'first-textarea'],
                ]) ?>

            <?= $form->field($modelFeedback, 'email',[
                'inputOptions' => [
                    'placeholder' => 'Email',
                    'class'=>'first-textarea'],
            ])?>
        </div>

        <div class="col-xs-12 col-sm-7">
            <?= $form->field($modelFeedback, 'text',[
                'inputOptions' => [
                    'placeholder' => 'Ведите сообщение',
                    'class'=>'ls-textarea'],
            ])->textarea() ?>

            <?= Html::submitButton('Отправить',['class'=>'ls-submit']) ?>

        </div>
</div>
<?php ActiveForm::end() ?>



<div class="col-xs-12 col-sm-2 qr">

    <h3>QR-визитка</h3>

    <img src="<?= $asset->baseUrl ?>/img/QR.jpg" alt="QR">
</div>

<div class="col-xs-12">

    <h3 class="map-h3">Мы на карте:</h3>

    <div class="col-xs-12 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.3530024425536!2d28.686757999999994!3d50.247991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472c636229fde8cd%3A0xbf1602b580ce0294!2z0J_Rg9GC0Y_RgtC40L3RgdGM0LrQuNC5!5e0!3m2!1suk!2sua!4v1441200941824"
                width="100%"
                height="300"
                frameborder="0"
                style="border:0"
                allowfullscreen>
        </iframe>
    </div>
</div>

