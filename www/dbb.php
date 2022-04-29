<?php 
    session_start();
    define('DB_SERVER', 'db');
    define('DB_USERNAME', 'user1000');
    define('DB_PASSWORD', 'kiki90317');
    define('DB_NAME', 'myDb');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($_SESSION['token']!=$_POST['token']){
        echo "<script>alert('CSRF')</script>";
    }else{
        $id=$_GET['id'];
        $mail=$_SESSION['E-mail'];
        $sql1 = "SELECT * FROM `comment` WHERE `id`='$id'";
        $result1=mysqli_query($link,$sql1);
        $nums=mysqli_fetch_row($result1);
        if($nums[4]!=$mail){
            echo "<script>alert('你無法刪除別人的留言')</script>";
        }
        else{
            $sql = "DELETE FROM comment WHERE id = '$id'";
            $result=mysqli_query($link,$sql);   
        }
    }
    echo "<script>location.href='comment.php'</script>";
?>
