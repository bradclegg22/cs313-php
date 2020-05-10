<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('products.php');
?>

<body><?php echo $_GET["name"]; ?></body>

