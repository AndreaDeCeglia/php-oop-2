<?php 

include_once __DIR__ . '/classes/product.php';

class food extends product{    
    public $netWeight;
    public $ingredients;

    public function __construct(
        String $image,
        String $productName,
        Float $price,
        categories $category,

        Int $netWeight,
        String $ingredients
    ) {
        $this->netWeight = $netWeight;
        $this->ingredients = $ingredients;
        parent::__construct($image,$productName,$price,$category)
    }
}

?>