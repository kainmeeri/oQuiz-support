<?php
include __DIR__.'/../layouts/header.php';
?> 

    <h2 class="div__tags--title">Thème disponible</h2>

    <div class="div__tags">

        <?php foreach($tags as $tag) : ?>
            <p class="div__tags--container" style="background-color:<?=$tag->color?>;"><a href="<?= route('tagQuizzes', ['id' => $tag->id]) ?>"><?= $tag->name ?></p></a>
        <?php endforeach; ?>

    </div>
   
<?php
include __DIR__.'/../layouts/footer.php';
?> 

