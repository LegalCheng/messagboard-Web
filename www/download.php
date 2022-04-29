<?php
    require_once('config.php');
    $id=$_GET['FileNo'];
    $stmt = $link->prepare("SELECT * FROM `comment` WHERE `id` = ?;");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $result = $stmt->get_result();
    $output = $result->fetch_assoc();
    
    $filename = $output['dataname'];
	$type = $output['type'];
	$file = $output['Data'];
    header('Content-Type: '.$type);
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
    echo $file;
?>
