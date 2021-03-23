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
if ($url === "accueil") {
    $title = "Accueil - Le MAUVAIS coin";
    ShowAllAnnonce();



}elseif ($url === "connexion"){
    $title = "Connexion - Le MAUVAIS coin";
    require_once "connexion.php";
}




$content = ob_get_clean();

require_once "template.php";

