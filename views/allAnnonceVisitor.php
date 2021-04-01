<?php

//var_dump($pagination);
//var_dump($UsePagination);
//var_dump($nbAnnonces);

if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = (int) strip_tags($_GET['page']);
}else{
$currentPage = 1;
}

// On détermine le nombre d'articles par page
$parPage = 9;

// On calcule le nombre de pages total
//$pages = ceil($nbAnnonces / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

?>
<div class="titrePage container-fluid">
    <h1>Toutes les annonces</h1>
</div>

<!-------------------APPEL DE LA FONCTION DE LECTURE DE TOUTES LES ANNONCES---------------------->

    <div class="row divAllAnnonces">
        <?php
            foreach ($allAnnonces as $row ){
                ?>
                <div class="col-3 ">

<!-------------------CARTE DE LECTURE DE CHAQUE ANNONCE---------------------->

                    <div class="card text-white bg-secondary m-1 " >
                        <div class="card-header text-center titreAnnonce">
                            <h4><?=$row['nom_annonce']?></h4>
                        </div>
                        <div class="row divPhotoButton">
                            <div class="col-6 ">
                                <img class="d-block user-select-none m-2 " src="<?php echo $row['photo_annonce'] ?>" width="150" height="150" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            </div>
                            <div class="col-6">
                                <a class="btn buttonContacterVendeur m-2" href="sendMailForBuy.php?ID=<?=$row["id_annonce"]?>">Contacter le vendeur</a>
                                <div id="message<?=$row["id_annonce"]?>">
                                    <a class="btn buttonNumeroVendeur m-2" type="button" onclick="changerNumero<?=$row["id_annonce"]?>()">Affficher le n° du vendeur</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="divDescriptionCard">
                                <h4 class="card-title CardTitleOption">Description</h4>
                                <p class="card-text CardTextOption" style="height: 25px"><?=$row['description_annonce']?></p>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title text-center CardTitleOption ">Prix :</h4>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-title CardTextOption"> <?=$row['prix_annonce']?> €</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title text-center CardTitleOption ">Catégorie :</h4>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-title CardTextOption"> <?=$row['name_categorie']?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title text-center CardTitleOption ">Région :</h4>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-title CardTextOption"> <?=$row['name_region']?></h4>
                                </div>
                            </div>
                            <a class="btn buttonAcheter btn-block btn-lg m-2 " href="achatAnnonce.php?ID=<?=$row["id_annonce"]?>">Acheter</a>
                            <form method="post" action="allAnnonceVisitor.php">
                                <input type="hidden" name="nom_annonce" value="<?=$row['nom_annonce']?>">
                                <input type="hidden" name="description_annonce" value="<?=$row['description_annonce']?>">
                                <input type="hidden" name="prix_annonce" value="<?=$row['prix_annonce']?>">
                                <input type="hidden" name="region_annonce" value="<?=$row['name_region']?>">
                                <button type="submit" name="exportPdf" class="btn buttonPdf btn-block btn-lg m-2">Télécharger en PDF</button>
                            </form>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function changerNumero<?=$row["id_annonce"]?>() {
                        document.getElementById('message<?=$row["id_annonce"]?>').innerHTML = '<?=$row["phone_user"]?>';
                    }
                </script>
             <?php
            }
            ?>

    </div>
