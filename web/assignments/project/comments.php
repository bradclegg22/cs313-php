<?php 
function setComments($db) {
    if(isset($_POST['commentSubmit'])) {
        $userid = $_POST['userid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO comments (userid, date, message) VALUES (:userid, :date, :message)";
        $statement = $db->prepare($query);
        
        $statement->bindValue(':userid', $userid);
	   $statement->bindValue(':date', $date);
	   $statement->bindValue(':message', $message);
        
        $statement->execute();
    }
}
?>