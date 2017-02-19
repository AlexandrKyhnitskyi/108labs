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
<div class="col-xs-12 ls-folio" id="projects">
            <div class="text-center"><img src="<?php echo $project->image;?>" alt="folio"></div>
            <h3><?php echo $project->title;?></h3>
            <p><?php echo $project->text;?></p>

</div>