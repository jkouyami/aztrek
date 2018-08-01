<?php
require_once 'lib/functions.php';
$utilisateur = current_user();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aztrek - <?php echo $title; ?></title>
        <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
              crossorigin="anonymous">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
        <link rel="stylesheet" href="css/slippry.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>

        <header class="header">

            <section class="top-barre">
                <div class="icones-top-barres">
                    <div class="newsletter">

                        <a href="#">
                            <i class="far fa-newspaper"></i>
                        </a>
                        <div class="newsletter-submit">
                            <p>Newsletter</p>
                            <form class="newsletter-form" action="#" method="get">

                                <input type="text" name="keywords" value="" placeholder="Email">
                                <button type="submit" name="submit-btn">Je m'abonne</button>
                            </form>
                        </div>
                    </div>
                    <div class="brochure-header">
                        <a href="#">
                            <i class="fas fa-book-open"></i>
                        </a>
                        <a class="lien-brochure-header" href="#"> Télécharger la brochure</a>
                    </div>
                </div>

                <p>Infos et réservations 0892 010 010</p>


                <div>
                    <ul class="inline-list">
                        <?php if (empty($utilisateur)) : ?>
                            <li>
                                <a href="admin/register.php">
                                    <i class="fa fa-user-plus"></i>
                                    Créer un compte
                                </a>
                            </li>
                            <li>
                                <a href="admin/login.php">
                                    <i class="fa fa-sign-in"></i>
                                    Se connecter
                                </a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="admin/logout.php">
                                    <i class="fa fa-sign-out"></i>
                                    Déconnexion
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div>
                    <a href="">
                        <i class="far fa-user"></i>
                    </a>
                    <a class="compte" href="">Mon compte</a>
                </div>

            </section>

            <section class="middle-barre">


                <a class="burger" href="#sidr-main">
                    <i class="fa fa-bars" aria-hidden="true"></i>Menu
                </a>

                <a class="header-logo" href="index.php">
                    <img src="images/logo/logo-aztrek.png" alt="logo Aztrek">
                </a>
                <h2>Aztrek</h2>


                <?php require_once 'layout/nav.php'; ?>

                <form class="search-form" action="#" method="get">
                    <input type="text" name="keywords" value="" placeholder="Rechercher">
                    <button type="submit" name="submit-btn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>



            </section>



        </header>
