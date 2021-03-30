<?php
require_once "../models/CRUD/CRUD_USER/CUDUser.php";
require_once "../models/CRUD/CRUD_USER/ReadUser.php";

    function ReadAllAnnonceUser(){

        $ReadAnnonceUser = new ReadUser();

        $ShowAllAnnonceUser=$ReadAnnonceUser->ReadAllAnnonceUser();

        require_once "../views/mesAnnonces.php";
    }

    function CreateNewAnnonce(){

        require_once "../views/newAnnonce.php";
        if (isset($_POST['BtnNewAnnonce'])){
            $CreateAnnonce = new CUDUser();
            $EnvoiDesImages = $CreateAnnonce-> UploadImg();
            $EnvoiDesDonnees = $CreateAnnonce-> CreateAnnonce();
            $EnvoiDesImages ;
            $EnvoiDesDonnees;

            header("location:http://localhost/Projet_6_FakeLBC/mesAnnonces");
        }

    }

    function UpdateAnnonce(){

        $UpdateAnnonceById = new CUDUser();
        $ReadAnnonceById = new ReadUser();
        $EnvoiDesImages = $UpdateAnnonceById-> UploadImgUpdate();
        $ShowIDAnnonce=$ReadAnnonceById->ReadAnnonceID();

        require_once "../views/updateAnnonce.php";
        if (isset($_POST['BtnUpdateAnnonce'])){
            $UpdateAnnonce = new CUDUser();
            $EnvoiDesNewdonnees = $UpdateAnnonce-> UpdateAnnonce();
            $EnvoiDesImages;
            $EnvoiDesNewdonnees;

            header("location:http://localhost/Projet_6_FakeLBC/mesAnnonces");

        }

    }

    function DeleteAnnonceUser(){
        $ReadAnnonceById = new ReadUser();
        $ShowIDAnnonce=$ReadAnnonceById->ReadAnnonceID();

        require_once "../views/deleteAnnonceUser.php";
        if (isset($_POST['BtnDeleteAnnonce'])){
            $DeleteAnnonceUser = new CUDUser();
            $EnvoiSuppresionAnnonce = $DeleteAnnonceUser-> DeleteAnnonceUser();
            $EnvoiSuppresionAnnonce;

            header("location:http://localhost/Projet_6_FakeLBC/mesAnnonces");
        }

    }

    function SenMailToBuy(){

        require_once "../views/sendMailForBuy.php";
        if (isset($_POST['BtnSendMailToBuy'])){
            $SendMailBuy = new MailingToBuy();
            $EnvoiDuMail = $SendMailBuy->SendMailinToBuy();
            $EnvoiDuMail;
            ?>
            <script>
                alert('Vous allez recevoir un mail de confirmation. Merci de cliquer sur le lien ')
            </script>
            <?php
        }
    }