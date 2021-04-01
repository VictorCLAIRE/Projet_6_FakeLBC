<?php
require_once "../Models/LECTURE_DE_CLEF_ETRANGERE/LectureClefEtrangere.php";

$lecture= new LectureClefEtrangere();

?>

    <div>
        <div class="titrePage container-fluid">
            <h1>Bienvenue sur Le MAUVAIS coin</h1>
        </div>

        <div class="barDeRecherche">
            <div class="row">
                <div class="col-6">
                    <div class="m-2">
                        <h3> Recherche d'annonce </h3>
                        <form action="resultatRecherche.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <label for="Categorie">Catégorie:</label>
                                    <select class="form-control" type="text" name="categorieSearch" id="categorieSearch">
                                        <option>Choix catégorie : </option>
                                        <?php
                                        $lecture->LectureCategorie();
                                        ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="Departement">Région:</label>
                                    <select class="form-control" type="text" name="regionSearch" id="regionSearch">
                                        <option>Choix région : </option>
                                        <?php
                                        $lecture->LectureRegion();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center m-2">
                                <button type="submit" class="btn btn-success text-center m-2">Rechercher</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <div class="m-2">
                        <h3> Voir toutes les annonces</h3>
                        <form method="post" action="allAnnonceVisitor.php">
                            <div class="text-center m-2">
                                <button type="submit" name="BtnShowAllAnnonce" class="btn btn-success text-center btn-lg btn-block m-2">Voir toutes les annonces</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="mapAccueil container-fluid">
            <div class="text-center">
                <h2 class="TitreMapAccueil">Votre région :</h2>
                <link rel="stylesheet" href="assets/carte/cmap/style.css">
                <script src="assets/carte/cmap/jquery-1.11.1.min.js"></script>
                <script src="assets/carte/cmap/France-map.js"></script>
                <script>
                    francefree();
                </script>
            </div>
        </div>


    </div>
