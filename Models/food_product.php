<?php

include_once __DIR__ . "/Product.php";


class Food extends Product
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