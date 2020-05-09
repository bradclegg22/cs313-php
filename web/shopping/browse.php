<?php 
    session_start();
    include('template.php');
    include('products.php');
    $title = 'browse';
?>
<title><?php echo $title ?></title>
<body>
<?php 
echo $_GET["Master Sword"];  
?>
</body>