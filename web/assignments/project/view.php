<?php 
    session_start();
    include('template.php');
    include('connectdp.php');
    $db = get_db();
?>

<body>
    <?php $_SESSION['name']?>
</body>