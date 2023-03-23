<?php

require_once __DIR__ . "/product_categories.php";

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