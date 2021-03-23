
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">ACCUEIL
          <span class="sr-only">(current)</span>
        </a>
      </li>
        <?php
        //VISITEUR
        if (isset($_SESSION['connecter_user']) && $_SESSION['connecter_user'] == true){
        ?>
            <li class="nav-item active">USER : <?=$_SESSION['email_user']?></li>
            <li class="nav-item active"><a class="nav-link" href="admin.php">MES ANNONCES</a></li>
            <li class="nav-item active"><a class="nav-link" href="deconnexion.php">Déconnexion</a></li>

        <?php
        //USER
        }elseif (isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] == true){
        ?>
            <li class="nav-item active">USER : <?=$_SESSION['email_admin']?></li>
            <li class="nav-item active"><a class="nav-link" href="admin.php">GESTION DES ANNONCES</a></li>
            <li class="nav-item active"><a class="nav-link" href="admin.php">GESTION DES USER</a></li>
            <li class="nav-item active"><a class="nav-link" href="deconnexion.php">Déconnexion</a></li>
        <?php
        //ADMIN
        }else{
        ?>
        <li class="nav-item active"><a class="nav-link" href="admin.php">INSCRIPTION</a></li>
        <?php
        }
        ?>
    </ul>
  </div>
</nav>