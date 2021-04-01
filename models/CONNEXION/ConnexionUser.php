<?php

require_once "../Models/Database.php";

class ConnexionUser extends Database
{
    public function VerificationUser(){

        $db = $this-> getPDO();

        if (!empty($_POST['email_loger']) && !empty($_POST['password_loger'])) {

            $sql = "SELECT * FROM projet_6_user WHERE email_user = ? AND password_user = ?";

            $req = $db->prepare($sql);

            $req->bindParam(1, $_POST['email_loger']);
            $req->bindParam(2, $_POST['password_loger']);

            $req->execute();
            $row=$req->fetch(PDO::FETCH_ASSOC);

            if (($_POST['email_loger'] == $row['email_user']) && ($_POST['password_loger'] == $row['password_user'])) {

                session_start();
                $_SESSION['connecter_user'] = true;
                $_SESSION['email_user'] = $_POST['email_user'];
                $_SESSION['name_user'] = $row['name_user'];
                $_SESSION['ID_user'] = $row['id_user'];


                header("location:http://localhost/Projet_6_FakeLBC/accueil");
            } else {
                echo "L'email ou le mdp n'est pas bon (user)";
            }

        } elseif (empty($_POST['email_loger']) || empty($_POST['password_loger'])) {

            echo "<div class='alert alert-danger m-2 text-center' role='alert'>Merci de remplir tous les champs</div>";

        } else {
            echo "ERRREUR ELSE";
        }

    }


}