<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('products.php');
?>

<body><?php echo $products[0]["name"]; ?></body>

