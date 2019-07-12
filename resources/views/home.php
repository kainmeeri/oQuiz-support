<?php
include 'layouts/header.php';
?>
    <div class="header_pres">
        <h2 class="header_title"> Bienvenue sur O'Quiz </h2>
        <p class="header_text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea 
            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
            et accusam et justo duo dolores et ea rebum. 
        </p>
    </div>
    <div id="main_div">
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