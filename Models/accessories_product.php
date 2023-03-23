<?php

include_once __DIR__ . "/Product.php";


class Accessories extends Product
{
    // Variabili di istanza della classe Categories che eredità variabili da (Product)
    public $materiale;
    public $colore;

    public function __construct(
        string $_picture,
        string $_title,
        float $_price,
        Categories $_categories,
        string $_materiale,
        string $_colore
    ) {
        parent::__construct($_picture, $_title, $_price, $_categories);
        $this->materiale = $_materiale;
        $this->colore = $_colore;
    }
}