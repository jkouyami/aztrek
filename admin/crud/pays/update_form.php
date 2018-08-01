<?php 

require_once '../../../model/database.php';
$id = $_GET["id"];
$pays = getOneEntity("pays", $id);

$list_pays = getAllEntities("pays");

require_once '../../layout/header.php'; ?>

<h1>Modifier un pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
     <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Nom</label>
         <div class="col-sm-10">
             <input type="text" name="nom" value="<?php echo $pays["nom"];  ?>" class="form-control" placeholder="Titre">
         </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $pays["photo"]; ?>" class="img-responive img-thumbnail">
        </div>
         <div class="col-sm-9">
        <input type="file" name="photo" accept="uploads/*" class="form-control">
         </div>
    </div>
     
    <input type="hidden" name="id" value="<?php echo $id; ?>">
         <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

