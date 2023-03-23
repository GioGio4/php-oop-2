<?php
require_once __DIR__ . "/Data/obj_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>

<body>

    <div class="container">

        <div class="row mt-5 g-3">
            <?php foreach ($food_products as $food) : ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?= $food->picture ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $food->title ?></h5>
                        <p>Prezzo: €<?= $food->price ?></p>
                        <p>Categoria: <?= $food->categories->name_categories ?><?= $food->categories->icon ?></p>
                        <p>Formato: <?= $food->formato ?></p>
                        <p>Gusto: <?= $food->gusto ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php foreach ($bed_products as $bed) : ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?= $bed->picture ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $bed->title ?></h5>
                        <p>Prezzo: €<?= $bed->price ?></p>
                        <p>Categoria: <?= $bed->categories->name_categories ?><?= $bed->categories->icon ?></p>
                        <p>Materiale: <?= $bed->materiale ?></p>
                        <p>Colore: <?= $bed->colore ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php foreach ($accessories_products as $accessories) : ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?= $accessories->picture ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $accessories->title ?></h5>
                        <p>Prezzo: €<?= $accessories->price ?></p>
                        <p>Categoria:
                            <?= $accessories->categories->name_categories ?><?= $accessories->categories->icon ?>
                        </p>
                        <p>Materiale: <?= $accessories->materiale ?></p>
                        <p>Colore: <?= $accessories->colore ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>



</body>

</html>