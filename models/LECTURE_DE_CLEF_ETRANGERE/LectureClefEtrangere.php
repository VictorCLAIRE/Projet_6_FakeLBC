<?php

require_once "../models/Database.php";

class LectureClefEtrangere extends Database
{
    public function LectureRegion(){

        $db = $this-> getPDO();
        $req = $db->query("SELECT * FROM projet_6_regions");

        foreach($req as $row){
            ?>
            <option value="<?= $row['id_region']?>"><?= $row['name_region']?></option>
            <?php
        }
    }

    public function LectureCategorie(){

        $db = $this-> getPDO();
        $req = $db->query("SELECT * FROM projet_6_categories");

        foreach($req as $row){
            ?>
            <option value="<?= $row['id_categorie']?>"><?= $row['name_categorie']?></option>
            <?php
        }
    }


}