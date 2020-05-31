<?php 
 
        $userid = $_POST['userid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

require("connectdp.php");
$db = get_db();
        
try {
        $query = 'INSERT INTO comments (userid, date, message) VALUES (:userid, :date, :message)';
        $statement = $db->prepare($query);
        
        $statement->bindValue(':userid', $userid);
	   $statement->bindValue(':date', $date);
	   $statement->bindValue(':message', $message);
        
        $statement->execute();
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: browse.php");
?>