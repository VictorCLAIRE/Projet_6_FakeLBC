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
    <div class="titrePage container-fluid">
        <h1>Connectez-vous</h1>
    </div>
            <div class="formulaireConnexion">
                <div class="ContenueDuFomulaireConnexion">
                    <form class="" method="post" >
                        <div class="form-group">
                            <label for="email_loger">Email</label>
                            <input class="form-control" type="email" id="email_loger" name="email_loger">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe</label>
                            <input class="form-control" type="text" id="mdp_loger" name="password_loger">
                        </div>
                        <button class="btn btn-success" type="submit" value="connexion_user" name="connexion" >Connexion</button>
                    </form>
                </div>
                <?php
                if(isset($_POST['connexion'])){
                    $logUser->VerificationUser();
                    $logAdmin->VerificationAdmin();
                }
                }
                ?>
            </div>






