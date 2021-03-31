<?php
require_once "../models/CRUD/CRUD_ADMIN/ReadAdmin.php";
require_once "../models/CRUD/CRUD_ADMIN/CUDAdmin.php";

//---------------------------------LECTURE DE TOUTES LES ADMIN------------------------------------------------------------------------------------>
    function ShowAllAdmin(){
        $ReadAdmin = new ReadAdmin();

        $ShowAllAdmin = $ReadAdmin->ReadAllAdmin();

        require_once "../views/gestionAllUser_Admin.php";

    }

//---------------------------------LECTURE D'UN USER SELON SON ID------------------------------------------------------------------------------------>
    function ShowUser(){
        $ReadUserById = new ReadAdmin();

        $ShowUserID = $ReadUserById->ReadUser();

        require_once "../views/deleteUser.php";

        if (isset($_POST['BtnDeleteUser'])){
            $DeleteUserByAdmin = new CUDAdmin();
            $EnvoiSuppresionUser = $DeleteUserByAdmin-> DeleteUserByAdmin();
            $EnvoiSuppresionUser;

            header("location:http://localhost/Projet_6_FakeLBC/gestionAllUser_Admin");
        }

    }

//---------------------------------LECTURE DE TOUS LES USERS ET ADMIN------------------------------------------------------------------------------------>
    function ShowAllUser_Admin(){
    $ReadAmin_User = new ReadAdmin();

    $ShowAllUser = $ReadAmin_User->ReadAllUser();
    $ShowAllAdmin = $ReadAmin_User->ReadAllAdmin();

    require_once "../views/gestionAllUser_Admin.php";

    }

//---------------------------------CREATION D'UN ADMIN------------------------------------------------------------------------------------>
    function CreateNewAdmin(){

        require_once "../views/newAdmin.php";

        if (isset($_POST['BtnNewAdmin'])){
            $CreateAdmin = new CUDAdmin();
            $EnvoiDesDonneesNewAdmin = $CreateAdmin-> CreateAdmin();
            $EnvoiDesDonneesNewAdmin;

            header("location:http://localhost/Projet_6_FakeLBC/gestionAllUser_Admin");
        }
    }

//---------------------------------UPDATE D'UN ADMIN------------------------------------------------------------------------------------>
    function UpdateAdmin(){

        $ReadAdminById = new ReadAdmin();
        $ShowIDAdmin=$ReadAdminById->ReadAdmin();

        require_once "../views/updateAdmin.php";

        if (isset($_POST['BtnUpdateAdmin'])){
            $UpdateAdmin = new CUDAdmin();
            $EnvoiDesNewdonneesAdmin = $UpdateAdmin-> UpdateAdmin();
            $EnvoiDesNewdonnees;

            header("location:http://localhost/Projet_6_FakeLBC/gestionAllUser_Admin");

        }

    }

//---------------------------------LECTURE DE TOUTES LES ANNONCES DEPUIS UN COMPTE ADMIN------------------------------------------------------------------------------------>
    function ReadAllAnnonceAdmin(){

        $ReadAnnonceAdmin = new ReadAdmin();

        $ShowAllAnnonceAdmin=$ReadAnnonceAdmin->ShowAllAnnonce();

        require_once "../views/gestionAllAnnonces.php";
    }

//---------------------------------LECTURE DE TOUTES LES CATEGORIES DEPUIS UN COMPTE ADMIN------------------------------------------------------------------------------------>
    function ShowAllCategorie(){
        $ReadAdmin = new ReadAdmin();
        $ShowAllCategorie = $ReadAdmin->ReadAllCategorie();
        require_once "../views/gestionCategorie.php";

    }

//---------------------------------CREATION D'UNE NOUVELE CATEGORIE DEPUIS UN COMPTE ADMIN------------------------------------------------------------------------------------>
    function CreateNewCategorie(){

        require_once "../views/newCategorie.php";

        if (isset($_POST['BtnNewCategorie'])){
            $CreateCategorie = new CUDAdmin();
            $EnvoiDesDonneesNewCategorie = $CreateCategorie-> CreateACategorie();
            $EnvoiDesDonneesNewCategorie;

            header("location:http://localhost/Projet_6_FakeLBC/gestionCategorie");
        }
    }

//---------------------------------LECTURE D'UNE CATEGORIE SELON SON ID------------------------------------------------------------------------------------>
    function ShowCategoireID(){
        $ReadCategorieById = new ReadAdmin();

        $ShowCategorieID = $ReadCategorieById->ReadCategorieID();

        require_once "../views/deleteCategorie.php";

        if (isset($_POST['BtnDeleteCategorie'])){
            $DeleteCategorie = new CUDAdmin();
            $EnvoiSuppresionCategorie = $DeleteCategorie-> DeleteCategorie();
            $EnvoiSuppresionCategorie;

            header("location:http://localhost/Projet_6_FakeLBC/gestionCategorie");
        }

    }

//---------------------------------LECTURE D'UN ADMIN SELON SON ID------------------------------------------------------------------------------------>
    function ShowAdminID(){
            $ReadAdminById = new ReadAdmin();

            $ShowAdminID = $ReadAdminById->ReadAdminID();

            require_once "../views/deleteAdmin.php";

            if (isset($_POST['BtnDeleteAdmin'])){
                $DeleteAdmin = new CUDAdmin();
                $EnvoiSuppresionAdmin = $DeleteAdmin-> DeleteAdmin();
                $EnvoiSuppresionAdmin;

                header("location:http://localhost/Projet_6_FakeLBC/gestionAllUser_Admin");
            }

        }

//---------------------------------SUPPRESSION D'UN ADMIN DEPUIS UN COMPTE ADMIN------------------------------------------------------------------------------------>
    function DeleteAnnonceAdmin(){
        $ReadAnnonceById = new ReadUser();
        $ShowIDAnnonce=$ReadAnnonceById->ReadAnnonceID();

        require_once "../views/DeleteAnnonceAdmin.php";
        if (isset($_POST['BtnDeleteAnnonceAdmin'])){
            $DeleteAnnonceAdmin = new CUDAdmin();
            $EnvoiSuppresionAnnonce = $DeleteAnnonceAdmin-> DeleteAnnonceAdmin();
            $EnvoiSuppresionAnnonce;

            header("location:http://localhost/Projet_6_FakeLBC/gestionAllAnnonces");
        }

    }