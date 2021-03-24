<?php
require_once "../models/CRUD/CRUD_VISITOR/ReadVisitor.php";
require_once "../models/CONNEXION/ConnexionAdmin.php";
require_once "../models/Mailing.php";
require_once "../models/CRUD/CRUD_VISITOR/CUDVisitor.php";

    function ShowAllAnnonce(){

        $annonces = new ReadVisitor();
        $allAnnonces = $annonces->ReadAllAnnonce();
        require_once "../views/accueil.php";
    }

    function ConnexionVisitor(){
        $ConnexionAdmin = new ConnexionAdmin();
        $Connexion= $ConnexionAdmin->VerificationAdmin();
        if($Connexion){
            echo "logé";

        }else{
            echo "ERREUR CONTROLLER";
        }

    }
    function Inscription(){

        require_once "../views/formulaireInscription.php";
        if (isset($_POST['BtnInscription'])){
            $inscription = new Mailing();
            $EnvoiDuformulaire = $inscription->SendMailinscription();
            $EnvoiDuformulaire;
            ?>
            <script>
            alert('Vous allez recevoir un mail de confirmation. Merci de cliquer sur le lien ')
            </script>
            <?php
        }
    }
    function ValidationInscription(){

        require_once "../views/validationInscription.php";
        $ValidationInscription = new CUDVisitor();
        $SaveInscription = $ValidationInscription->CreateUser();
        $SaveInscription;

    }

