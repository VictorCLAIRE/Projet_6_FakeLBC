    <?php

    $id_user = $_SESSION['ID_user'];

    require_once "../models/CRUD/CRUD_USER/ReadUser.php";
    $ClasseReadUser = new ReadUser();
    $ClasseReadUser->ReadAllAnnonceUser();
    ?>
    <div class="titrePage container-fluid">
        <h1>Mes annonces</h1>
    </div>
    <div class="divAllAnnonces">
        <br>
        <div class="m-2">
            <a href="newAnnonce.php" class="btn btn-info btn-block btn-lg">Créer une nouvelle annonce</a>
        </div>
        <h2 class="text-center m-2 titreMesAnnoncesClasse">Annonce(s) en ligne</h2>
        <div class="row">
            <?php
            foreach ($ShowAllAnnonceUser as $row ){
            ?>
            <div class="col-3 ">
                <div class="card text-white bg-secondary m-1 " >
                    <div class="card-header titreAnnonceMesAnnonces text-center">
                        <h4><?=$row['nom_annonce']?></h4>
                    </div>
                    <img class="d-block user-select-none" src="<?php echo $row['photo_annonce'] ?>" width="100%" height="200" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                    <div class="card-body">
                        <div class="divDescriptionCard">
                            <h4 class="card-title CardTitleOption">Description</h4>
                            <p class="card-text CardTextOption"><?=$row['description_annonce']?></p>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title CardTitleOption">Prix</h4>
                            </div>
                            <div class="col-6">
                                <p class="card-text CardTextOption"><?=$row['prix_annonce']?>€</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title CardTitleOption">Catégorie</h4>
                            </div>
                            <div class="col-6">
                                <p class="card-text CardTextOption"><?=$row['name_categorie']?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title CardTitleOption">Région</h4>
                            </div>
                            <div class="col-6">
                                <p class="card-text CardTextOption"><?=$row['name_region']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <a class="btn btn-warning btn-block btn-lg " href="updateAnnonce.php?ID=<?=$row["id_annonce"]?>">Modifier</a>
                        <a class="btn btn-danger btn-block btn-lg " href="deleteAnnonceUser.php?ID=<?=$row["id_annonce"]?>">Supprimer</a>
                    </div>
                </div>
            </div>
                <?php
                }
                ?>
        </div>
    </div>



