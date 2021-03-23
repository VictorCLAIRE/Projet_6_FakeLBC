<?php

require "Models/Database.php";

class ReadAdmin extends Database
{
    public function ShowAllAnnonce(){

        $db = $this->getPDO();
        $sql ="SELECT * FROM projet_6_annonces ORDER BY id_annonce DESC";
        $stmt = $sql->query($sql);
        return $stmt;
        
    }

}