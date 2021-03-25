<?php

$id_annonce = $_GET['ID'];
$id_user = $_SESSION['ID_user'];

require_once "../Models/LECTURE_DE_CLEF_ETRANGERE/LectureClefEtrangere.php";
$lecture= new LectureClefEtrangere();

require_once "../models/CRUD/CRUD_USER/ReadUser.php";
$ClasseReadUser = new ReadUser();
$ClasseReadUser->ReadAnnonceID();
?>

<h2>Modifier votre annonce:</h2>
<div class="row">
    <div class="col-sm-4">
        <?php
        foreach ($ShowIDAnnonce as $row ){
            ?>
            <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header"><?=$row['nom_annonce']?></div>
                <img class="d-block user-select-none" src="<?php echo $row['photo_annonce'] ?>" width="100%" height="200" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                </img>
                <div class="card-body">
                    <h4 class="card-title">Description</h4>
                    <p class="card-text"><?=$row['description_annonce']?></p>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Prix</h4>
                    <p class="card-text"><?=$row['prix_annonce']?></p>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Catégorie</h4>
                    <p class="card-text"><?=$row['categorie_annonce']?></p>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Région</h4>
                    <p class="card-text"><?=$row['region_annonce']?></p>
                </div>

            </div>
            <?php
        }
        ?>
    </div>
    <div class="col-sm-8">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name_update_annonce">Name annonce</label>
                <input class="form-control" required type="text" id="name_update_annonce" name="name_update_annonce">
            </div>
            <div class="form-group">
                <label for="description_update_annonce">Description</label>
                <textarea class="form-control" required type="text" id="description_update_annonce" name="description_update_annonce"> Description de votre annonce </textarea>
            </div>
            <div class="form-group">
                <label for="prix_update_annonce">Prix</label>
                <input class="form-control" required type="number" id="prix_update_annonce" name="prix_update_annonce">
            </div>
            <div class="form-group">
                <label for="categorie_update_annonce">Catégorie:</label>
                <select class="form-control" type="text" name="categorie_update_annonce" id="categorie_update_annonce">
                    <option> </option>
                    <?php
                    $lecture->LectureCategorie();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="photo_update_annonce">Photo :</label>
                <input class="form-control" required type="file" id="photo_update_annonce" name="photo_update_annonce" accept="image/png, image/jpeg, image/svg"  >
            </div>
            <div class="form-group">
                <label for="region_update_annonce">Région:</label>
                <select class="form-control" type="text" name="region_update_annonce" id="region_update_annonce">
                    <option> </option>
                    <?php
                    $lecture->LectureRegion();
                    ?>
                </select>
            </div>

            <input type="hidden" id="user_update_annonce" name="user_update_annonce" value="<?=$id_user?>">

            <button class="btn btn-primary text-center" name="BtnUpdateAnnonce" type="submit">Valider la modification de mon annonce</button>

        </form>
    </div>
</div>




