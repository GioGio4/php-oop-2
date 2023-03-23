<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

class Product
{
    // Variabili di istanza della classe Product 
    public $picture;
    public $title;
    public $price;
    public $categories;


    public function __construct(
        string $_picture,
        string $_title,
        float $_price,
        Categories $_categories
    ) {
        $this->picture = $_picture;
        $this->title = $_title;
        $this->price = $_price;
        $this->categories = $_categories;
    }
}

class Categories
{
    // Variabili di istanza della classe Categories
    public $name_categories;
    public $icon;

    public function __construct($_name_categories, $_icon)
    {
        $this->name_categories = $_name_categories;
        $this->icon = $_icon;
    }
}



$categories_dog = new Categories("Cane", "ICON-CANE");
$categories_cat = new Categories("Gatto", "ICON-GATTO");


// !!PROVA!!
// $prodotto_1 = new Product("Foto", "cibo cane", 3.10, $categories_dog);

// var_dump($prodotto_1);

class Cibo extends Product
{
    // Variabili di istanza della classe Categories che eredità variabili da (Product)
    public $scadenza;
    public $gusto;

    public function __construct(
        string $_picture,
        string $_title,
        float $_price,
        Categories $_categories,
        string $_scadenza,
        string $_gusto
    ) {
        parent::__construct($_picture, $_title, $_price, $_categories);
        $this->scadenza = $_scadenza;
        $this->gusto = $_gusto;
    }
}

// !!PROVA!! 
$carneManzo = new Cibo("FOTO-PRODOTTO", "Carne di Manzo", 7.99, $categories_dog, "01/01/2025", "Manzo");

var_dump($carneManzo);


?>