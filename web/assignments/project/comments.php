<?php 
function setComments($db) {
    if(isset($_POST['commentSubmit'])) {
        $userid = $_POST['userid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO comments (userid, date, message) VALUES ('$userid', '$date', '$message')";
        $results = $db->query($query);
    }
}
?>