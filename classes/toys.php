<?php 

include_once __DIR__ . '/classes/product.php';

class toys extends product{    
    public $features;
    public $dimentions;

    public function __construct(
        String $image,
        String $productName,
        Float $price,
        categories $category,

        String $features,
        String $dimentions
    ) {
        $this->features = $features;
        $this->dimentions = $dimentions;
        parent::__construct($image,$productName,$price,$category)
    }
}

?>