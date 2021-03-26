<?php
require_once "../models/CRUD/CRUD_ADMIN/ReadAdmin.php";
$ClasseReadAdmin = new ReadAdmin();
$ClasseReadAdmin->ReadUser();

?>

<h1>SUPPRESION DU USER</h1>
<table class="table table-hover">
    <tbody>
    <tr class="table-warning">
        <th scope="row">id_user</th>
        <td>Nom user</td>
        <td>email user</td>
        <td>password user</td>
    </tr>
    <?php
    foreach ($ShowUserID as $row ){
        ?>
        <tr class="table-secondary">
            <th scope="row"><?=$row['id_user']?></th>
            <td><?=$row['name_user']?></td>
            <td><?=$row['email_user']?></td>
            <td><?=$row['password_user']?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<form method="post">
    <button type="submit" class="btn btn-danger btn-block btn-lg" name="BtnDeleteUser">Suppresion de l'users</button>
</form>