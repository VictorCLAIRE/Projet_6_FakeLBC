<h1>GESTION DES CATEGORIES</h1>

<h2>Ajout d'une catégorie</h2>

<a href="newCategorie.php" class="btn btn-success " >Ajout d'une catégorie</a>

<h2>Gestion des annonces</h2>
<table class="table table-hover">
    <tbody>
    <tr class="table-danger">
        <th scope="row">id_catégorie</th>
        <td>Nom catégorie</td>
        <td>Supprimer</td>
    </tr>
    <?php
    foreach ($ShowAllCategorie as $row ){
        ?>
        <tr class="table-secondary">
            <th scope="row"><?=$row['id_categorie']?></th>
            <td><?=$row['name_categorie']?></td>
            <td><a class="btn btn-danger " href="deleteCategorie.php?ID=<?=$row["id_categorie"]?>">Supprimer</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

