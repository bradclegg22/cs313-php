<?php 
session_start();
include('template.php');

if (empty($_SESSION['cart'])) {
$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);
?>

<p>Your product was added to your cart.
    <a href="view.php">View Cart</a>
</p>