<body>
    <?php
    include('connectdp.php');
    $db = get_db();
    
    $statement = $db->prepare('SELECT cid, userid, date, message FROM comments');
	$statement->execute();
    
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
    echo "<form method='POST' action='updateComment'>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <input type='hidden' name='date' value='".date('Y-m-d')."'>
    <textarea name='message='".$row['message']."'></textarea>
    <button type='submit' name='commentSubmit'>Comment</button>
    </form>";
        }
    ?>
</body>