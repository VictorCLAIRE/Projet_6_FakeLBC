<?php
require_once "../Models/CONNEXION/ConnexionAdmin.php";
require_once "../Models/CONNEXION/ConnexionUser.php";

//Instance de la classe User/Admin
$logUser= new ConnexionUser();
$logAdmin= new ConnexionAdmin();


//USER
    if (isset($_SESSION['connecter_user']) && $_SESSION['connecter_user'] == true){
        header("location:http://localhost/Projet_6_FakeLBC/accueil");
//ADMIN
    }elseif (isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] == true) {
        header("location:http://localhost/Projet_6_FakeLBC/accueil");
//VISITEUR
    }else{
    ?>
        <form class="" method="post" >
            <h2>FORMULAIRE USER</h2>
            <div class="form-group">
                <label for="email_admin_loger">Email</label>
                <input class="form-control" type="email" id="email_user_loger" name="email_user_loger">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input class="form-control" type="text" id="mdp_user_loger" name="password_user_loger">
            </div>
            <button class="btn btn-success" type="submit" value="connexion_user" name="connexion_user" >Connexion</button>
        </form>
        <?php
        if(isset($_POST['connexion_user'])){
            $logUser->VerificationUser();
        }
        ?>

        <form class="" method="post" >
            <h2>FORMULAIRE ADMIN</h2>
            <div class="form-group">
                <label for="email_admin_loger">Email</label>
                <input class="form-control" type="email" id="email_admin_loger" name="email_admin_loger">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input class="form-control" type="text" id="mdp_admin_loger" name="password_admin_loger">
            </div>
            <button class="btn btn-success" type="submit" value="connexion_admin" name="connexion_admin" >Connexion</button>
        </form>
        <?php
        if(isset($_POST['connexion_admin'])){
            $logAdmin->VerificationAdmin();
        }
    }

