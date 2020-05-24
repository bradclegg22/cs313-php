<?php 
    session_start();
    $title = "browse";
    include('template.php');
    require 'connectdp.php';
    $db = get_db();
?>

<body>
<?php
foreach ($db->query('SELECT name, price, description FROM products') as $row)
{
  echo $row['name'];
  echo $row['price'] . 'Ruppes.'
  echo $row['description'];
}    
?>
</body>

