<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title><?= $title ?></title>
</head>

<div>
    <!-- Header-->
    <header>
        <?php
        require "menu.php";
        ?>
    </header>
    <!-- Content-->

    <div class="mt-5">
        <br>
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
