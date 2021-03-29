<?php

require_once "../models/Database.php";


class CUDUser extends Database{

    public function CreateAnnonce(){
        $db = $this->getPDO();

        $name_new_annonce = $_POST['name_new_annonce'];
        $description_new_annonce = $_POST['description_new_annonce'];
        $prix_new_annonce = $_POST['prix_new_annonce'];
        $categorie_new_annonce = $_POST['categorie_new_annonce'];
        $photo_new_annonce = $_POST['photo_new_annonce'];
        $region_new_annonce = $_POST['region_new_annonce'];
        $user_new_annonce = $_POST['user_new_annonce'];


        $sql = "INSERT INTO `projet_6_annonces`(`nom_annonce`, `description_annonce`, `prix_annonce`, `categorie_annonce`, `photo_annonce`, `region_annonce`, `user_annonce`) VALUES (?,?,?,?,?,?,?)";

        $req = $db->prepare($sql);

        $req->bindParam(1, $name_new_annonce);
        $req->bindParam(2, $description_new_annonce);
        $req->bindParam(3, $prix_new_annonce);
        $req->bindParam(4, $categorie_new_annonce);
        $req->bindParam(5, $photo_new_annonce);
        $req->bindParam(6, $region_new_annonce);
        $req->bindParam(7, $user_new_annonce);

        $req->execute();

    }

    public function UploadImg(){

        //Gestion upload image
        if(isset($_FILES['photo_new_annonce'])){
            $target_dir = 'assets/img/';
            $img_annonce = $target_dir . basename($_FILES['photo_new_annonce']['name']);
            $_POST['photo_new_annonce'] = $img_annonce;

            if(move_uploaded_file($_FILES['photo_new_annonce']['tmp_name'], $img_annonce)){

            }else{
                echo '<p class="alert-danger">Une erreur s\'est produite, le fichier n\'est pas valide !</p>';
            }
        }else{
            echo "";
        }
    }

    public function UploadImgUpdate(){

        //Gestion upload image
        if(isset($_FILES['photo_update_annonce'])){
            $target_dir = 'assets/img/';
            $img_annonce = $target_dir . basename($_FILES['photo_update_annonce']['name']);
            $_POST['photo_update_annonce'] = $img_annonce;

            if(move_uploaded_file($_FILES['photo_update_annonce']['tmp_name'], $img_annonce)){

            }else{
                echo '<p class="alert-danger">Une erreur s\'est produite, le fichier n\'est pas valide !</p>';
            }
        }else{
            echo "";
        }
    }

    public function UpdateAnnonce(){
        $db = $this->getPDO();

        $id_update_annonce = $_GET['ID'];
        $name_update_annonce = $_POST['name_update_annonce'];
        $description_update_annonce = $_POST['description_update_annonce'];
        $prix_update_annonce = $_POST['prix_update_annonce'];
        $categorie_update_annonce = $_POST['categorie_update_annonce'];
        $photo_update_annonce = $_POST['photo_update_annonce'];
        $region_update_annonce = $_POST['region_update_annonce'];
        $user_update_annonce = $_POST['user_update_annonce'];


        $reqUpdate= $db->prepare("UPDATE `projet_6_annonces` SET `nom_annonce`= '$name_update_annonce',`description_annonce`= '$description_update_annonce',`prix_annonce`= '$prix_update_annonce',`categorie_annonce`= '$categorie_update_annonce',`photo_annonce`= '$photo_update_annonce',`region_annonce`= '$region_update_annonce' WHERE `id_annonce` = ?");
        $requete_insertion=$reqUpdate->execute(array($id_update_annonce));


    }

    public function DeleteAnnonceUser(){

        $db = $this->getPDO();
        $ID = $_GET['ID'];

        $reqDelete= $db->prepare("DELETE FROM `projet_6_annonces` WHERE `id_annonce`= ?");
        $requete_insertion=$reqDelete->execute(array($ID));

    }
}