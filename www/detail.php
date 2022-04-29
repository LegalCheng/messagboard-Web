<?php 
    define('DB_SERVER', 'db');
    define('DB_USERNAME', 'user1000');
    define('DB_PASSWORD', 'kiki90317');
    define('DB_NAME', 'myDb');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $id=$_GET['id'];
    $data = mysqli_query($link, "SELECT * FROM comment WHERE `id` = '$id' ");
    $nums=mysqli_fetch_row($data);
    $name=htmlspecialchars($nums[1],ENT_NOQUOTES);
    $filename=htmlspecialchars($nums[8]);
    echo "<h2>POST</h2>";
    echo "<h3>Poster :$name</h3>";
    echo "<h3>Content :$nums[2]</h3>";
    echo "<h3>Time :$nums[3]</h3>";
    echo "<h3>Attach :$filename</h3>";
?>
