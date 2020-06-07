
<?php 
        $cid = $_POST['cid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

require("connectdp.php");
$db = get_db();
        
try {
        $query = "UPDATE comments SET date = '$date', message = '$message' WHERE cid='$cid'";
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