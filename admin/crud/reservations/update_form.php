<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$reservation = getOneEntity("reservation", $id);

require_once '../../layout/header.php';
?>

<h1>Valider une réservation</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Valide</label>
        <div class="col-sm-10">
            <input type="checkbox" name="valide" <?php echo $reservation["valide"] ? "checked" : ""; ?> class="form-control">
        </div>
    </div>
    


    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

