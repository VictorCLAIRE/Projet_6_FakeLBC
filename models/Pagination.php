<?php
require_once "Database.php";

class Pagination extends Database
{
    public function compteDesannonces()
    {
        $db = $this->getPDO();

        // On détermine le nombre total d'articles
        $sql = 'SELECT COUNT(*) AS nb_annonces FROM `projet_6_annonces`;';

        // On prépare la requête
        $query = $db->prepare($sql);

        // On exécute
        $query->execute();
        // On récupère le nombre d'articles
        $result = $query->fetch();

        $nbAnnonces = (int)$result['nb_annonces'];
    }


}