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
<div class="col-xs-12 ls-about-title">

    <h1>О нас</h1>

    <p class="ls-about-content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto aspernatur atque, consequuntur cupiditate eaque eos fuga ipsum maiores nisi odit quo quod recusandae repellendus rerum sunt velit veritatis vitae!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto atque corporis, cupiditate id illo in molestiae omnis perferendis provident reprehenderit, tenetur velit voluptas. Atque consequuntur doloremque quae tempore unde.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eos est excepturi ipsam molestias mollitia necessitatibus quibusdam quidem recusandae sapiente, tempore vel? Aliquid fuga magni molestiae velit voluptatibus? Necessitatibus, recusandae.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi consectetur consequuntur cum dolores ex excepturi facere facilis, fugiat incidunt ipsam iste modi officia quis recusandae similique, vero voluptatum.
    </p>
</div>

<?php foreach ($developer as $value): ?>
  <div class="col-xs-12 col-sm-4 ls-about-user">
    <img src="<?php echo $value->image?>" alt="Розработчик" class="round">
    <h2><?=$value->title?></h2>
    <p class="ls-about-content"><?=$value->short?></p>
</div>
<?php endforeach ?>

