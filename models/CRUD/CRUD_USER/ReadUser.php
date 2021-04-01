<?php

require_once "../models/Database.php";

class ReadUser extends Database{

    public function ReadAllAnnonceUser(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_annonces INNER JOIN projet_6_user ON projet_6_annonces.user_annonce = projet_6_user.id_user 
                                                INNER JOIN  projet_6_categories ON projet_6_annonces.categorie_annonce = projet_6_categories.id_categorie
                                                INNER JOIN projet_6_regions ON projet_6_annonces.region_annonce = projet_6_regions.id_region WHERE user_annonce = ? ORDER BY id_annonce DESC";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_SESSION['ID_user']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    public function ReadAnnonceID(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_annonces WHERE id_annonce = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_GET['ID']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    public function ReadInfoUser(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_user WHERE id_user = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_SESSION['ID_user']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }


}