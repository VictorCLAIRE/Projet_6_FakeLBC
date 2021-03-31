    <!-------------------APPEL DE LA FONCTION DE LECTURE DES DONNEES DE l'USER---------------------->

    <?php
    foreach ($ShowInfoUser as $row ){
    ?>

    <!-------------------FORMULAIRE D'ENVOI DE MAIL DE L'ACHETEUR AU VENDEUR------------------------->

    <h1>Page pour envoie de mail d'un potentiel acheteur</h1>

    <h2>Merci de remplis les champs</h2>
    <form method="post">
        <div class="form-group">
            <label for="name_ask_to_buy">Name</label>
            <input class="form-control" required type="text" id="name_ask_to_buy" value="<?=$row['name_user']?>" name="name_ask_to_buy">
        </div>
        <div class="form-group">
            <label for="email_ask_to_buy">Email</label>
            <input class="form-control" required type="text" id="email_ask_to_buy" value="<?=$row['email_user']?>" name="email_ask_to_buy">
        </div>
        <div class="form-group">
            <label for="message_ask_to_buy">Message</label>
            <textarea class="form-control" required type="text" id="message_ask_to_buy" name="message_ask_to_buy"></textarea>
        </div>
        <button class="btn btn-primary text-center" name="BtnSendMailToBuy" type="submit">Envoyer le mail</button>
    </form>
    <?php
    }