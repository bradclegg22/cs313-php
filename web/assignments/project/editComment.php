<body>
    <?php
         $cid = $_POST['cid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
    
    require("connectdp.php");
    $db = get_db();
    
    echo "<form method='POST' action='updateComment'>
    <input type='hidden' name='date' value='".date('Y-m-d')."'>
    <textarea name='message'></textarea>
    <button type='submit' name='commentSubmit'>Comment</button>
    </form>";
    ?>
</body>