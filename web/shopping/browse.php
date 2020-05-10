<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('products.php');
?>

<body>
    <p><?php echo $products[0]["name"]; ?></p>
    <p><?php echo $products[0]["price"]; ?></p>
    <p><?php echo $products[0]["description"]; ?></p>

</body>

