<?php
require_once '../../../model/database.php';

$list_departs = getAllDeparts();

require_once '../../layout/header.php';
?>

<h1>Ajouter une réservation</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Départ</label>
        <div class="col-sm-10">
            <select name="depart_id" class="form-control">
                <?php foreach ($list_departs as $depart) : ?>
                    <option value="<?php echo $depart["id"]; ?>">
                        <?php echo $depart["date_debut"]; ?> - <?php echo $depart["sejour"]; ?> - <?php echo $depart["pays"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Utilisateur</label>
        <div class="col-sm-10">
            <input type="text" name="utilisateur" class="form-control">
        </div>
    </div>
    
   
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de voyageurs</label>
        <div class="col-sm-10">
            <input type="number" name="nb_voyageurs" class="form-control">
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Valide</label>
        <div class="col-sm-10">
            <input type="checkbox" name="valide" class="form-control">
        </div>
    </div>



    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>