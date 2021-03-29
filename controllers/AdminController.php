<?php
require_once "../models/CRUD/CRUD_ADMIN/ReadAdmin.php";
require_once "../models/CRUD/CRUD_ADMIN/CUDAdmin.php";

    function ShowAllAdmin(){
        $ReadAdmin = new ReadAdmin();

        $ShowAllAdmin = $ReadAdmin->ReadAllAdmin();

        require_once "../views/gestionAllUser_Admin.php";

    }

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

    function ShowAllUser_Admin(){
    $ReadAmin_User = new ReadAdmin();

    $ShowAllUser = $ReadAmin_User->ReadAllUser();
    $ShowAllAdmin = $ReadAmin_User->ReadAllAdmin();

    require_once "../views/gestionAllUser_Admin.php";

    }

    function CreateNewAdmin(){

        require_once "../views/newAdmin.php";

        if (isset($_POST['BtnNewAdmin'])){
            $CreateAdmin = new CUDAdmin();
            $EnvoiDesDonneesNewAdmin = $CreateAdmin-> CreateAdmin();
            $EnvoiDesDonneesNewAdmin;

            header("location:http://localhost/Projet_6_FakeLBC/gestionAllUser_Admin");
        }
    }

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

    function ReadAllAnnonceAdmin(){

        $ReadAnnonceAdmin = new ReadAdmin();

        $ShowAllAnnonceAdmin=$ReadAnnonceAdmin->ShowAllAnnonce();

        require_once "../views/gestionAllAnnonces.php";
    }

    function ShowAllCategorie(){
        $ReadAdmin = new ReadAdmin();
        $ShowAllCategorie = $ReadAdmin->ReadAllCategorie();
        require_once "../views/gestionCategorie.php";

    }

    function CreateNewCategorie(){

        require_once "../views/newCategorie.php";

        if (isset($_POST['BtnNewCategorie'])){
            $CreateCategorie = new CUDAdmin();
            $EnvoiDesDonneesNewCategorie = $CreateCategorie-> CreateACategorie();
            $EnvoiDesDonneesNewCategorie;

            header("location:http://localhost/Projet_6_FakeLBC/gestionCategorie");
        }
    }

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











