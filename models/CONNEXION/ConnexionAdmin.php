<?php

require "../Models/Database.php";

class ConnexionAdmin extends Database
{
    public function VerificationAdmin(){

        $db = $this-> getPDO();

        if (!empty($_POST['email_admin_loger']) && !empty($_POST['mdp_admin_loger'])) {

            $sql = "SELECT * FROM projet_6_admin WHERE email_admin = ? AND password_admin=?";

            $req = $db->prepare($sql);

            $req->bindParam(1, $_POST['email_admin_loger']);
            $req->bindParam(2, $_POST['password_admin_loger']);

            $req->execute();
            $row=$req->fetch(PDO::FETCH_ASSOC);

            if (($_POST['email_admin_loger'] == $row['email_admin']) && ($_POST['password_admin_loger'] == $row['password_admin'])) {

                session_start();
                $_SESSION['connecter_admin'] = true;
                $_SESSION['email_admin'] = $_POST['email_admin'];
                $_SESSION['name_admin'] = $row['name_admin'];

                echo "FAIRE UNE REDIRECTION admin";
                //header("location:http://localhost/Projet_5_Gite_new/Admin.php");
            } else {
                echo "L'email ou le mdp n'est pas bon";
            }

        } elseif (empty($_POST['email_admin_loger']) || empty($_POST['password_admin_loger'])) {

            echo "<div class='alert alert-danger m-2 text-center' role='alert'>Merci de remplir tous les champs</div>";

        } else {
        }

    }


}