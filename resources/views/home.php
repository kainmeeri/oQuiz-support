<?php
include 'layouts/header.php';
?>

    <div id="main_div">
        <?php foreach($quizze as $quizzadd) : ?>
        <div class="div_flex">
            <a class="a" href="<?= route('quiz') ?>">
                <div class="row">
                    <div class="col">
                        <h3><?= $quizzadd->title ?></h3>
                        <h5><?= $quizzadd->description ?></h5>
                        <p><?= $quizzadd->appusers->firstname .' ' . $quizzadd->appusers->lastname ?> </p>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

<?php
include 'layouts/footer.php';
?>