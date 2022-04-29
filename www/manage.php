<?php
    session_start();
    $admin="admin@com.com";
    if($_SESSION['E-mail']!=$admin){
        echo "<script>location.href='comment.php'</script>";
    }
?>
<form action="manage.php" method="POST">
    <input type="text" name="name"><br>
    <input type="submit" value="更改">
</form>
<?php
    require_once('config.php');
    if($_POST[name]!=NULL){
        $fileContent=utf8_encode($_POST[name]);
        $sql = "UPDATE `title` SET `title` = '$fileContent'";
        mysqli_query($link,$sql);
        echo "<script>location.href='comment.php'</script>";
    }
?>
