<?php
    define('DB_SERVER', 'db');
    define('DB_USERNAME', 'user1000');
    define('DB_PASSWORD', 'kiki90317');
    define('DB_NAME', 'myDb');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
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