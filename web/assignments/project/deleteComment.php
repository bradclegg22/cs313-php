<?php 
$cid = $_POST['cid'];

require("connectdp.php");
$db = get_db();
        
try {
        $query = "DELETE FROM comments WHERE cid='$cid'";
        $statement = $db->prepare($query);
        
        $statement->execute();
}
catch (Exception $ex)
{

	echo "Error with DB. Details: $ex";
	die();
}
header("Location: browse.php");
 ?>