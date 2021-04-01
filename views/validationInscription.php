<?php
$name_user_inscrption = $_GET['name'];
$email_user_inscrption = $_GET['email'];
$password_user_inscrption = $_GET['password'];
$phone_user_inscrption = $_GET['phone'];

?>

<h1>Votre insciription est validée!</h1>

<?php
header("refresh: 1, http://localhost/Projet_6_FakeLBC/connexion");