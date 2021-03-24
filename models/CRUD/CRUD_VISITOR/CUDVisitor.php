<?php
require_once "../Models/Database.php";

class CUDVisitor extends Database
{
    public function CreateUser()
    {
        $db = $this->getPDO();

        $name_user_inscrption = $_GET['name'];
        $email_user_inscrption = $_GET['email'];
        $password_user_inscrption = $_GET['password'];

        $sql = "INSERT INTO `projet_6_user`(`name_user`, `email_user`, `password_user`) VALUES (?,?,?)";

        $req = $db->prepare($sql);

        $req->bindParam(1, $name_user_inscrption);
        $req->bindParam(2, $email_user_inscrption);
        $req->bindParam(3, $password_user_inscrption);

        $req->execute();

    }

}