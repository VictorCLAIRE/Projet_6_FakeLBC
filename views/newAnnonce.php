<?php

    require_once "../Models/LECTURE_DE_CLEF_ETRANGERE/LectureClefEtrangere.php";
    $id_user = $_SESSION['ID_user'];
    $lecture= new LectureClefEtrangere();

?>
    <h1>Nouvelle annonce :</h1>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name_user_inscription">Name annonce</label>
            <input class="form-control" required type="text" id="name_new_annonce" name="name_new_annonce">
        </div>
        <div class="form-group">
            <label for="description_new_annonce">Description</label>
            <textarea class="form-control" required type="text" id="description_new_annonce" name="description_new_annonce"> Description de votre annonce </textarea>
        </div>
        <div class="form-group">
            <label for="prix_new_annonce">Prix</label>
            <input class="form-control" required type="number" id="prix_new_annonce" name="prix_new_annonce">
        </div>
        <div class="form-group">
            <label for="categorie_new_annonce">Catégorie:</label>
            <select class="form-control" type="text" name="categorie_new_annonce" id="categorie_new_annonce">
                <option> </option>
                <?php
                $lecture->LectureCategorie();
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="photo_new_annonce">Photo :</label>
            <input class="form-control" required type="file" id="photo_new_annonce" name="photo_new_annonce" accept="image/png, image/jpeg, image/svg"  >
        </div>
        <div class="form-group">
            <label for="region_new_annonce">Région:</label>
            <select class="form-control" type="text" name="region_new_annonce" id="region_new_annonce">
                <option> </option>
                <?php
                $lecture->LectureRegion();
                ?>
            </select>
        </div>
        <input type="hidden" id="user_new_annonce" name="user_new_annonce" value="<?=$id_user?>">

        <button class="btn btn-primary text-center" name="BtnNewAnnonce" type="submit">Enregistrer mon annonce</button>

    </form>
