<?php

require_once "../models/Database.php";

class ReadAdmin extends Database
{
    //Function Affichage De Toutes Les Annonces Par Ordre Decroissant (ADMIN)

    public function ShowAllAnnonce(){
        $db = $this->getPDO();
        $sql ="SELECT * FROM projet_6_annonces ORDER BY id_annonce DESC";
        $stmt = $db->query($sql);
        return $stmt;

    }

    public function ReadAllAdmin(){
        $db = $this->getPDO();
        $sql ="SELECT * FROM projet_6_admin ORDER BY id_admin DESC";
        $stmt = $db->query($sql);
        return $stmt;
    }

    public function ReadAllUser(){
        $db = $this->getPDO();
        $sql ="SELECT * FROM projet_6_user ORDER BY id_user DESC";
        $stmt = $db->query($sql);
        return $stmt;

    }

    public function ReadAllCategorie(){
        $db = $this->getPDO();
        $sql ="SELECT * FROM projet_6_categories ORDER BY id_categorie DESC";
        $stmt = $db->query($sql);
        return $stmt;

    }

    public function ReadUser(){

        $db = $this->getPDO();
        $ID = $_GET['ID'];

        $reqRead= $db->prepare("SELECT * FROM projet_6_user WHERE id_user = ?");

        $reqRead->execute(array($ID));

        $reqinsertion = $reqRead->fetchAll(PDO::FETCH_ASSOC);

        return $reqinsertion;






    }

    public function ReadAdmin(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_admin WHERE id_admin = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_GET['ID']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    public function ReadCategorieID(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_categories WHERE id_categorie = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_GET['ID']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    public function ReadAdminID(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_admin WHERE id_admin = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_GET['ID']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

}