<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);
$list_departs = getAllDepartsBySejour($id);

$utilisateur = current_user();

get_header($sejour["titre"]);
?>

<main>
    <section class="container">
        <h1><?php echo $sejour["titre"]; ?></h1>

        <img src="<?php echo get_avatar($sejour["image"]); ?>" alt="">

        <em><?php echo $sejour["nb_jours"]; ?> jours</em><br>
        <em>Niveau <?php echo $sejour["difficulte"]; ?>/5</em><br>
        <em></:br><?php echo $sejour["description_longue"]; ?></em><br>
        <p>Itinéraire :<br> <?php echo $sejour["itineraire"]; ?></p>

        <?php foreach ($list_departs as $depart) : ?>
        <article>
            <p>Date de départ: <?php echo $depart["date_debut"]; ?></p>
            <p>Prix: <?php echo $depart["prix"]; ?>€</p>
            <em><?php echo $depart["nb_places"]; ?> places</em>
              
            </article>
        <?php endforeach; ?>
        
       <aside class="list-users">
        <?php if (!empty($utilisateur)) : ?>
            <form action="insert_reservation.php" method="post">
                Réserver
                <input type="number" name="nb_voyageurs"> personnes
                <input type="hidden" name="sejour_id" value="<?php echo $id; ?>">
                <input type="submit">
            </form>
        <?php endif; ?>
        <?php foreach ($list_participations as $participation) : ?>
            <article>
                <img src="<?php echo get_avatar($participation["photo"]); ?>" alt="">
                <div>
                    <a href="user.php?id=<?php echo $participation["utilisateur_id"]; ?>"><?php echo $participation["nom"] . " " . $participation["prenom"]; ?></a>
                    <em><?php echo $participation["montant"]; ?> €</em>
                </div>
            </article>
        <?php endforeach; ?>
    </aside>



    </section>
</main>

<?php get_footer(); ?>