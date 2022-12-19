<?php

include_once __DIR__ . '/classes/categories.php';

class Product{
    public $image;
    public $productName;
    public $price;
    public $category;

    public function __construct(
        String $image,
        String $productName,
        Float $price,
        categories $category
    ) {
        $this->image = $image;
        $this->productName = $productName;
        $this->price = $price;
        $this->category = $category;
    }
}

?>