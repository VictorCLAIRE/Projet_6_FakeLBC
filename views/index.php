<?php
session_start();

//REQUIRE CONTROLLERS
require_once "../controllers/VisitorController.php";
require_once "../controllers/UserController.php";
require_once "../controllers/AdminController.php";

ob_start();

//BASE
if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = "accueil";
}

// ROUTES
if ($url === "accueil" || $url === "accueil.php" ) {
    $title = "Accueil - Le MAUVAIS coin";
    ShowAllAnnonce();

}elseif ($url === "connexion" || $url === "connexion.php" ){
    $title = "Connexion - Le MAUVAIS coin";
    require_once "../views/connexion.php";

}elseif ($url === "deconnexion" || $url === "deconnexion.php" ){
    require_once "../views/deconnexion.php";

}elseif ($url === "inscription" || $url === "inscription.php" ){
    Inscription();

}elseif ($url === "validationInscription" || $url === "validationInscription.php" ){
    ValidationInscription();

}elseif ($url === "mesAnnonces" || $url === "mesAnnonces.php" ){
    CreatNewAnnonce();
}









$content = ob_get_clean();

require_once "template.php";

