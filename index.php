<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntities("pays");
$list_sejours = getAllSejours(3);



get_header("Accueil");
?>

<main class="homepage">
    <section class="photo-presentation">

        <section class="recherche-rapide">


            <div class="selection-recherche">

                <p>Recherche avancée</p>
                <form method="post" action="ton_action" placeholder="Destinations">

                    <p>
                        <select class="select" name="le_nom" id="le_nom">
                            <?php foreach ($list_pays as $pays) : ?>
                                <option value="<?php echo $pays["id"]; ?>">
                                    <?php echo $pays["nom"]; ?>
                                </option>
                            <?php endforeach; ?>
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
                <?php foreach ($list_sejours as $sejour) : ?>

                    <h3><?php echo $sejour["titre"]; ?></h3>
                    <div class="legende">

                        <img src="uploads/<?php echo $sejour["image"]; ?>" alt="<?php echo $pays["titre"]; ?>">

                        <p><strong><?php echo $sejour["nb_jours"]; ?> jours</strong></p>
                        <p><strong>Niveau<?php echo $sejour["difficulte"]; ?>/5</strong></p>

                        <div class="infos-legende2">
                            <p class="prix">
                                <?php if (is_numeric($sejour["prix"])) : ?>
                                    <strong>A partir de <?php echo $sejour["prix"]; ?>€</strong>
                                <?php else: ?>
                                    <strong>Aucun départ de planifié</strong>
                                <?php endif; ?>
                            </p>
                            <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">En savoir +</a>
                        </div>
                    </div>      

                    <div class="legende2">
                        <div class="infos-suggestions">
                            <p><?php echo $sejour["nb_voyageurs"]; ?> membres y ont participé</p>
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
                <?php endforeach; ?>
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


            <?php foreach ($list_pays as $pays) : ?>
                <li>
                    <img src="uploads/<?php echo $pays["photo"]; ?>" alt="<?php echo $pays["nom"]; ?>">
                    <div class="legend">
                        <h3><?php echo $pays["nom"]; ?></h3>
                        <a href="pays.php?id=<?php echo $pays["id"]; ?>">En savoir +</a>
                    </div>
                </li>
            <?php endforeach; ?>

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

<?php get_footer(); ?>