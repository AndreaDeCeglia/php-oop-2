<?php 

class categories{
    public $categoryName;
    public $icon;

    public function __construct(
        String $categoryName,
        String $icon
    ) {
        $this->categoryName = $categoryName;
        $this->icon = $icon;
    }
}

?>