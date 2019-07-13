<?php
include 'layouts/header.php';
?> 

    <div id="div_text--quiz">
        <div class="header__quiz">
            <div class="header__quiz--container">
                <h2 class="title is-3"> <?= $quizzes->title ?></h2>                 
            </div>
            <div class="header__quiz--container">
                <h4 class="subtitle is-4"><?= $quizzes->description ?></h4>
            </div>
            <div class="header__quiz--container">
                <p class="subtitle is-5"><?= $quizzes->appusers->firstname.' '.$quizzes->appusers->lastname ?> </p>
            </div>
            <div class="header__quiz--container">
                <p><?= $nbQuestions?> questions</p>
            </div>
        </div>
        <div>
            <?php if ($quizzes !== null) {
                foreach ($quizzes->tags as $tag) {
                    if ($tag->name === 'Cinéma') { 
                        $bColor= 'blue';
                    echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    } elseif ($tag->name === 'Technologie') {
                        $bColor= 'green';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    } elseif ($tag->name === 'Gastronomie') {
                        $bColor= 'brown';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    }elseif ($tag->name === 'Littérature') {
                        $bColor= 'grey';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    }elseif ($tag->name === 'Histoire') {
                        $bColor= 'purple';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    }elseif ($tag->name === 'Animaux') {
                        $bColor= 'pink';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    }elseif ($tag->name === 'Nature') {
                        $bColor= 'lightblue';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    }elseif ($tag->name === 'Astronomie') {
                        $bColor= 'coral';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    } elseif ($tag->name === 'Géographie') {
                        $bColor= 'crimson';
                        echo '<div class="tag__color" style="background-color:'.$bColor.';"><p>'.  $tag->name .'</p></div>';
                    }
                  }
                } 
            ?>
        </div>
       
    </div>

    <form action="" method="">
    <div class="quiz_container">
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
        <?php endforeach; ?>
        </div>
        <div class="btn_div">
            <input class="btn" type="submit" value="Valider"/>
        </div>
    </form>
   
<?php
include 'layouts/footer.php';
?>
