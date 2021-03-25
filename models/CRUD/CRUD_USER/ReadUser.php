<?php

require_once "../models/Database.php";

class ReadUser extends Database{

    public function ReadAllAnnonceUser(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM projet_6_annonces WHERE user_annonce = ?";

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


}