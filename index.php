<?php

require "inc/function.php";

$shoes = query("SELECT * FROM shoes");

$accs = query("SELECT * FROM accs");


if(isset($_POST["cari"])){
    $shoes = cari($_POST["keyword"]);
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css?=<?= time() ?>">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sportify</title>
</head>

<body>

    <!-- navbar -->

    <?php include("assets/partikels/navbar.php") ?>

    <!-- Content -->

    <?php include("assets/partikels/mainpage.php") ?>

    <!-- New Arrivals -->

    <?php include("assets/partikels/card.php") ?>

    <!-- Paralax -->

    <?php include("assets/partikels/paralax.php") ?>

    <!-- Accesoris -->

    <?php include("assets/partikels/card2.php") ?>

    <!-- End Content -->

    <?php include("assets/partikels/lastcontent.php") ?>

    <!-- Footer -->

    <?php include("assets/partikels/footer.php") ?>







    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>