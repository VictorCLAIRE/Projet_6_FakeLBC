<h1>GESTION DES ANNONCES</h1>

<h2>Gestion des catégories</h2>

<a href="GestionCategorie" class="btn btn-success " >Gestion des catégories</a>

<h2>Gestion des annonces</h2>

<table class="table table-hover">
    <tbody>
    <tr class="table-danger">
        <th scope="row">id_anonce</th>
        <td>Nom annonce</td>
        <td>Description annonce</td>
        <td>Photo annonce</td>
        <td>User annonce</td>
        <td>Supprimer</td>
    </tr>
    <?php
    foreach ($ShowAllAnnonceAdmin as $row ){
        ?>
        <tr class="table-secondary">
            <th scope="row"><?=$row['id_annonce']?></th>
            <td><?=$row['nom_annonce']?></td>
            <td><?=$row['description_annonce']?></td>
            <td><img class="" src="<?=$row['photo_annonce']?>" width="150" height="150"></td>
            <td><?=$row['user_annonce']?></td>
            <td><a class="btn btn-danger " href="deleteAnnocne.php?ID=<?=$row["id_annonce"]?>">Supprimer</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

