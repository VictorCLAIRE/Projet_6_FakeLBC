<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require_once '../vendor/autoload.php';
require_once "../models/Database.php";

class Mailing extends Database
{

    public function SendMailinscription(){

            $name_user_inscription=$_POST['name_user_inscrition'];
            $email_user_inscription=$_POST['email_user_inscription'];
            $password_user_inscription=$_POST['password_user_inscription'];

            //Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'e9d3b60eb15a5e';                     //SMTP username
                $mail->Password   = 'a04b371000613d';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 2525;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                $mail->setLanguage('fr', '../vendor/phpmailer/phpmailer/language/');
                $mail->CharSet='UTF-8';

                //Recipients
                $mail->setFrom('Gitenb@example.com', 'Annonce RESA');
                $mail->addAddress('Gitenb@example.com', 'Annonce RESA');
                $mail->addReplyTo('Gitenb@example.com', 'Annonce RESA');

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML

                $mail->Subject = "Validation de votre inscription";
                $url = "http://localhost/Projet_6_FakeLBC/validationInscription.php&name=".$name_user_inscription."&email=".$email_user_inscription."&password=".$password_user_inscription."";

                    $mail->Body    = '
                 <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="Content-Type" content="text/html">
                        <title>Votre reservation chez locagite.com</title>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <body style="background-color: #1D2326; color: #F0F1F2;">
                    <div style="background-color: #F0F1F2; color: #1D2326; padding: 20px;">
                        
                        <h3 style="color: #1D2326">Le MAUVAIS COIN</h3>
                        <p>Vous venez de créer un compte chez nous. Merci!</p>
                        <form method="post" action="http://localhost/Projet_6_FakeLBC/validationInscription.php"
                            <input type="hidden" name="name_user_inscription">'.$name_user_inscription.'</input>
                            <input type="hidden" name="email_user_inscription">'.$email_user_inscription.'</input>
                            <input type="hidden" name="password_user_inscription">'.$password_user_inscription.'</input>
                            <p>Votre nom: '.$name_user_inscription.'</p>
                            <p>Votre email '.$email_user_inscription.':</p>
                            <p>Votre password '.$password_user_inscription.' :</p>
                            <a type="submit" href="' . $url . '" style="background-color: darkred; color: #F0F1F2; padding: 10px;margin: 2px; text-decoration: none;">Confimer votre inscription</a><br />
                        </form>
                        
                        <br />
                        <p>Merci d\'utiliser notre site web</p> 
                    </div>
                    </body>
                    </html>
                    ';
                    $mail->body = "MIME-Version: 1.0" . "\r\n";
                    $mail->body .= "Content-type:text/html;charset=utf8" . "\r\n";
                    $mail->send();

                header("http://localhost/Projet_6_FakeLBC/validationInscription.php");
            }catch (Exception $e){
                echo "<p class='alert-danger p-3'>Erreur lors de la tentative d'envoi de l'email {$mail->ErrorInfo}</p>";
            }

    }

}