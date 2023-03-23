<?php

require_once __DIR__ . "/../Models/food_product.php";
require_once __DIR__ . "/../Models/bed_product.php";
require_once __DIR__ . "/../Models/accessories_product.php";


// FOOD PRODUCT

$food_products =  [
    $food_1 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1765990774", "Adult Salmone e Riso", 45.90, $categories_dog, 12, "Salmone"),
    $food_2 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/243843/monge-monoproteico-cane-pate-solo-agnello.jpg?v=1765969737", "Monge SOLO Lattina", 2.99, $categories_dog, 400, "Agnello"),
    $food_3 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/270580/brekkies-cat-bonta-benessere-urinary-care-20kg.jpg?v=1765981496", "Brekkies Cat", 56.99, $categories_cat, 20, "Pollo"),
];

// $food_1 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1765990774", "Adult Salmone e Riso", 45.90, $categories_dog, 12, "Salmone");
// $food_2 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/243843/monge-monoproteico-cane-pate-solo-agnello.jpg?v=1765969737", "Monge SOLO Lattina", 2.99, $categories_dog, 400, "Agnello");
// $food_3 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/270580/brekkies-cat-bonta-benessere-urinary-care-20kg.jpg?v=1765981496", "Brekkies Cat", 56.99, $categories_cat, 20, "Pollo");


// BED PRODUCT

$bed_products = [
    $bed_1 = new Bed("https://arcaplanet.vtexassets.com/arquivos/ids/265494/croci-casetta-optical-elevated.jpg?v=1764897390", "Cuccia Optical Elevated", 26.50, $categories_cat, "Stoffa", "Nero"),
    $bed_2 = new Bed("https://arcaplanet.vtexassets.com/arquivos/ids/227348/canile-domus-extra-large.jpg?v=1765415699", "Cuccia Domus", 279.00, $categories_dog, "Legno", "legno"),
];

// $bed_1 = new Bed("https://arcaplanet.vtexassets.com/arquivos/ids/265494/croci-casetta-optical-elevated.jpg?v=1764897390", "Cuccia Optical Elevated", 26.50, $categories_cat, "Stoffa", "Nero");
// $bed_2 = new Bed("https://arcaplanet.vtexassets.com/arquivos/ids/227348/canile-domus-extra-large.jpg?v=1765415699", "Cuccia Domus", 279.00, $categories_dog, "Legno", "legno");


// ACCESSORIES PRODUCT
$accessories_products = [
    $accessories_1 = new Accessories("https://arcaplanet.vtexassets.com/arquivos/ids/246136/furminator-cane-a-pelo-lungo.jpg?v=1765806234", "Deshedding Giant", 36.99, $categories_dog, "Plastica", "Blu"),
    $accessories_2 = new Accessories("https://arcaplanet.vtexassets.com/arquivos/ids/255104/tiragraffi-chic-3-luna-teo-nero-gatto.jpg?v=1765440220", "Tiragraffi Chic 3", 99.99, $categories_cat, "Sisal", "Nero"),
];

// $accessories_1 = new Accessories("https://arcaplanet.vtexassets.com/arquivos/ids/246136/furminator-cane-a-pelo-lungo.jpg?v=1765806234", "Deshedding Giant", 36.99, $categories_dog, "Plastica", "Blu");
// $accessories_2 = new Accessories("https://arcaplanet.vtexassets.com/arquivos/ids/255104/tiragraffi-chic-3-luna-teo-nero-gatto.jpg?v=1765440220", "Tiragraffi Chic 3", 99.99, $categories_cat, "Sisal", "Nero");