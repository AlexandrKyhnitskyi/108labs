<div class="col-xs-12 folio-nav">
    <ul><?php foreach ($tags as $tag):?>
            <li>
                <a href="#" class="project" data-tag="<?php echo $tag->name?>"><?php echo $tag->name?></a>
            </li>
        <?php endforeach;?>
</div>
