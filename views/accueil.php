<?php
require_once "../Models/LECTURE_DE_CLEF_ETRANGERE/LectureClefEtrangere.php";

$lecture= new LectureClefEtrangere();

?>
    <div>
        <h1>Bienvenue sur Le MAUVAIS coin</h1>
        <h2> Recherche d'annonce :</h2>
        <form>
            <div class="form-group">
                <label for="Categorie">Catégorie:</label>
                <select class="form-control" type="text" name="categorieSearch" id="categorieSearch">
                    <option> </option>
                    <?php
                    $lecture->LectureCategorie();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Departement">Région:</label>
                <select class="form-control" type="text" name="regionSearch" id="regionSearch">
                    <option> </option>
                    <?php
                    $lecture->LectureRegion();
                    ?>
                </select>
            </div>
        </form>
    </div>
