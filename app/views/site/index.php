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
<div class="container-fluid">
    <div class="row">
        <div class="line-wrapper">
            <div class="col-xs-12 ls-index">
                <h1>
                    Создаем
                    <a href="">современные и удобные</a><br>
                    сайты любой сложности
                </h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="line-wrapper">
            <div class="col-xs-12">
                <a class="ls_main-more-butt" href="">Подробнее</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="line-wrapper ls-index ">
            <div class="col-xs-3">
                <a class="ls_main-link link1" href="">Создание уникальных<br>веб-сайтов</a>
            </div>

            <div class="col-xs-3">
                <a class="ls_main-link link2" href="">Поддержка<br>веб-сайтов</a>
            </div>

            <div class="col-xs-3">
                <a class="ls_main-link link3" href="">Специальные<br>предложения</a>
            </div>

            <div class="col-xs-3">
                <a class="ls_main-link link4" href="">Дополнительные<br>услуги</a>
            </div>
        </div>
    </div>
</div>
