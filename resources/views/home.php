<?php
include 'layouts/header.php';
?>
    <div class="header_pres">
        <?php
            if ($user != null) {
                ?><h2 class="header_title">Bonjour <?= $user->firstname ?>, un petit quiz ?</h2><?php
            } else {
               ?> <h2 class="header_title"> Bienvenue sur O'Quiz </h2>
                <p class="header_text">
                 La platform de quiz simple et efficace ! inscris toi vite pour en profiter à 100%.
                </p>  
               <?php
            }
        ?>
    </div>
    <div class="tags_title--home">
        <p><a href="<?= route('tags') ?>">Thème disponible</a></p>
    </div>
    <div id="main_div">
        <!-- je boucle avec un foreach pour recuperer les info de mon tableau $quizzes, puis j'appel les informations dont jai besoin -->
        <?php foreach($quizzes as $quiz) : ?>
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
include 'layouts/footer.php';
?>