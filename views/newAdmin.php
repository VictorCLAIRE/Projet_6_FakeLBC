<?php

?>
<h1>Nouvel ADMIN :</h1>

<form method="post" >
    <div class="form-group">
        <label for="name_admin_inscription">Name admin</label>
        <input class="form-control" required type="text" id="name_new_admin" name="name_new_admin">
    </div>
    <div class="form-group">
        <label for="email_admin_inscription">Email admin</label>
        <input class="form-control" required type="text" id="email_new_admin" name="email_new_admin">
    </div>
    <div class="form-group">
        <label for="password_admin_inscription">password admin</label>
        <input class="form-control" required type="text" id="password_new_admin" name="password_new_admin">
    </div>
    <button class="btn btn-primary text-center" name="BtnNewAdmin" type="submit">Enregistrer ce nouvel admin</button>

</form>
