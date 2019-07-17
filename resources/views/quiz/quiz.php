<?php
include __DIR__.'/../layouts/header.php';
?> 

    <div id="div_text--quiz">
        <div class="header__quiz">
            <div class="header__quiz--container">
                <!-- ici j'appel les info's dont j'ai besoin pour ma page quiz -->
                <h2 class="title is-3"> <?= $quizzes->title ?></h2>                 
            </div>
            <div class="header__quiz--container">
                <h4 class="subtitle is-4"><?= $quizzes->description ?></h4>
            </div>
            <div class="header__quiz--container">
                <p class="subtitle is-5"><?= $quizzes->app_users->firstname.' '.$quizzes->app_users->lastname ?> </p>
            </div>
            <div class="header__quiz--container">
             <!-- avec count() je recupère le nombre de questions par quiz  -->
                <p><?= count($quizzes->questions) ?> questions</p>
            </div>
        </div>
        <div>
            <!-- petit condition (pas très factoriser) pour changer le background-color selon le tag afficher -->
            <?php if ($quizzes !== null) {
                foreach ($quizzes->tags as $tag) { 
                    echo '<div class="tag__color" style="background-color:'.$tag->color.';"><p>'.  $tag->name .'</p></div>'; 
                } 
            }
            ?>
        </div>
       
    </div>

    <form action="" method="">
    <div class="quiz_container">
        <!-- je boucle $quizzes->questions (tableau) pour afficher les questions -->
        <?php foreach($quizzes->questions as $question) : ?>
            <div id="div_flex--quiz">
                <div>
                    <div class="div_question col question">
                        <!-- petite conditions (by Lucie Brochet) pour changer la color selon la difficulter -->
                        <?php if ($question->levels->name === 'Débutant'){
                                $color= 'green';
                            }
                            elseif ($question->levels->name === 'Confirmé') {
                                $color="orange";
                            } else {
                                $color="red";
                            }
                        ?>
                        <!-- j'affiche la difficulter d'une question -->
                        <span class="level level--beginner" style=<?= '"color:'.$color.'";'?>><?= $question->levels->name ?></span>
                        <div class="question__question">
                            <!-- j'affiche mes questions -->
                            <?= $question->question ?>
                        </div>
                        
                        <div class="question__choices">
                            <div>
                                <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label for="exampleRadios1"></label>   
                            </div>
                            <div>
                                <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label for="exampleRadios2"> Lorem ipsum </label>  
                            </div>
                            <div>
                                <input type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                <label for="exampleRadios3"> Lorem ipsum </label> 
                            </div>
                        
                        </div>
                        
                    </div>
                    <div class="question__info">      
                        <!-- liens wiki pour chaque questions     -->
                        <a href="https://fr.wikipedia.org/wiki/<?= $question->wiki ?>">Besoin d'aide ?</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="btn_div">
            <input class="btn" type="submit" value="Valider"/>
        </div>
    </form>
   
<?php
include __DIR__.'/../layouts/footer.php';
?> 
