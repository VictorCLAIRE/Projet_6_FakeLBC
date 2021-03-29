<?php

$id_admin = $_GET['ID'];

?>

<h2>Supprimer l'admin':</h2>
<table class="table table-hover">
    <tbody>
    <?php
    foreach ($ShowAdminID as $row ){
        ?>
        <tr class="table-secondary">
            <th scope="row"><?=$row['id_admin']?></th>
            <td><?=$row['name_admin']?></td>
            <td><?=$row['email_admin']?></td>
            <td><?=$row['password_admin']?></td>
            <td><form method="post"><button type="submit" class="btn btn-danger btn-block btn-lg" name="BtnDeleteAdmin">Supprimer</button></form></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>







