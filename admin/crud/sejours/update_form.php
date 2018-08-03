<?php
require_once '../../../model/database.php';
$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

$list_pays = getAllEntities("pays");

require_once '../../layout/header.php';
?>

<h1>Modifier un séjour</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
            <input type="text" name="titre" value="<?php echo $sejour["titre"]; ?>"class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Durée</label>
        <div class="col-sm-10">
            <input type="number" name="nb_jours" value="<?php echo $sejour["nb_jours"]; ?>"class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de début</label>
        <div class="col-sm-10">
            <input type="date" name="date_debut" value="<?php echo $sejour["date_debut"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de fin</label>
        <div class="col-sm-10">
            <input type="date" name="date_fin" value="<?php echo $sejour["date_fin"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Difficulté</label>
        <div class="col-sm-10">
            <input type="number" name="difficulte" value="<?php echo $sejour["difficulte"]; ?>"class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" accept="uploads/*" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description longue</label>
        <div class="col-sm-10">
            <textarea type="text" name="description_longue"  class="form-control"><?php echo $sejour["description_longue"]; ?>
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description courte</label>
        <div class="col-sm-10">
            <textarea type="text" name="description_courte"  class="form-control"><?php echo $sejour["description_courte"]; ?>
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Itinéraire</label>
        <div class="col-sm-10">
            <textarea name="itineraire"  class="form-control"><?php echo $sejour["itineraire"]; ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pays</label>
        <div class="col-sm-10">
            <select name="pays_id" class="form-control">
                <?php foreach ($list_pays as $pays) : ?>
                    <?php $selected = (pays["id"] == $sejour["pays_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $pays["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $pays["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

