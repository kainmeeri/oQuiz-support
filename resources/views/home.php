<?php
include 'layouts/header.php';
?>
    <?php foreach($quizze as $quizzadd) : ?>
    <div class="row">
        <div class="col">
            <h3><?= $quizzadd->title ?></h3>
            <h5><?= $quizzadd->description ?></h5>
            <p><?= $quizzadd->appusers->firstname ?></p>
        </div>
    </div>
    <?php endforeach; ?>


<?php
include 'layouts/footer.php';
?>