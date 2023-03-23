<?php


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