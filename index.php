<?php 

include_once __DIR__ . './classes/categories.php';
include_once __DIR__ . './classes/accessories.php';
include_once __DIR__ . './classes/food.php';
include_once __DIR__ . './classes/toys.php';

$categories = [
    'dog' => new categories('dog', '<i class="fa-regular fa-dog"></i>'),
    'cat' => new categories('cat', '<i class="fa-regular fa-cat"></i>'),
    'bird' => new categories('bird', '<i class="fa-regular fa-bird"></i>')
];

var_dump( $categories );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>


<body>
    
</body>
</html>