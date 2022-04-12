<?php
$cars = [
    [
        "brand" => "Audi",
        "model" => "R8",
        "power" => 456,
        "price" => 149_750,
        "weight" => 1_590,
        "img" => "https://www.largus.fr/images/images/2019-audi-r8-1.jpg"
    ],
    [
        "brand" => "BMW",
        "model" => "M3",
        "power" => 510,
        "price" => 107_600,
        "weight" => 1_730,
        "img" => "https://www.largus.fr/images/images/BMW-M3-M4-2014-premieres-photos-offici_22.jpg?width=940&quality=80"
    ],
    [
        "brand" => "Bugatti",
        "model" => "Veyron",
        "power" => 1_001,
        "price" => 1_100_000,
        "weight" => 1_990,
        "img" => "https://www.largus.fr/images/images/bugatti-veyron-pur-sang.jpg"
    ],
    [
        "brand" => "Ferrari",
        "model" => "F430",
        "power" => 490,
        "price" => 342_851,
        "weight" => 1_230,
        "img" => "https://www.largus.fr/images/images/ferrari-f430_1.jpg"
    ],
    [
        "brand" => "Porsche",
        "model" => "Cayman",
        "power" => 300,
        "price" => 59_692,
        "weight" => 1_460,
        "img" => "https://www.largus.fr/images/images/porsche-718-cayman-27.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-App Cars</title>
    <style>
        .all_cars {
            max-width: 660px;
            margin: auto;
            text-align: left;
        }

        .car {
            margin: 2rem auto;
            border: 1px solid #ccc;
            border-radius: 12px;
            background-color: #ececec;
            display: flex;
            gap: 2rem;
        }

        .infos {
            padding: 1rem;
        }

        img {
            max-width: 300px;
            object-fit: cover;
            border-radius: 12px 0 0 12px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

</body>
<div>
    <a href="/">Retour à l'index</a>
</div>

<div class="all_cars">
    <?php
    array_multisort(array_column($cars, 'price'), SORT_ASC, $cars);
    foreach ($cars as $car) : ?>
        <div class="car">
            <img src='<?= $car["img"] ?>' alt='<?= $car["img"] ?>' class="img" />
            <div class="infos">
                <h2><?= $car["brand"] ?> <?= $car["model"] ?></h2>
                <p>Poids : <?= $car["weight"] ?> kg</p>
                <p>Puissance : <?= $car["power"] ?> ch</p>
                <p>Prix : <?= $car["price"] ?> €</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</html>