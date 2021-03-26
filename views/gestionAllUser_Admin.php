<h1>GESTION DES USER ET ADMIN</h1>

<h2>Liste des admins</h2>

<a href="newAdmin" class="btn btn-success " >Ajout d'un nouvel Admin</a>

<table class="table table-hover">
    <tbody>
        <tr class="table-danger">
            <th scope="row">id_admin</th>
            <td>Nom admin</td>
            <td>email admin</td>
            <td>password admin</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>
        <?php
        foreach ($ShowAllAdmin as $row ){
        ?>
        <tr class="table-secondary">
            <th scope="row"><?=$row['id_admin']?></th>
            <td><?=$row['name_admin']?></td>
            <td><?=$row['email_admin']?></td>
            <td><?=$row['password_admin']?></td>
            <td><a class="btn btn-warning " href="updateAdmin.php?ID=<?=$row["id_admin"]?>">Modifier</a></td>
            <td><a class="btn btn-danger " href="deleteAdmin.php?ID=<?=$row["id_admin"]?>">Supprimer</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<h2>Liste des users</h2>
<table class="table table-hover">
    <tbody>
        <tr class="table-warning">
            <th scope="row">id_user</th>
            <td>Nom user</td>
            <td>email user</td>
            <td>password user</td>
            <td>Supprimer</td>
        </tr>
        <?php
        foreach ($ShowAllUser as $row ){
            ?>
            <tr class="table-secondary">
                <th scope="row"><?=$row['id_user']?></th>
                <td><?=$row['name_user']?></td>
                <td><?=$row['email_user']?></td>
                <td><?=$row['password_user']?></td>
                <td><a class="btn btn-danger " href="deleteUser.php?ID=<?=$row["id_user"]?>">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>