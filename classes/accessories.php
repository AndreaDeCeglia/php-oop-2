<?php 

include_once __DIR__ . './product.php';

class accessories extends product{    
    public $materials;
    public $dimentions;

    public function __construct(
        String $image,
        String $productName,
        Float $price,
        categories $category,

        String $materials,
        String $dimentions
    ) {
        $this->materials = $materials;
        $this->dimentions = $dimentions;
        parent::__construct($image,$productName,$price,$category);
    }
}

?>