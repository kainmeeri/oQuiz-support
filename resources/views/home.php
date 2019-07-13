<?php
include 'layouts/header.php';
?>
    <div class="header_pres">
        <h2 class="header_title"> Bienvenue sur O'Quiz </h2>
        <p class="header_text">
            La platform de quiz simple et efficace ! inscris toi vite pour en profiter à 100%.
        </p>
    </div>
    <div id="main_div">
        <!-- je boucle avec un foreach pour recuperer es info de mon tableau $quizzes, puis j'appel les informations dont jai besoin -->
        <?php foreach($quizzes as $quiz) : ?>
        <div class="div_flex">
            <a class="a" href="<?= 'quiz/'.$quiz->id ?>">
                <div class="row">
                    <div class="col">
                        <h3><?= $quiz->title ?></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p><?= $quiz->appusers->firstname .' ' . $quiz->appusers->lastname ?> </p>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

<?php
include 'layouts/footer.php';
?>