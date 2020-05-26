<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('connectdp.php');
    $db = get_db();
?>

<body>
<?php
foreach ($db->query('SELECT name, price, description FROM products WHERE id = 1') as $row)
{
  echo $row['name'];
  echo '<br>';
  echo $row['price'] . ' Ruppees.';
  echo '<br>';
  echo $row['description']; 
  echo '<br>';
  echo "<a href='view.php'>Add to cart</a>";
  echo '<br>';
  echo '<br>';
}
    ?>
  <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
    <input type="text" name="quantity" value="1"/>
    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>"/>
    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
    <input type="submit" name="add_to_cart" value="Add to Cart"/>
  </form> 
    
    foreach ($db->query('SELECT name, price, description FROM products WHERE id = 2') as $row)
{
  echo $row['name'];
  echo '<br>';
  echo $row['price'] . ' Ruppees.';
  echo '<br>';
  echo $row['description'];
  echo '<br>';
  echo "<a href='view.php'>Add to cart</a>";
  echo '<br>';
  echo '<br>';
}
    foreach ($db->query('SELECT name, price, description FROM products WHERE id = 3') as $row)
{
  echo $row['name'];
  echo '<br>';
  echo $row['price'] . ' Ruppees.';
  echo '<br>';
  echo $row['description'];
  echo '<br>';
  echo "<a href='view.php'>Add to cart</a>";
  echo '<br>';
  echo '<br>';
}
    foreach ($db->query('SELECT name, price, description FROM products WHERE id = 4') as $row)
{
  echo $row['name'];
  echo '<br>';
  echo $row['price'] . ' Ruppees.';
  echo '<br>';
  echo $row['description'];
  echo '<br>';
  echo "<a href='view.php''>Add to cart</a>";
  echo '<br>';
  echo '<br>';
}
    
?>
</body>

