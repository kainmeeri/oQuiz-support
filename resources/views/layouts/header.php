<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link href="<?= url('css/reset.css') ?>s"  rel="stylesheet">

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

        <!-- Really beautiful CSS -->
        <link href="<?= url('css/style.css') ?>"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>
    <body>
        <main >
            <nav class="navnav navbar has-background-grey" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="nav_title navbar-item is-size-3" href="<?= route('home') ?>">oQuizz</a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                             <?php
                                if ($user != null) {
                                    ?><a class="button is-primary" href="<?= route('account') ?>"> <strong>Mon compte</strong></a>
                                    <a class="button is-light" href="<?= route('logout') ?>">Deconnexion</a><?php
                                } else {
                                ?> <a class="button is-primary" href="<?= route('signup') ?>"> <strong>Inscription</strong></a>
                                    <a class="button is-light" href="<?= route('signin') ?>">Connexion</a>
                                <?php
                                }
                            ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            