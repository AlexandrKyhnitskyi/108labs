<?php
use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="row">
        <div class="line-wrapper">
            <div class="col-xs-12 ls-bg-m">

                <a href="">
                    <span class="fa fa-envelope-o"></span>
                    support@108labs.co.ua
                </a>

                <a href="">
                    <span class="fa fa-mobile"></span>
                    (099) 23 8888 9
                </a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="line-wrapper">
            <div class="col-xs-12 col-sm-9 col-sm-push-3">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li class="<?php if (Yii::$app->controller->id == 'main') echo 'active';?>">
                                <a href="/">Главная</a>
                            </li>

                            <li class="<?php if (Yii::$app->controller->id == 'about') echo 'active';?>">
                                <a href="/about">О нас</a>
                            </li>

                            <li class="<?php if (Yii::$app->controller->id == 'portfolio') echo 'active';?>">
                                <a href="/portfolio/">Портфолио</a>
                            </li>

                            <li class="<?php if (Yii::$app->controller->id == 'news') echo 'active';?>">
                                <a href="/news/">Новости</a>
                            </li>

                            <li class="<?php if (Yii::$app->controller->id == 'contacts') echo 'active';?>">
                                <a href="/contacts/">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-xs-12 col-sm-3 col-sm-pull-9">
                <div class="ls_logo"></div>
            </div>
        </div>
    </div>

<!--    <div class="container-fluid main-content">-->
<!--        <div class="row">-->
<!--            <div class="line-wrapper">-->
                <?= $content ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <script>
        var assetsUrl = '<?= $asset->baseUrl ?>';
    </script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>


