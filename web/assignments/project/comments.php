<?php 
 
        $userid = $_POST['userid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

require("connectdp.php");
$db = get_db();
        
        $query = 'INSERT INTO comments (userid, date, message) VALUES (:userid, :date, :message)';
        $statement = $db->prepare($query);
        
        $statement->bindValue(':userid', $userid);
	   $statement->bindValue(':date', $date);
	   $statement->bindValue(':message', $message);
        
        $statement->execute();
?>