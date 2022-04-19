<?php 
session_start();
define('DB_SERVER', 'db');
define('DB_USERNAME', 'user1000');
define('DB_PASSWORD', 'kiki90317');
define('DB_NAME', 'myDb');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$username = $_SESSION['E-mail'];
if($_POST['url']!=null){
    $url=$_POST['url'];//圖片所在網址
    $type=getimagesize($url);//取得圖片資訊
    $fileContent = base64_encode(file_get_contents($url));
}else{
    $error = $_FILES['file']['error'];
    $type = $_FILES['file']['type']; // 圖片類型
    if ($error === 0) {
        $tmpname = $_FILES['file']['tmp_name']; // 圖片暫存位置
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
    }
    if ($safeType) {
        $file = fopen($tmpname, 'rb'); // 以二進位制開啟圖片
        $fileContent = fread($file, filesize($tmpname)); // 讀取文件
        fclose($file); // 關閉圖片
        $fileContent = base64_encode($fileContent);// 將圖片編碼成 Base64 文字
    }
    $sql = "UPDATE `members` SET `picture` = '$fileContent', `type`='$type' WHERE `E-mail` = '$username'";
    mysqli_query($conn,$sql);
    header("Location: comment.php");
}
$sql = "UPDATE `members` SET `picture` = '$fileContent', `type`='$type' WHERE `E-mail` = '$username'";
mysqli_query($conn,$sql);
echo "<script>location.href='comment.php'</script>"
?>
