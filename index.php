<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

require_once __DIR__ . "/Models/food_product.php";





// !!PROVA!!
// $prodotto_1 = new Product("Foto", "cibo cane", 3.10, $categories_dog);

// var_dump($prodotto_1);



// // !!PROVA!! 
$carneManzo = new Food("FOTO-PRODOTTO", "Carne di Manzo", 7.99, $categories_dog, "01/01/2025", "Manzo");

var_dump($carneManzo);


?>