<?php 
session_start();
require_once('config.php');
$username = $_SESSION['E-mail'];
if($_POST['url']!=null){
    $url=$_POST['url'];//圖片所在網址
    if(substr($url,0,8)!="https://"){
        echo "<script>alert('不是https網址不給你改大頭貼')</script>";
        echo "<script>location.href='comment.php'</script>";
    }
    else{
        if(preg_match('/.*(\.png|\.jpg|\.jpeg|\.gif)$/', $url)){
            $type=getimagesize($url);//取得圖片資訊
            $fileContent = base64_encode(file_get_contents($url));
        }
        else{
            echo "<script>alert('不是圖片不給你改大頭貼')</script>";
            echo "<script>location.href='comment.php'</script>";
        }
    }
}else{
    $error = $_FILES['file']['error'];
    $type = $_FILES['file']['type']; // 圖片類型
    $tmpname = $_FILES['file']['tmp_name']; // 圖片暫存位置
    $safeType=false;
    switch($type) {
        case 'image/jpeg':
            $safeType = true;
            break;
        case 'image/gif':
            $safeType = true;
            break;
        case 'image/png':
            $safeType = true;
            break;
    }
    if ($safeType) {
        $file = fopen($tmpname, 'rb'); // 以二進位制開啟圖片
        $fileContent = fread($file, filesize($tmpname)); // 讀取文件
        fclose($file); // 關閉圖片
        $fileContent = base64_encode($fileContent);// 將圖片編碼成 Base64 文字
    }
    else{
        echo "<script>alert('不是圖片不給你改大頭貼')</script>";
        echo "<script>location.href='comment.php'</script>";
    }
    $stmt = $link->prepare("UPDATE `members` SET `picture` = ?, `type`= ? WHERE `E-mail` = ?;");
    $stmt->bind_param('sss',$fileContent,$type,$username);
    $stmt->execute();
    header("Location: comment.php");
}
$stmt = $link->prepare("UPDATE `members` SET `picture` = ?, `type`= ? WHERE `E-mail` = ?;");
$stmt->bind_param('sss',$fileContent,$type,$username);
$stmt->execute();
echo "<script>location.href='comment.php'</script>"
?>
