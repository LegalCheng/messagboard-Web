<?php
    require_once('config.php');
    $id=$_GET['FileNo'];
    $query="SELECT * FROM comment WHERE `id` = '$id' ";
    $ret=mysqli_query($link,$query);
    $data=mysqli_fetch_row($ret);
    
    $filename = $data[8];
	$type = $data[6];
	$file = $data[5];
    header('Content-Type: '.$type);
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
    echo $file;
?>
