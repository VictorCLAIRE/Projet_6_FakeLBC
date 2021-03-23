<?php

require_once "../models/Database.php";

class ReadVisitor extends Database
{
    //Requète d'affichage de tous les Articles (Visitor)
    public function ReadAllAnnonce(){

        $db = $this->getPDO();
        $sql = "SELECT * FROM projet_6_annonces INNER JOIN projet_6_user ON projet_6_annonces.user_annonce = projet_6_user.id_user INNER JOIN  projet_6_categories ON projet_6_annonces.categorie_annonce = projet_6_categories.id_categorie INNER JOIN projet_6_regions ON projet_6_annonces.region_annonce = projet_6_regions.id_region";
        $stmt = $db->query($sql);
        return $stmt;

    }

}