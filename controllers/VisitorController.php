<?php
require_once "../models/CRUD/CRUD_VISITOR/ReadVisitor.php";
require_once "../models/CONNEXION/ConnexionAdmin.php";
require_once "../models/Mailing.php";
require_once "../models/Pdf.php";
require_once "../models/CRUD/CRUD_VISITOR/CUDVisitor.php";



//---------------------------------LECTURE DE TOUTES LES ANNONCES------------------------------------------------------------------------------------>
    function ShowAnnonceVisitor(){

        $ReadAnnonces = new ReadVisitor();
        $allAnnonces = $ReadAnnonces->ReadAllAnnonce();

        if(isset($_POST['exportPdf'])){
            $pdfCreate = new Pdf();
            $DownloadPdf = $pdfCreate->CreatePdf();
            $DownloadPdf;
        }

        require_once "../views/allAnnonceVisitor.php";
    }

//---------------------------------LECTURE DES ANNONCES SELON LES CRITERES DE RECHERCHE DU FORMULAIRE----------------------------------------------->
    function ShowAnnonceSearchVisitor(){

        $ReadAnnonces = new ReadVisitor();
        $searchAnnonces = $ReadAnnonces->ReadSearchAnnonce();

        require_once "../views/resultatRecherche.php";
    }

//---------------------------------LECTURE DES ANNONCES SELON LES CRITERES DE RECHERCHE DE LA CARTE INTERRACTIVE------------------------------------>
    function ShowAnnonceSearchMapVisitor(){

        $ReadAnnonces = new ReadVisitor();

        $searchAnnoncesMap = $ReadAnnonces->ReadSearchMapAnnonce();

        require_once "../views/resultatRechercheMap.php";
    }

//---------------------------------LECTURE D'UNE ANNONCES SELON SON ID------------------------------------------------------------------------------>
    function ShowAnnonceByIdVisitor(){

        $ReadAnnonces = new ReadVisitor();

        $searchAnnoncesById = $ReadAnnonces->ReadAnnonceByID();

        require_once "../views/achatAnnonce.php";
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

//---------------------------------ENVOI DES DONNES DU FORMULAIRE D'INSCRIPTION DANS LE MAIL--------------------------------------------------------->
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

//---------------------------------RECUP DES DONNES DU FORMULAIRE D'INSCRIPTION DANS LE MAIL ET INSERTION DES DONNES DANS LA BD---------------------->
    function ValidationInscription(){

        require_once "../views/validationInscription.php";
        $ValidationInscription = new CUDVisitor();
        $SaveInscription = $ValidationInscription->CreateUser();
        $SaveInscription;

    }


