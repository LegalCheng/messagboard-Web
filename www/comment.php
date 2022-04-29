<?php session_start(); 
$_SESSION['token'] = bin2hex(random_bytes(32));
setcookie("csrftoken", $_SESSION['token']);
?>
<style>
.form1 div{
  width:80%;
  margin:0 auto;
}
.form1 input{
	box-sizing: content-box;
  width:100%;
  margin:0 auto;
}
#table{
  margin:0 auto;
  margin-top:20px;
}
.formpicture{
  margin-left:140px;
}
.button1{
	width: 50%;
	height: 70px;
  margin: 0 auto;
	color: white;
	border:0px;
}
.button1 input{
	width: 100%;
}
.button{
	font-family: NotoSansSC-Regular;
	color: black;
	font-size: 15px;
	letter-spacing:23%;
	line-height: 20px;
	letter-spacing: 2px;
}
#submit{
  margin-top:10px;
	background-color: black;
	color: white;
	border: 1px solid black;
}
#submit:hover{
	cursor: pointer;
	background-color: rgba(0,0,0,0.7);
}
.title {
  background: #467500 ;
  color: #fff;
  padding: 8px;
  text-align: center;
  font-weight: 700;
}
.board {
  background: #fff;
  max-width: 700px;
  width: 100%;
  margin: 20px auto;
  padding: 30px;
  box-shadow: 1px 1px 3px #fff;
  border-radius: 5px;
}
.board__header {
  display: flex;
  justify-content: space-between;
}
{
  box-sizing: border-box;
  margin: 0;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  padding: 0;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  border: 1px solid gold;
    border-top-color: gold;
    border-top-style: solid;
    border-top-width: 1px;
    border-right-color: gold;
    border-right-style: solid;
    border-right-width: 1px;
    border-bottom-color: gold;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-color: gold;
    border-left-style: solid;
    border-left-width: 1px;
    border-image-outset: 0;
    border-image-repeat: stretch;
    border-image-slice: 100%;
    border-image-source: none;
    border-image-width: 1;
}
.card__info {
  font-size: 16px;
}
body {
  font-family: Questrial, "微軟正黑體";
}
.board__tittle {
  margin-bottom: 24px;
}
.board__hr {
  margin: 20px auto;
  height: 1px;
  background: #e8e8ee;
  min-width: 95%;
}
.picture1{
  margin-left:600px;
}
#comment{
  height:70px;
  margin-top:5px;
}
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>留言板</title>
</head>
<body>
  <header class="title">
    <?php
     require_once('config.php');
      $data = mysqli_query($link, "SELECT * FROM `title` WHERE `id`='1'");
      $nums=mysqli_fetch_row($data);
      echo utf8_decode($nums[1]);
    ?>
  </header>

  <main class="board">
    <div class ="board__header">
      <div class="border__word-block">
        <h1 class="board__tittle">Comments</h1>
      </div>
      <div class="board__btn-block">
              <?php
                $admin="admin@com.com";
                $class="board__btn";
                $href="manage.php";
                if ($_SESSION['E-mail']==$admin){
                  echo "<a class=$class href=$href>management</a>";
                }
              ?>
              <a class="board__btn" href="register.php">Sign up</a>
              <a class="board__btn" href=<?php 
                  if($_SESSION['E-mail']!=null){ 
			                echo "destroy.php";
		              }
                  else{
                      echo "index.php";
                  }?>><?php 
                  if($_SESSION['E-mail']!=null){ 
			                echo "Log out";
		              }
                  else{
                    echo "Log in";
                } ?></a>
        
      </div>
    </div>
  </main>
  <div class="formpicture">
    <form method="POST" class="board__upload" id="img-load" 
      action="upload.php"  enctype="multipart/form-data" >
      <label>大頭照上傳</label>
      <input type="file" id="file" class="nodisplay" name="file"/>
      <input type="text" name="url">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>
  <form method="POST" action="comment.php" enctype="multipart/form-data">
    <section class="form1" >
          <div>
            <label >Comment</label><br><br>
            <label class="board__tittle"><b><?php 
              echo "Hello!!!\t";
              $nickname=htmlspecialchars($_SESSION['fname']);
              echo $nickname;?></b></label>
            <?php
            require_once('config.php');
              function getHeadShot($link) {
                $username = $_SESSION['E-mail'];
                $result = '';
                $getImageInfo = $link->query("SELECT picture FROM members WHERE `E-mail` = '$username'");
                if ($getImageInfo->num_rows === 1) {
                  $img = $getImageInfo->fetch_assoc()['picture'];
                  $type = $getImageInfo->fetch_assoc()['type'];
                  $result = '"data:' . $type . ';base64,' . $img;
                }
                return $result;
              }
            $haveHeadShot = getHeadShot($link);
              if ($haveHeadShot) { 
                echo '<img src=' . $haveHeadShot . '" width="300" height="300" class="picture1"/>'; 
              }?>			
						<input type="text" id="comment" name="comment"> 
            <input type="file" id="file1" class="nodisplay" name="file1"/>
            <input id="submit" type="submit" value="submit" class="button" name="btn" >
					</div> 					
		</section>
  </form>
  <table width=80% id="table">
  <tr>
    <td>nickname</td>
    <td>content </td>
    <td>post time</td>
    <td>delete</td>
    <td>detail</td>
    <td>download</td>
  </tr>
 <?php
  require_once('config.php');
  $data = mysqli_query($link, "SELECT * FROM comment");
  for($i=1;$i<=mysqli_num_rows($data);$i++){
      $rs=mysqli_fetch_row($data);
 ?>
  <tr>
    <td><?php 
      $name=htmlspecialchars($rs[1],ENT_NOQUOTES);
      echo $name;
    ?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td>
      <form action="dbb.php?id=<?php echo $rs[0]; ?>" method="POST">
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <?php
            $url="https://pic.onlinewebfonts.com/svg/img_216917.png";
            $alt="Submit";
            $type="image";
            $size=30;
           if($rs[4]==$_SESSION['E-mail']){
              echo "<input type=$type src=$url alt=$alt width=$size heigth=$size>";
           }
        ?>
        
      </form>
    </td>
    <td>
      <?php
        $id=$rs[0];
        $detail="detail.php";
        $url="https://icons.veryicon.com/png/o/education-technology/smart-campus-1/view-details-2.png";
        echo "<a href=$detail?id=$id><img src=$url style=width:30px;height:30px></a>";
      ?>
    </td>
    <td>
      <?php
        $download="download.php";
        $url="https://cdn1.iconfinder.com/data/icons/arrows-vol-1-4/24/download_1-1024.png";
        $id=$rs[0];
        if($rs[5]!=NULL){
          echo "<a href=$download?FileNo=$id><img src=$url  style=width:30px;height:30px></a>";
        }
      ?>
    </td>
  </tr>
  <?php
  }
 ?>
</table>
</body>
<?php
  session_start();
  require_once('config.php');
  if(isset($_POST['btn'])){
      $name=$_FILES['file1']['name'];
      $type = $_FILES['file1']['type'];
      if($name!=Null){
        $data=file_get_contents( $_FILES['file1']['tmp_name']);
      }else{
        $data="";
      }
      $size = $_FILES['file1']['size'];
      $start=substr($_POST[comment],0,5);
      if($start=="[img]"){
        $abb=substr($_POST[comment],5,-6);
        if(preg_match('/.*(\.png|\.jpg|\.jpeg|\.gif)$/', $abb)){
          $a=bbcode($_POST[comment]);
          date_default_timezone_set("Asia/Taipei");
          $getpasstime = date('Y/m/d H:i:s');
          $check = mysqli_query($link, "SELECT * FROM comment ORDER BY id DESC LIMIT 1");
          $nums=mysqli_fetch_row($check);
          $num_rows = $nums[0]+1;
          $str=$_SESSION['fname'];
          $email=$_SESSION['E-mail'];
          if($email == null){
            echo "<script type='text/javascript'>alert('請先登入才能留言');</script>";
            echo "<script>location.href='comment.php'</script>";
          }
          else{
            $stmt=$link ->prepare("insert into comment values(?,?,?,?,?,?,?,?,?)");
            $stmt ->bind_param('sssssssss',$num_rows,$str,$a,$getpasstime,$email,$data,$type,$size,$name);
            $stmt ->execute();
            echo "<script>location.href='comment.php'</script>";
          }
        }
        else{
          echo "<script type='text/javascript'>alert('url不是圖片!!');</script>";
          echo "<script>location.href='comment.php'</script>";
        }
      }
      else{
        $a=bbcode($_POST[comment]);
          date_default_timezone_set("Asia/Taipei");
          $getpasstime = date('Y/m/d H:i:s');
          $check = mysqli_query($link, "SELECT * FROM comment ORDER BY id DESC LIMIT 1");
          $nums=mysqli_fetch_row($check);
          $num_rows = $nums[0]+1;
          $str=$_SESSION['fname'];
          $email=$_SESSION['E-mail'];
          if($email == null){
            echo "<script type='text/javascript'>alert('請先登入才能留言');</script>";
            echo "<script>location.href='comment.php'</script>";
          }
          else{
            $stmt=$link ->prepare("insert into comment values(?,?,?,?,?,?,?,?,?)");
            $stmt ->bind_param('sssssssss',$num_rows,$str,$a,$getpasstime,$email,$data,$type,$size,$name);
            $stmt ->execute();
            echo "<script>location.href='comment.php'</script>";
          }
      }	
  }
  else{
  }
  function bbcode($input){
    $input = strip_tags($input);
    $input = htmlentities($input);
    
    $search = array(
                '/\[b\](.*?)\[\/b\]/is',
                '/\[i\](.*?)\[\/i\]/is',
                '/\[u\](.*?)\[\/u\]/is',
                '/\[img\](.*?)\[\/img\]/is',
                '/\[color=(.*?)\](.*?)\[\/color\]/is',
                
    );
    $replace = array(
                '<b>$1</b>',
                '<i>$1</i>',
                '<u>$1</u>',
                '<img src="$1">',
                '<span style="color:$1;">$2</span>',
    );
    return preg_replace($search,$replace,$input);
  } 
?>
