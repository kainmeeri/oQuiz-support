<?php
include 'layouts/header.php';
?>
<div class="signup">
    <h2 class="form__title">Inscription</h2>
    <form action="<?= route('signupPost') ?>" method="post">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" name="firstname" placeholder="Prénom" >
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" name="lastname" placeholder="Nom" >
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" name="email" placeholder="Adresse e-mail">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" name="password" placeholder="Mot de passe">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" name="password-confirmation" placeholder="Confirmation du mot de passe">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox" name="validation">            
                    J'accepte les <a href="#"> conditions d'utilisation</a>
                </label>
            </div>
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-success">
                Login
                </button>
            </p>
        </div>
    </form>
    <div>
        <?php foreach($messages as $message): ?>
            <div class="<?= $message['type'] ?>" role="alert">
                <?= $message['text'] ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<?php
include 'layouts/footer.php';
?>