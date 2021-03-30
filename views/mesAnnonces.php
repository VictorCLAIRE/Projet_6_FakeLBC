    <?php

    $id_user = $_SESSION['ID_user'];

    require_once "../models/CRUD/CRUD_USER/ReadUser.php";
    $ClasseReadUser = new ReadUser();
    $ClasseReadUser->ReadAllAnnonceUser();
    ?>

    <h1 class="text-center m-2">Mes annonces</h1>
    <div class="row NewAnnonce">
        <div class="col-6">
            <h2 class="m-2 ">Créer une nouvelle annonce:</h2>
        </div>
        <div class="col-6">
            <a class="btn btn-info btn-block btn-lg m-2" href="newAnnonce.php">Créer une nouvelle annonce</a>
        </div>
    </div>

    <h2 class="text-center m-2">Annonce(s) en ligne</h2>
    <div class="row">
        <?php
        foreach ($ShowAllAnnonceUser as $row ){
        ?>
        <div class="col-4 ">
            <div class="card text-white bg-secondary m-1 " >
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
                <div class="card-body text-center">
                    <a class="btn btn-warning btn-block btn-lg " href="updateAnnonce.php?ID=<?=$row["id_annonce"]?>">Modifier</a>
                </div>
                <div class="card-body text-center">
                    <a class="btn btn-danger btn-block btn-lg " href="deleteAnnonceUser.php?ID=<?=$row["id_annonce"]?>">Supprimer</a>
                </div>
            </div>
        </div>
            <?php
            }
            ?>
    </div>


