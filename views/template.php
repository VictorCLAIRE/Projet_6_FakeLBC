<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title><?= $title ?></title>
</head>

<body>
    <!-- Header-->
    <header>
        <?php
        require "menu.php";
        ?>
    </header>
    <!-- Content-->

    <div class="container">
        <?= $content ?>
    </div>

    <!-- Footer-->
    <footer>
        <?php
        require "footer.php";
        ?>
    </footer>

    <script></script>

</body>
</html>
