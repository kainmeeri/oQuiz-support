<?php
include __DIR__.'/../layouts/header.php';
?>
    <div class="header_pres">
    
        
    </div>
    <div class="tags_title--home">
        <p><a href="<?= route('tags') ?>">Retour</a></p>
    </div>
    <div id="main_div">

    <?php if($tagQuizzes->quizzes->isEmpty()) {
        echo ('<h3 class="h3__tagquizzes">Il n\'y a pas encore de quiz dans ce thème</h3>');
    }
    ?>

        <!-- je boucle avec un foreach pour recuperer les info de mon tableau $quizzes, puis j'appel les informations dont jai besoin -->
        <?php foreach($tagQuizzes->quizzes as $quiz) : ?>
        <div class="div_flex">        
            <a class="a" href="<?= route('quiz', ['id' => $quiz->id]) ?>">
                <div class="row">
                    <div class="col">
                        <h3><?= $quiz->title ?></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p><?= $quiz->app_users->firstname .' ' . $quiz->app_users->lastname ?> </p>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

<?php
include __DIR__.'/../layouts/footer.php';
?>

