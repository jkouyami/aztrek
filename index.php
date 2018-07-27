<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aztrek</title>
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
                <a href="">
                    <i class="far fa-user"></i>
                </a>
                <a class="compte" href="#">Mon compte</a>
            </div>

        </section>

        <section class="middle-barre">


            <a class="burger" href="#sidr-main">
                <i class="fa fa-bars" aria-hidden="true"></i>Menu
            </a>

            <a class="header-logo" href="index.html">
                <img src="images/logo/logo-aztrek.png" alt="logo Aztrek">
            </a>
            <h2>Aztrek</h2>

           





            <nav class="main-nav">
                <ul class="menu">

                    <li>
                        <a href="#">Destinations</a>
                        <ul class="sous-menu">
                            <li>
                                <a href="#">Mexique</a>
                            </li>
                            <li>
                                <a href="#">Guatemala</a>
                            </li>
                            <li>
                                <a href="#">Honduras</a>
                            </li>
                            <li>
                                <a href="#">salvador</a>
                            </li>
                            <li>
                                <a href="#">Costa-Rica</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Notre agence</a>
                        <ul class="sous-menu">
                            <li>
                                <a href="#">Présentation</a>
                            </li>
                            <li>
                                <a href="#">L'équipe</a>
                            </li>
                            <li>
                                <a href="#">Nos conseils</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Communauté</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>

            <form class="search-form" action="#" method="get">
                    <input type="text" name="keywords" value="" placeholder="Rechercher">
                    <button type="submit" name="submit-btn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>



        </section>

        

    </header>



    <main>



        <section class="photo-presentation">

                <section class="recherche-rapide">
           

                        <div class="selection-recherche">
            
                                <p>Recherche avancée</p>
                                <form method="post" action="ton_action" placeholder="Destinations">
                                       
                                        <p>
                                            <select class="select" name="le_nom" id="le_nom">
                                                <option value="ta_valeur">Mexique</option>
                                                <option value="ta_valeur">Guatemala</option>
                                                <option value="ta_valeur">Salvador</option>
                                                <option value="ta_valeur">Honduras</option>
                                                <option value="ta_valeur">Costa Rica</option>        
                                     </select>
                                        </p>
                                     </form>
            
                                     <form method="post" action="ton_action"placeholder="Durée du séjour">
                                           
                                            <p>
                                                <select class="select" name="le_nom" id="le_nom">
                                                    <option value="ta_valeur">5 jours</option>
                                                    <option value="ta_valeur">6 jours</option>
                                                    <option value="ta_valeur">7 jours</option>
                                                    <option value="ta_valeur">8 jours</option>
                                                         
                                         </select>
                                            </p>
                                         </form>
            
                                         <form method="post" action="ton_action" placeholder="Difficulté">
                                                
                                                <p>
                                                    <select class="select" name="le_nom" id="le_nom">
                                                        <option value="ta_valeur">Niveau 1</option>
                                                        <option value="ta_valeur">Niveau 2</option>
                                                        <option value="ta_valeur">Niveau 3</option>
                                                        <option value="ta_valeur">Niveau 4</option>
                                                        <option value="ta_valeur">Niveau 5</option>     
                                             </select>
                                                </p>
                                             </form>
            
                                             <form action="ton-action" method="post" placeholder="Dates">
                                                   
                                                    Du
                                                        <select class="select" name="jourarr">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                         
                                                        <select class="select" name="moisarr">
                                                            <option value="1">Janvier</option>
                                                            <option value="2">Février</option>
                                                            <option value="3">Mars</option>
                                                            <option value="4">Avril</option>
                                                            <option value="5">Mai</option>
                                                            <option value="6">Juin</option>
                                                            <option value="7">Juillet</option>
                                                            <option value="8">Août</option>
                                                            <option value="9">Septembre</option>
                                                            <option value="10">Octobre</option>
                                                            <option value="11">Novembre</option>
                                                            <option value="12">Décembre</option>
                                                        </select>
                                                         
                                                        <select class="select" name="anneearr">
                                                            <option value="2008">2018</option>
                                                            <option value="2009">2019</option>
                                                            <option value="2010">2020</option>
                                                            <option value="2011">2021</option>
                                                            <option value="2012">2022</option>
                                                        </select>
                                                    &nbsp; &nbsp; 
                                                        Au
                                                        <select class="select" name="jourdep">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                         
                                                        <select class="select" name="moisdep">
                                                            <option value="1">Janvier</option>
                                                            <option value="2">Février</option>
                                                            <option value="3">Mars</option>
                                                            <option value="4">Avril</option>
                                                            <option value="5">Mai</option>
                                                            <option value="6">Juin</option>
                                                            <option value="7">Juillet</option>
                                                            <option value="8">Août</option>
                                                            <option value="9">Septembre</option>
                                                            <option value="10">Octobre</option>
                                                            <option value="11">Novembre</option>
                                                            <option value="12">Décembre</option>
                                                        </select>
                                                         
                                                        <select class="select" name="anneedep">
                                                            <option value="2008">2018</option>
                                                            <option value="2009">2019</option>
                                                            <option value="2010">2020</option>
                                                           
                                                        </select>
                                                    
                                                        </form>
                                                        <input class="submit" type="submit" value="Valider">
            
                        </div>
            
            
                    </section>
            <img src="images/photo-presentation.png" alt="">

            <h2>Un nouveau monde à chaque pas</h2>

            <div class="reseaux-sociaux-lateral">
                <a href="#">
                    <img src="images/reseaux_sociaux/facebook.png" alt="">
                </a>
                <a href="#">
                    <img src="images/reseaux_sociaux/instagram.png" alt="">
                </a>
                <a href="#">
                    <img src="images/reseaux_sociaux/twitter.png" alt="">
                </a>
                <a href="#">
                    <img src="images/reseaux_sociaux/youtube.png" alt="">
                </a>
            </div>

            <div class="mouse_scroll">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
                <div>
                    <span class="m_scroll_arrows un"></span>
                    <span class="m_scroll_arrows deux"></span>
                    <span class="m_scroll_arrows trois"></span>
                </div>
            </div>
        </section>

        <section class="texte-presentation container">
            <h2>Vivez de nouvelles expériences avec AZTREK</h2>
            <div class="texte-presentation-element">
                <p>
                    Organisateur de voyage au Mexique,
                    <strong>AZTREK</strong> propose des circuits hors des sentiers battus pour découvrir les régions les plus authentiques
                    de l’Amérique centrale.
                    <strong>AZTREK</strong> s’inscrit dans une démarche d’écotourisme en planifiant des voyages responsables, dans
                    des zones naturelles, en respectant l’environnement et en travaillant en collaboration avec les populations
                    locales. L’équipe de
                    <strong>AZTREK</strong> vous accompagnera dans les démarches de préparation de votre voyage avant de vous guider
                    à travers cette terre de contraste. Pour l’organisation de votre voyage, choisissez l’agence de voyage
                    <strong>AZTREK</strong>!
                </p>

                <img src="images/photo-presentation-2.png" alt="">
            </div>
        </section>

        <section class="encart-photo">
            <img src="images/photo-section-photo.png" alt="">

        </section>



        <div class="suggestions">
            <h3>Nos suggestions</h3>
            <div class="articles-suggestions">
                <article>
                    <img src="images/photo-yucatan.png" alt="">
                    <div class="legende">
                        <div class="infos-legende1">
                            <p class="title">Trésors du Yucatan</p>
                            <p>5 jours</p>
                            <p>Niveau 2/5</p>
                        </div>
                        <div class="infos-legende2">
                            <p class="prix">A partir de 1389€</p>
                            <a href="#">En savoir +</a>
                        </div>
                    </div>

                    <div class="legende2">
                        <div class="infos-suggestions">
                            <p>543 membres y ont participé</p>
                            <p>127 membres sont intéressés</p>
                        </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </article>

                <article>
                    <img src="images/photo-caminando.png" alt="">
                    <div class="legende">
                        <div class="infos-legende1">
                            <p class="title">Caminando Mexico</p>
                            <p>6 jours</p>
                            <p>Niveau 3/5</p>
                        </div>
                        <div class="infos-legende2">
                            <p class="prix">A partir de 2010€</p>
                            <a href="#">En savoir +</a>
                        </div>
                    </div>
                    <div class="legende2">
                        <div class="infos-suggestions">
                            <p>360 membres y ont participé</p>
                            <p>127 membres sont intéressés</p>
                        </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                </article>
                <article>
                    <img src="images/photo-volcans.png" alt="">
                    <div class="legende">
                        <div class="infos-legende1">
                            <p class="title">Les volcans</p>
                            <p>7 jours</p>
                            <p>Niveau 4/5</p>
                        </div>
                        <div class="infos-legende2">
                            <p class="prix">A partir de 2780€</p>
                            <a href="#">En savoir +</a>
                        </div>
                    </div>
                    <div class="legende2">
                        <div class="infos-suggestions">
                            <p>487 membres y ont participé</p>
                            <p>127 membres sont intéressés</p>
                        </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </article>

            </div>
        </div>
        </section>

        <section class="sejours">

            <h1>Partez à la découverte de l’Amérique centrale</h1>



            <div class="pictureSlider poster-main">

                <ul class="poster-list">

                    <li class="poster-item">

                        <a href="#">
                            <img src="images/photo-slider.jpg">
                        </a>

                    </li>

                    <li class="poster-item">

                        <a href="#">
                            <img src="images/photo-slider-2.jpg">
                        </a>

                    </li>

                    <li class="poster-item">

                        <a href="#">
                            <img src="images/photo-slider-3.jpg">
                        </a>

                    </li>

                    <li class="poster-item">

                        <a href="#">
                            <img src="images/photo-slider-4.jpg">
                        </a>

                    </li>

                    <li class="poster-item">

                        <a href="#">
                            <img src="images/photo-slider-5.jpg">
                        </a>

                    </li>

                </ul>

            </div>


            </div>

            <div class="texte-sejours">
                <p>
                    <strong>En quelques mots… </strong>
                    <br>Le bruit incessant de la ville, les heures perdues dans les bouchons, l’agitation des gens pressés …
                    Métro, boulot, dodo, s’en est trop !</p>

                <p>Vous avez besoin de respirer le grand air, de sortir de cette routine pesante le temps d’un break loin de
                    tout et vivifiant ? Respirez et laissez-vous porter, nous savons comment répondre à votre besoin d’évasion
                    … </p>

                <p>Nous vous emmenons en Amérique centrale où se niche des paysages à vous couper le souffle. C’est en parfaite
                    symbiose avec cette nature préservée que nous vous invitons à découvrir des paysages spectaculaires lors
                    des treks. </p>
                <p>Pourquoi on aime ces voyages ? Pour le côté « bout du monde » de cette expérience! Ce voyage est-il pour
                    moi ? Niveau sportif : Tous niveaux
                </p>

            </div>




            <div class="section-pays">

                <h3>Nos destinations vers …</h3>

                <ul class="slider">
                    <li>
                        <img src="images/photo-mexique.jpg"alt="une légende">
                        <div class="legend">
                            <h3>Mexique</h3>
                            <a href="#">En savoir +</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/photo-guatemala.jpg" alt="une légende">
                        <div class="legend">
                            <h3>Guatemala</h3>
                            <a href="#">En savoir +</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/photo-honduras.jpg" alt="Une légende">
                        <div class="legend">
                            <h3>Honduras</h3>
                            <a href="#">En savoir +</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/photo-salvador.jpg" alt="Une légende">
                        <div class="legend">
                            <h3>Salvador</h3>
                            <a href="#">En savoir +</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/photo-costa-rica.jpg" alt="Une légende">
                        <div class="legend">
                            <h3>Costa-Rica</h3>
                            <a href="#">En savoir +</a>
                        </div>
                    </li>
                </ul>

                <a class="lien-destinations" href="#">Voir toutes nos destinations</a>

                <article class="brochure">
                    <img src="images/icones/brochure-noir.png" alt="">
                    <a href="#">Téléchargez notre brochure</a>
                </article>


            </div>



            <section class="communaute">

                <h2>Notre communauté</h2>

                <img class="patchwork" src="images/patchwork.png" alt="">

                <h3>Partagez vos expériences</h3>


                <div class="infos-communaute">
                    <article>
                        <p class="title">Forum</p>
                        <p>Echangez avec les membres</p>
                        <a href="#">Accéder</a>
                    </article>
                    <article>
                        <p class="title">Groupes</p>
                        <p>Trouvez votre groupe et partez à l’aventure</p>
                        <a href="#">Accéder</a>
                    </article>
                    <article>
                        <p class="title">FAQ</p>
                        <p>Retrouvez les questions les plus fréquentes et posez-nous vos questions</p>
                        <a href="#">Accéder</a>
                    </article>
                </div>

                <div class="temoignages">

                    <h3>Ils témoignent...</h3>

                    <div class="elements-temoignages">
                        <div class="articles-temoignages">
                            <article>
                                <div class="infos-temoignages">
                                    <img src="images/photo-temoignage-1.png" alt="">
                                    <p>J’ai beaucoup voyagé via des agences, TO et tient à souligner la qualité de vos prestations,
                                        ne changez rien !
                                    </p>
                                </div>
                                <div class="legende-temoignage">
                                    <p>Posté par Sandra - 18/06/2017</p>
                                    <p class="twitt">#voyage #trek #mexique</p>
                                </div>
                            </article>
                            <div class="line"> </div>
                            <article>
                                <div class="infos-temoignages">
                                    <img src="images/photo-temoignage-2.png" alt="">
                                    <p>J’ai beaucoup voyagé via des agences, TO et tient à souligner la qualité de vos prestations,
                                        ne changez rien !
                                    </p>
                                </div>
                                <div class="legende-temoignage">
                                    <p>Posté par Sandra - 18/06/2017</p>
                                    <p class="twitt">#voyage #trek #mexique</p>
                                </div>
                            </article>
                            <div class="line"> </div>
                            <article>
                                <div class="infos-temoignages">
                                    <img src="images/photo-temoignage-3.png" alt="">
                                    <p>J’ai beaucoup voyagé via des agences, TO et tient à souligner la qualité de vos prestations,
                                        ne changez rien !
                                    </p>
                                </div>
                                <div class="legende-temoignage">
                                    <p>Posté par Sandra - 18/06/2017</p>
                                    <p class="twitt">#voyage #trek #mexique</p>
                                </div>
                            </article>
                            <div class="line"> </div>
                            <article>
                                <div class="infos-temoignages">
                                    <img src="images/photo-temoignage-4.png" alt="">
                                    <p>J’ai beaucoup voyagé via des agences, TO et tient à souligner la qualité de vos prestations,
                                        ne changez rien !
                                    </p>
                                </div>
                                <div class="legende-temoignage">
                                    <p>Posté par Sandra - 18/06/2017</p>
                                    <p class="twitt">#voyage #trek #mexique</p>
                                </div>
                            </article>
                            <div class="line"> </div>
                            <article>
                                <div class="infos-temoignages">
                                    <img src="images/photo-temoignage-5.png" alt="">
                                    <p>J’ai beaucoup voyagé via des agences, TO et tient à souligner la qualité de vos prestations,
                                        ne changez rien !
                                    </p>
                                </div>
                                <div class="legende-temoignage">
                                    <p>Posté par Sandra - 18/06/2017</p>
                                    <p class="twitt">#voyage #trek #mexique</p>
                                </div>
                            </article>

                            <a href="#">Voir tous les témoignages</a>
                        </div>





                        <div class="aside">
                            <article class="joindre">

                                <div class="text-joindre">
                                    <p class="title-joindre">Pas encore inscrit?</p>

                                    <p>Rejoignez notre notre communauté en créant votre espace personnel!</p>
                                </div>
                                <div class="link-rejoindre">
                                    <a href="#">Nous rejoindre</a>
                                </div>
                            </article>

                            <article class="concours">
                                <i class="fas fa-camera"></i>
                                <p class="title-concours"> Concours photos</p>
                                <p>Appel à tous les Trekkers passés, présents et futurs! Avez-vous des photos géniales de votre
                                    voyage que vous souhaitez partager? Ou peut-être que vous n'avez pas encore pris la route
                                    avec nous, mais vous prévoyez de prendre des milliers de milliards de photos?</p>

                                <p>
                                    <strong>Chaque mois, nous choisirons notre photo préférée! Le gagnant recevra un cadre photo
                                        numérique!</strong>
                                </p>
                                <a href="#">Participer</a>
                            </article>
                        </div>
                    </div>
                </div>

            </section>
    </main>



    <footer class="footer">

<div class="elements-footer">
        <div class="menu1">
            <a href="index.html">Accueil</a>
            <a href="#">Mon compte</a>
            <a href="#">Communauté</a>
            <a href="#">Assurances et garanties</a>
            <a href="#">Contact</a>
        </div>

        <a class="footer-logo" href="index.html">
            <img src="images/logo/logo-aztrek-blanc.png" alt="logo Aztrek">
        </a>

        <div class="menu2">
            <div class="reseaux-sociaux-footer">
                <a href="#">
                    <img src="images/reseaux_sociaux/facebook.png" alt="">
                </a>
                <a href="#">
                    <img src="images/reseaux_sociaux/instagram.png" alt="">
                </a>
                <a href="#">
                    <img src="images/reseaux_sociaux/twitter.png" alt="">
                </a>
                <a href="#">
                    <img src="images/reseaux_sociaux/youtube.png" alt="">
                </a>
            </div>
            <a href="#">Mentions légales</a>
            <a href="#">Conditions générales de vente</a>
            <p class="paiements">Paiements sécurisés</p>
            <div class="icones-paiements">
                <i class="fab fa-cc-amex"></i>
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>


            </div>
        </div>
    </div>

        <div class="ecotourisme">
            <img src="images/icones/ecology.png" alt="">
            <p>AZTREK , certfié Ecotourisme</p>
        </div>

        <div class="copyright">
        <div class="line-footer"> </div>
        <p>Copyright &copy 2018 Aztrek. Tous droits réservés.</p>
    </div>

    </footer>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/slippry.min.js"></script>
    <script src="js/jquery.sidr.min 2.js"></script>


    <script src="js/scripts.js"></script>


</body>

</html>