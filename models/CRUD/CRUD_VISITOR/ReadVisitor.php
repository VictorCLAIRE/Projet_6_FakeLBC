<?php

require_once "../models/Database.php";

class ReadVisitor extends Database
{
    //Requète d'affichage de tous les Articles (Visitor)
    public function ReadAllAnnonce(){

        $db = $this->getPDO();
        $sql = "SELECT * FROM projet_6_annonces INNER JOIN projet_6_user ON projet_6_annonces.user_annonce = projet_6_user.id_user 
                                                INNER JOIN  projet_6_categories ON projet_6_annonces.categorie_annonce = projet_6_categories.id_categorie
                                                INNER JOIN projet_6_regions ON projet_6_annonces.region_annonce = projet_6_regions.id_region ORDER BY id_annonce DESC ";

        $stmt = $db->query($sql);

        return $stmt;

    }
    //Requète d'affichage d'après une recherche (Visitor)
    public function ReadSearchAnnonce(){

        $db = $this->getPDO();
        $sql = "SELECT * FROM projet_6_annonces INNER JOIN projet_6_user ON projet_6_annonces.user_annonce = projet_6_user.id_user 
                                                INNER JOIN  projet_6_categories ON projet_6_annonces.categorie_annonce = projet_6_categories.id_categorie
                                                INNER JOIN projet_6_regions ON projet_6_annonces.region_annonce = projet_6_regions.id_region
                                                WHERE categorie_annonce = ? AND region_annonce = ? ORDER BY id_annonce DESC";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_POST['categorieSearch']);
        $req->bindParam(2, $_POST['regionSearch']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    //Requète d'affichage d'après une recherche MAP (Visitor)
    public function ReadSearchMapAnnonce(){
        $id_region=$_GET['id_region'];

        $db = $this->getPDO();
        $sql = "SELECT * FROM projet_6_annonces INNER JOIN projet_6_user ON projet_6_annonces.user_annonce = projet_6_user.id_user 
                                                INNER JOIN  projet_6_categories ON projet_6_annonces.categorie_annonce = projet_6_categories.id_categorie
                                                INNER JOIN projet_6_regions ON projet_6_annonces.region_annonce = projet_6_regions.id_region
                                                WHERE region_annonce = ? ORDER BY id_annonce DESC";

        $req = $db->prepare($sql);
        $req->bindParam(1,$id_region );
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    //Requète d'affichage d'après une recherche by ID (Visitor)
    public function ReadAnnonceByID(){

        $db = $this->getPDO();
        $sql = "SELECT * FROM projet_6_annonces INNER JOIN projet_6_user ON projet_6_annonces.user_annonce = projet_6_user.id_user 
                                                INNER JOIN  projet_6_categories ON projet_6_annonces.categorie_annonce = projet_6_categories.id_categorie
                                                INNER JOIN projet_6_regions ON projet_6_annonces.region_annonce = projet_6_regions.id_region
                                                WHERE  id_annonce = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_GET['ID']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}