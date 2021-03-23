<?php
require "../Models/CONNEXION/ConnexionAdmin.php";
require "../Models/CONNEXION/ConnexionUser.php";

//Instance de la classe User/Admin
$logUser= new ConnexionUser();
$logAdmin= new ConnexionAdmin();
?>

<form class="" method="post" >
    <h2>FORMUALIRE USER</h2>
    <div class="form-group">
        <label for="email_admin_loger">Email</label>
        <input class="form-control" type="email" id="email_user_loger" name="email_user_loger">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input class="form-control" type="text" id="mdp_user_loger" name="mdp_user_loger">
    </div>
    <button class="btn btn-success" type="submit" value="Connexion_user" name="Connexion_user" >Connexion</button>
</form>
<?php
if(isset($_POST['Connexion_user'])){
    $logUser->userLogin();
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
        <input class="form-control" type="text" id="mdp_admin_loger" name="mdp_admin_loger">
    </div>
    <button class="btn btn-success" type="submit" value="Connexion_admin" name="Connexion_admin" >Connexion</button>
</form>
<?php
if(isset($_POST['Connexion_admin'])){
    $logAdmin->userLogin();
}