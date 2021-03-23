<?php

class Database
{
    private $host = "localhost";
    private $dbname = "projet_6_FakeLBC";
    private $login = "root";
    private $mdp = "";

    public function getPDO()
    {
        try {
            //Stockage et instance de la classe PDO pour connecter php et mysql
            $db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8", $this->login, $this->mdp);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;

        } catch (PDOException $exception) {
            echo("Erreur de connexion a PDO MySQL :" . $exception->getMessage());
            die();
        }
    }
}

