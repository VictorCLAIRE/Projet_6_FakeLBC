<?php

$id_admin = $_GET['ID'];

require_once "../models/CRUD/CRUD_ADMIN/ReadAdmin.php";
$ClasseReadAdmin = new ReadAdmin();
$ClasseReadAdmin ->ReadAdmin();

?>

    <h2>Modifier les données de l'admin:</h2>
    <table class="table table-hover">
        <tbody>
        <tr class="table-danger">
            <th scope="row">id_admin</th>
            <td>Nom admin</td>
            <td>email admin</td>
            <td>password admin</td>

        </tr>
        <?php
        foreach ($ShowIDAdmin as $row ){
            ?>
            <tr class="table-secondary">
                <th scope="row"><?=$row['id_admin']?></th>
                <td><?=$row['name_admin']?></td>
                <td><?=$row['email_admin']?></td>
                <td><?=$row['password_admin']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div>
        <form method="post" >
            <div class="form-group">
                <label for="name_admin_update">Name admin</label>
                <input class="form-control" required type="text" id="name_update_admin" name="name_update_admin">
            </div>
            <div class="form-group">
                <label for="email_admin_update">Email admin</label>
                <input class="form-control" required type="text" id="email_update_admin" name="email_update_admin">
            </div>
            <div class="form-group">
                <label for="password_admin_update">password admin</label>
                <input class="form-control" required type="text" id="password_update_admin" name="password_update_admin">
            </div>
            <button class="btn btn-primary btn-block btn-lg text-center" name="BtnUpdateAdmin" type="submit">Modifier cet admin</button>
        </form>
    </div>





