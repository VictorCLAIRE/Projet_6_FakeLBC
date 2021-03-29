<?php

    require_once "../Models/Database.php";

    class CUDAdmin extends Database
    {
        public function DeleteUserByAdmin(){

            $db = $this->getPDO();
            $ID = $_GET['ID'];

            $reqDelete= $db->prepare("DELETE FROM `projet_6_user` WHERE `id_user`= ?");

            $requete_insertion=$reqDelete->execute(array($ID));

        }

        public function CreateAdmin(){
            $db = $this->getPDO();

            $name_new_admin = $_POST['name_new_admin'];
            $email_new_admin = $_POST['email_new_admin'];
            $password_new_admin = $_POST['password_new_admin'];

            $sql = "INSERT INTO `projet_6_admin`(`name_admin`, `email_admin`, `password_admin`) VALUES (?,?,?)";

            $req = $db->prepare($sql);

            $req->bindParam(1, $name_new_admin);
            $req->bindParam(2, $email_new_admin);
            $req->bindParam(3, $password_new_admin);

            $req->execute();
        }

        public function UpdateAdmin(){
            $db = $this->getPDO();

            $id_update_admin = $_GET['ID'];
            $name_update_admin = $_POST['name_update_admin'];
            $email_update_admin = $_POST['email_update_admin'];
            $password_update_admin = $_POST['password_update_admin'];

            $sql = "INSERT INTO `projet_6_admin`(`name_admin`, `email_admin`, `password_admin`) VALUES (?,?,?)";

            $reqUpdate= $db->prepare("UPDATE `projet_6_admin` SET `name_admin`= '$name_update_admin',`email_admin`= '$email_update_admin',`password_admin`= '$password_update_admin' WHERE `id_admin` = ?");
            $requete_insertion=$reqUpdate->execute(array($id_update_admin));
        }

        public function CreateACategorie(){
            $db = $this->getPDO();

            $name_categorie = $_POST['name_categorie'];

            $sql = "INSERT INTO `projet_6_categories`(`name_categorie`) VALUES (?)";

            $req = $db->prepare($sql);

            $req->bindParam(1, $name_categorie);

            $req->execute();
        }

        public function DeleteCategorie(){

            $db = $this->getPDO();
            $ID = $_GET['ID'];

            $reqDelete= $db->prepare("DELETE FROM `projet_6_categories` WHERE `id_categorie`= ?");

            $requete_insertion=$reqDelete->execute(array($ID));

        }

        public function DeleteAdmin(){

            $db = $this->getPDO();
            $ID = $_GET['ID'];

            $reqDelete= $db->prepare("DELETE FROM `projet_6_admin` WHERE `id_admin`= ?");

            $requete_insertion=$reqDelete->execute(array($ID));

        }

        public function DeleteAnnonceAdmin(){

            $db = $this->getPDO();
            $ID = $_GET['ID'];

            $reqDelete= $db->prepare("DELETE FROM `projet_6_annonces` WHERE `id_annonce`= ?");
            $requete_insertion=$reqDelete->execute(array($ID));

        }



    }

