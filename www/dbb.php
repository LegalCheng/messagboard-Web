<?php 
    session_start();
    require_once('config.php');
    if($_SESSION['token']!=$_POST['token']){
        echo "<script>alert('CSRF')</script>";
    }else{
        $id=intval($_GET['id']);
        $mail=$_SESSION['E-mail'];
        $stmt = $link->prepare("SELECT * FROM `comment` WHERE `id` = ?;");
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $output = $result->fetch_assoc();
        if($output['E-mail']!=$mail){
            echo "<script>alert('你無法刪除別人的留言')</script>";
        }
        else{
            $stmt = $link->prepare("DELETE FROM `comment` WHERE `id`= ?;");
            $stmt->bind_param('i',$id);
            $stmt->execute();   
        }
    }
    echo "<script>location.href='comment.php'</script>";
?>
