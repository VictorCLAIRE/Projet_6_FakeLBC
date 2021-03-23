<?php
require_once "../models/CRUD/CRUD_VISITOR/ReadVisitor.php";

    function ShowAllAnnonce(){

        $annonces = new ReadVisitor();

        $allAnnonces = $annonces->ReadAllAnnonce();
        require_once "../views/accueil.php";

    }