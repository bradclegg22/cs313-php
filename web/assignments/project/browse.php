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
  echo '<br>';
}
    foreach ($db->query('SELECT name, price, description FROM products WHERE id = 2') as $row)
{
  echo $row['name'];
  echo '<br>';
  echo $row['price'] . ' Ruppees.';
  echo '<br>';
  echo $row['description'];
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
  echo '<br>';
}
    
?>
</body>

