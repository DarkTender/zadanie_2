<?php require_once __DIR__ . "/parts/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moja stránka</title>
        <link rel="stylesheet" href="/zadanie_2/zadanie_2/css/style.css">
        <link rel="stylesheet" href="/zadanie_2/zadanie_2/css/portfolio.css">
        <link rel="stylesheet" href="/zadanie_2/zadanie_2/css/banner.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    <?php include "parts/header.php"; ?>

<main>
    <section class="banner">
        <div class="container text-white">
            <h1>Portfólio</h1>
        </div>
    </section>

    <section class="container">
        <?php generatePortfolio("img/portfolio", "data/datas.json"); ?>
    </section>

</main>

<?php include "parts/footer.php"; ?>

<script src="js/menu.js"></script>
</body>
</html>