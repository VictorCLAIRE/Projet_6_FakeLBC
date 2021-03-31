<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require_once '../vendor/autoload.php';
require_once "../models/Database.php";

class MailingToBuy extends Database
{
    public function SendMailToBuy(){

        $name_ask_to_buy = $_POST['name_ask_to_buy'];
        $email_ask_to_buy = $_POST['email_ask_to_buy'];
        $message_ask_to_buy = $_POST['message_ask_to_buy'];

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

            $mail->Subject = "Demande concernant une de vos annonces mis en ligne";
            $url = "";

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
                        <p>Vous avez recu un message d\' un potentiel acheteur!</p>

                            <p>'.$name_ask_to_buy.' vous écrit :</p>
                            <p>'.$message_ask_to_buy.':</p>
                            <p>Pour lui répondre : '.$email_ask_to_buy.' </p>

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