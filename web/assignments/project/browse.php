<?php 
    session_start();
    $title = "browse";
    date_default_timezone_set('America/Denver');
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
    
<h2>Comment on a product</h2>
    <?php 
    echo "<form method='POST' action='comments.php'>
        <input type='hidden' name='userid' value='anonymous'>
        <input type='hidden' name='date' value='".date('Y-m-d')."'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>
        </form><br><br>";
    ?>
    <h2>Comment Section</h2>
    <?php
    $statement = $db->prepare('SELECT cid, userid, date, message FROM comments');
	$statement->execute();
    
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        echo '<div class="comment">';
        echo $row['userid'] . ' ' . $row['date'] . '<br>';
        echo $row['message'];
        echo "<form class='delete' method='POST' action='deleteComment.php'>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <input type='hidden' name='date' value='".date('Y-m-d')."'>
        <button type='submit' name='delete'>Delete</button>
        </form>";
         echo "<form method='POST' action='editComment.php'>
        <button type='submit' name='update'>Update</button>
        </form><br><br>";
        echo '</div>';
    }
    ?>
    
</body>

