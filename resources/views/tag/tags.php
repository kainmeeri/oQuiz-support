<?php
include __DIR__.'/../layouts/header.php';
?> 

    <h2 class="div__tags--title">Thème disponible</h2>
    <div class="tags_title--home">
        <p><a href="<?= route('home') ?>">Retour</a></p>
    </div>
    <div class="div__tags">

        <?php foreach($tags as $tag) : ?>
        <a class="tag__links" href="<?= route('tagQuizzes', ['id' => $tag->id]) ?>"><p class="div__tags--container" style="background-color:<?=$tag->color?>;"><?= $tag->name ?></p></a>
        <?php endforeach; ?>

    </div>
   
<?php
include __DIR__.'/../layouts/footer.php';
?> 

