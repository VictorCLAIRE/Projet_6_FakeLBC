<?php

require "Models/Database.php";

class LectureClefEtrangere extends Database
{
    public function LectureDepartement(){

        $db = $this-> getPDO();
        $req = $db->query("SELECT * FROM projet_6_departement");

        foreach($req as $row){
            ?>
            <option value="<?= $row['id_departement']?>"><?= $row['nom_departement']?></option>
            <?php
        }
    }

    public function LectureCategorie(){

        $db = $this-> getPDO();
        $req = $db->query("SELECT * FROM projet_6_categorie");

        foreach($req as $row){
            ?>
            <option value="<?= $row['id_categorie']?>"><?= $row['name_categorie']?></option>
            <?php
        }
    }


}