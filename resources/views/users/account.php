<?php
include __DIR__.'/../layouts/header.php';
?> 

    <div class="account__div">
        <h2 class="account_title">Profile de <span class="span__user"><?= $user->firstname ?> </span> </h2>
        <nav class="account__nav">
            <p class="account__text">
                <a class="link is-info" href="<?= route('params') ?>">Paramètres</a>
            </p>
        </nav>
        <div class="user__information">
            <p>Prénom: <span class="span__user"><?= $user->firstname ?> </span></p>
            <p>Nom de famille:<span class="span__user"> <?= $user->lastname ?> </span></p>
            <p>Adresse e-mail:<span class="span__user"> <?= $user->email ?> </span></p>
            <p>Inscri depuis le<span class="span__user"> <?= $user->created_at ?> </span></p>
        </div>
    </div>

<?php
include __DIR__.'/../layouts/footer.php';
?> 