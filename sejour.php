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
                <em><?php echo $depart["places_restantes"]; ?> / <?php echo $depart["nb_places"]; ?> places</em>
            </article>
        <?php endforeach; ?>
        <br>
        <br>

        <aside class="list-users">
            <?php if (!empty($utilisateur)) : ?>
                <form action="insert_reservation.php" method="post">
                    <strong>Réservation:</strong>
                    <br>
                    <input type="hidden" name="sejour_id" value="<?php echo $sejour["id"]; ?>">
                    <select name="depart_id">
                        <?php foreach ($list_departs as $depart) : ?>
                            <option value="<?php echo $depart["id"]; ?>">
                                <?php echo $depart["date_debut"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <br>
                    Nombre de voyageurs <input type="number" name="nb_voyageurs">
                    <br>
                    <br>
                    <a href=""><input type="submit" value="Réserver"></a>
                    <br>
                    <br>
                </form>
            <?php endif; ?>

        </aside>



    </section>
</main>

<?php get_footer(); ?>