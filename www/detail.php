<?php 
    require_once('config.php');
    $id=$_GET['id'];
    $stmt = $link->prepare("SELECT * FROM `comment` WHERE `id` = ?;");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $result = $stmt->get_result();
    $output = $result->fetch_assoc();
    
    $name=htmlspecialchars($output['nickname'],ENT_NOQUOTES);
    $filename=htmlspecialchars($output['dataname']);
    $content=$output['comment'];
    $time=$output['time'];
    echo "<h2>POST</h2>";
    echo "<h3>Poster :$name</h3>";
    echo "<h3>Content :$content</h3>";
    echo "<h3>Time :$time</h3>";
    echo "<h3>Attach :$filename</h3>";
?>
