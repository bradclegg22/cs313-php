<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('products.php');
?>

<body>
    <p><?php echo $products[0]["name"];?></p>
    <p><?php echo $products[0]["price"];?></p>
    <p><?php echo $products[0]["description"];?></p>
    <a href="addtocart.php?id=1">Add to cart</a>
    <br>
    <p><?php echo $products[1]["name"]; ?></p>
    <p><?php echo $products[1]["price"]; ?></p>
    <p><?php echo $products[1]["description"]; ?></p>
    <a href="addtocart.php?id=2">Add to cart</a><br>
    <p><?php echo $products[2]["name"]; ?></p>
    <p><?php echo $products[2]["price"]; ?></p>
    <p><?php echo $products[2]["description"]; ?></p>
    <a href="addtocart.php?id=3">Add to cart</a><br>
    <p><?php echo $products[3]["name"]; ?></p>
    <p><?php echo $products[3]["price"]; ?></p>
    <p><?php echo $products[3]["description"]; ?></p>
    <a href="addtocart.php?id=4">Add to cart</a>
</body>

