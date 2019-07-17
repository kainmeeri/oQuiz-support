<?php
include __DIR__.'/../layouts/header.php';
?> 

    <div class="account__div">
        <h2 class="account_title">Paramètres de <span class="span__user"><?= $user->firstname ?> </span> </h2>
        <nav class="account__nav">
            <p class="account__text">
                <a class="link is-info" href="<?= route('account') ?>">Profile</a>
            </p>
        </nav>
        <div class="user__params">
            <p><a href="#">Changer d'adresse e-mail</a></p>
            <p><a href="#">Changer de mot de passe</a></p>
        </div>
    </div>

<?php
include __DIR__.'/../layouts/footer.php';
?> 