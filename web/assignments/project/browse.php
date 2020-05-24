<?php 
    session_start();
    $title = "browse";
    include('template.php');
    include('connectdp.php');
    $db = get_db();
?>

<body>
<?php
foreach ($db->query('SELECT * FROM products') as $row)
{
  echo $row['name'];
  echo $row['price'] . 'Ruppees.';
  echo $row['description'];
}    
?>
</body>

