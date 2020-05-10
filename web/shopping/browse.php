<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('products.php');
?>

<body>
    <p><input type="hidden" name="product" value="'<?php echo $products[0]["name"];?>'"></p>
    <p><?php echo $products[0]["price"];?></p>
    <p><?php echo $products[0]["description"];?></p>
    
    <br>
    <p><?php echo $products[1]["name"]; ?></p>
    <p><?php echo $products[1]["price"]; ?></p>
    <p><?php echo $products[1]["description"]; ?></p><br>
    <p><?php echo $products[2]["name"]; ?></p>
    <p><?php echo $products[2]["price"]; ?></p>
    <p><?php echo $products[2]["description"]; ?></p><br>
    <p><?php echo $products[3]["name"]; ?></p>
    <p><?php echo $products[3]["price"]; ?></p>
    <p><?php echo $products[3]["description"]; ?></p>
</body>

