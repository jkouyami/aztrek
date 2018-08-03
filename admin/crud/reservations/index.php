<?php 
require_once '../../../model/database.php';

$list_reservations = getAllReservation();
$list_departs = getAllDeparts();

require_once '../../layout/header.php'; ?>

<h1>Gestion des réservations</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Pays</th>
            <th>Séjours</th>
            <th>Utilisateur</th>
            <th>Date départ</th>
            <th>Nombre de voyageurs</th>
            <th>Valide</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_reservations as $reservation) : ?>
        <tr>
            
            <td><?php echo $reservation["pays"]; ?></td>
            <td><?php echo $reservation["sejour"]; ?></td>
            <td><?php echo $reservation["utilisateur"]; ?></td>
            <td><?php echo $reservation["date_debut"]; ?></td>
            <td><?php echo $reservation["nb_voyageurs"]; ?></td>
            <td><?php echo $reservation["valide"]; ?></td>
            
            <td class="col-actions">
                <form action="delete_query.php" method="post" class="form-delete">
                    <input type="hidden" name="id" value="<?php echo $reservation["id"]; ?>">
                    <button type="submit" class="btn btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                <a href="update_form.php?id=<?php echo $reservation["id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>