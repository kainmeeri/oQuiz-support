<?php
include 'layouts/header.php';
?>

<div class="signin">
    <h2 class="form__title">Connexion</h2>
    <form action="" method="post">
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
            <a class="signin_add--signup" href="<?= route('signup') ?>">S'enregistrer</a>
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-success">
                Valide
                </button>
            </p>
        </div>
    </form>
</div>


<?php
include 'layouts/footer.php';
?>