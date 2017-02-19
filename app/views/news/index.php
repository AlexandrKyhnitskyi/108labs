<?php
use yii\widgets\LinkPager;
?>
<?php

$this->title = $page2->seo('title', $page2->title);

Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $page2->seo('keywords'),
]);
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $page2->seo('description'),
]);

?>
<?php foreach ($news as $value):?>
<div class="col-xs-12 col-sm-4 article-mini">
    <div class="col-xs-12">
        <img src="<?= $value->image;?>" alt="news">
    </div>

    <div class="col-xs-12">

        <h2><?= $value->title?></h2>

        <p><?= $value->short?></p>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-7">
            <a href="/news/<?=$value->slug;?>">Подробнее <span class="fa fa-arrow-right"></span></a>
        </div>

        <div class="col-xs-5">
            <span class="fa fa-calendar"><span><?= date('m.d.y',$value->time)?></span></span>
        </div>
    </div>
</div>
<?php endforeach;?>

<div class="col-xs-12 ls-pagination">
    <div class="parent">
        <?php
        echo LinkPager::widget([
            'pagination' => $page,
            'options' => [
                'tag' => 'ul',
                'class' => 'page-nav',
                'maxButtonCount' => 5
            ]
        ]);
        ?>
    </div>
</div>
