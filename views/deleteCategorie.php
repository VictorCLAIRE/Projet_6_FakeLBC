<?php

$id_categorie = $_GET['ID'];

?>

<h2>Supprimer la catégorie:</h2>
<table class="table table-hover">
    <tbody>
<?php
foreach ($ShowCategorieID as $row ){
    ?>
    <tr class="table-secondary">
        <th scope="row"><?=$row['id_categorie']?></th>
        <td><?=$row['name_categorie']?></td>
        <td><form method="post"><button type="submit" class="btn btn-danger btn-block btn-lg" name="BtnDeleteCategorie">Supprimer</button></form></td>
    </tr>
    <?php
}
?>
    </tbody>
</table>







