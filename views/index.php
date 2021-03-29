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
if ($url == "accueil" ) {
    $title = "Accueil - Le MAUVAIS coin";
    ShowAllAnnonce();

}elseif ($url === "connexion" || $url === "connexion.php" ){
    $title = "Connexion - Le MAUVAIS coin";
    require_once "../views/connexion.php";

}elseif ($url === "deconnexion" || $url === "deconnexion.php" ){
    $title = "Déconnexion - Le MAUVAIS coin";
    require_once "../views/deconnexion.php";

}elseif ($url === "inscription" || $url === "inscription.php" ){
    $title = "Inscription - Le MAUVAIS coin";
    Inscription();

}elseif ($url === "validationInscription" || $url === "validationInscription.php" ){
    ValidationInscription();

}elseif ($url === "mesAnnonces" || $url === "mesAnnonces.php" ){
    $title = "Mes Annonces - Le MAUVAIS coin";
    ReadAllAnnonceUser();

}elseif ($url === "newAnnonce" || $url === "newAnnonce.php" ){
    $title = "New Annonces - Le MAUVAIS coin";
    CreateNewAnnonce();

}elseif ($url === "updateAnnonce" || $url === "updateAnnonce.php" ){
    $title = "Update Annonce - Le MAUVAIS coin";
    UpdateAnnonce();

}elseif ($url === "deleteAnnonce" || $url === "deleteAnnonce.php" ){
    $title = "Delete annonce - Le MAUVAIS coin";
    DeleteAnnonce();

}elseif ($url === "deleteAnnonceByAdmin" || $url === "deleteAnnonceByAdmin.php" ){
    $title = "Delete annonce BY ADMIN - Le MAUVAIS coin";
    DeleteAnnonce();

}elseif ($url === "gestionAllAnnonces" || $url === "gestionAllAnnonces.php" ){
    $title = "Gestion des annonces - Le MAUVAIS coin";
    ReadAllAnnonceAdmin();

}elseif ($url === "gestionAllUser_Admin" || $url === "gestionAllUser_Admin.php" ){
    $title = "Gestion des users - Le MAUVAIS coin";
    ShowAllUser_Admin();

}elseif ($url === "deleteUser" || $url === "deleteUser.php" ) {
    $title = "Delete User- Le MAUVAIS coin";
    ShowUser();

}elseif ($url === "newAdmin" || $url === "newAdmin.php" ) {
    $title = "New Admin - Le MAUVAIS coin";
    CreateNewAdmin();

}elseif ($url === "updateAdmin" || $url === "updateAdmin.php" ) {
    $title = "Update Admin - Le MAUVAIS coin";
    UpdateAdmin();

}elseif ($url === "gestionCategorie" || $url === "gestionCategorie.php" ) {
    $title = "Gestion catégorie - Le MAUVAIS coin";

    ShowAllCategorie();

}elseif ($url === "newCategorie" || $url === "newCategorie.php" ) {
    $title = "New catégorie - Le MAUVAIS coin";

    CreateNewCategorie();

}elseif ($url === "deleteCategorie" || $url === "deleteCategorie.php" ) {
    $title = "Delete catégorie - Le MAUVAIS coin";

    ShowCategoireID();

}








$content = ob_get_clean();

require_once "template.php";

