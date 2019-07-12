<?php
include 'layouts/header.php';
?> 

    
    <div id="div_text--quiz">
        <div>
            <h2> <?= $quizzes->title ?> <span>xx questions</span></h2>                 
        </div>
        <div>
            <h4><?= $quizzes->description ?></h4>
        </div>
        <div>
            <p><?= $quizzes->appusers->firstname .' ' . $quizzes->appusers->lastname ?> </p>
        </div>
        <div>
        <?php if ($tags !== null) {
             echo '<div><p>'.  $tags->name .'</p></div>';
            }
        ?>
        </div>
    </div>

    <form action="" method="">
    <div class="btn_div">
        <input class="btn" type="submit" value="Valider"/>
    </div>
    <?php foreach($questions as $question) : ?>
        <div id="div_flex--quiz">
            <div>
                <div class="div_question col question">
                    <?php if ($question->levels->name === 'Débutant'){
                            $color= 'green';
                        }
                        elseif ($question->levels->name === 'Confirmé') {
                            $color="orange";
                        } else {
                            $color="red";
                        }
                ?>
                <span class="level level--beginner" style=<?= '"color:'.$color.'";'?>><?= $question->levels->name ?></span>
                    <div class="question__question">
                        <?= $question->question ?>
                    </div>
                    <div class="question__choices">
                        <div>
                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label for="exampleRadios1">Lorem ipsum</label>   
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
                    <a href="https://fr.wikipedia.org/wiki/<?= $question->wiki ?>">Besoin d'aide ?</a>
                </div>
            </div>
        </div>
    </form>
    <?php endforeach; ?>
    
<?php
include 'layouts/footer.php';
?>
