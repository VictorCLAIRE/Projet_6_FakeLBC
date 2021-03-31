
<!-------------------APPEL DE LA FONCTION DE LECTURE DE TOUTES LES ANNONCES---------------------->

    <div class="row">
        <?php
            foreach ($allAnnonces as $row ){
                ?>
                <div class="col-4 ">

<!-------------------CARTE DE LECTURE DE CHAQUE ANNONCE---------------------->

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
                            <p class="card-text"><?=$row['name_categorie']?></p>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Région</h4>
                            <p class="card-text"><?=$row['name_region']?></p>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-success btn-block btn-lg " href="achatAnnonce.php?ID=<?=$row["id_annonce"]?>">Acheter</a>
                        </div>
                        <div class="card-body text-center">
                            <div id="message<?=$row["id_annonce"]?>">
                                <input type="button" class="btn btn-warning btn-block btn-lg" value="Affficher le n° du vendeur"  onclick="changerNumero<?=$row["id_annonce"]?>()">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-success btn-block btn-lg" href="sendMailForBuy.php?ID=<?=$row["id_annonce"]?>">Contacter le vendeur</a>
                        </div>
                        <div class="card-body text-center">
                            <form method="post" action="allAnnonceVisitor.php">
                                <input type="hidden" name="nom_annonce" value="<?=$row['nom_annonce']?>">
                                <input type="hidden" name="description_annonce" value="<?=$row['description_annonce']?>">
                                <input type="hidden" name="prix_annonce" value="<?=$row['prix_annonce']?>">
                                <input type="hidden" name="region_annonce" value="<?=$row['name_region']?>">
                                <button type="submit" name="exportPdf" class="btn btn-info btn-block btn-lg ">Télécharger en PDF</button>
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
