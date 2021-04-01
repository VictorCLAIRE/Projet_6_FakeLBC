<h1>hello</h1>
<div class="row">
    <?php
    foreach ($searchAnnoncesMap as $row ){
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
                    <p class="card-text"><?=$row['name_categorie']?></p>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Région</h4>
                    <p class="card-text"><?=$row['name_region']?></p>
                </div>

            </div>
        </div>
        <?php
    }
    ?>

</div>
