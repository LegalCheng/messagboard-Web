<?php 
    require_once('config.php');
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
