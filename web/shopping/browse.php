<?php 
    session_start();
    include('template.php');
    include('products.php');
    $title = "browse";
?>
<html>
    <head>
<title><?php echo $title; ?></title>
    </head>
<body>
<?php 
echo $_GET["Master Sword"];  
?>
</body>
</html>