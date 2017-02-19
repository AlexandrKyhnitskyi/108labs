<?php

use yii\widgets\LinkPager;

$asset = \app\assets\AppAsset::register($this);


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

<?php if (isset($tags)) : ?>
<?= $this->render('_tags', ['tags' => $tags]) ?>
<?php endif; ?>

<div class="col-xs-12 ls-folio" id="projects">
    <?php foreach ($projects as $project):?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ls-folio-img">
        <img src="<?php echo $project->image;?>" alt="folio">
        <a href="/portfolio/<?=$project->slug;?>"><?php echo $project->title;?><br>Best</a>
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
</div>