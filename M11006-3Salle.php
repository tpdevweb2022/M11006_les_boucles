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
            max-width: 960px;
            margin: auto;
        }

        .one_car {
            margin: 3rem auto;
            display: flex;
            border: 1px solid black;
            border-radius: 15px;
        }

        .one_car>div {
            width: 50%;
        }

        .infos_car {
            padding: 2rem;
            background-color: #ececec;
            border-radius: 0 15px 15px 0;
        }

        .flex-between {
            display: flex;
            justify-content: space-between;
            font-size: 1.2rem;
        }

        .img_car {
            width: 100%;
            height: 100%;
            border-radius: 14px 0 0 14px;
            object-fit: cover;
        }
    </style>
</head>

<body>


    <div>
        <a href="/">Retour à l'index</a>
    </div>

    <div class="all_cars">
        <!-- On boucle nos résultats -->
        <?php foreach ($cars as $car) { ?>
            <div class="one_car">
                <div>
                    <img src='<?= $car['img'] ?>' class="img_car" alt='<?= $car["model"] ?> <?= $car["brand"]  ?>'>
                </div>
                <div class="infos_car">
                    <h2><?= $car["brand"]  ?> <?= $car["model"] ?></h2>
                    <div class="flex-between">
                        <span>Puissance : </span>
                        <span><?= $car['power'] ?> chevaux</span>
                    </div>
                    <div class="flex-between">
                        <span>Prix : </span>
                        <span><?= $car['price'] ?> €</span>
                    </div>
                    <div class="flex-between">
                        <span>Masse : </span>
                        <span><?= $car['weight'] ?> kg</span>
                    </div>
                </div>

            </div>
        <?php }; ?>
        <!-- Fin de la boucle -->
    </div>
</body>

</html>