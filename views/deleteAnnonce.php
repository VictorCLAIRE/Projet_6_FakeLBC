<?php

$id_annonce = $_GET['ID'];
$id_user = $_SESSION['ID_user'];

require_once "../Models/LECTURE_DE_CLEF_ETRANGERE/LectureClefEtrangere.php";
$lecture= new LectureClefEtrangere();

require_once "../models/CRUD/CRUD_USER/ReadUser.php";
$ClasseReadUser = new ReadUser();
$ClasseReadUser->ReadAnnonceID();
?>

<h2>Supprimer votre annonce:</h2>
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
            <form method="post">
                <button type="submit" class="btn btn-danger btn-block btn-lg" name="BtnDeleteAnnonce">Suppresion de l'annonce</button>
            </form>


            <?php
        }
        ?>





