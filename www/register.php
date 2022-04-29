<style>
.Bregular{
	font-family: Baskervville-Regular;
	color:black;
	font-size: 25px;
	line-height: 32px;
	font-weight: 200;
	font-weight: lighter;
}
.Btitle{
	font-family: Baskervville-Regular;
	color:black;
	font-size: 90px;
	line-height: 110px;
}
.regular{
	font-family:NotoSansSC-Regular;
	color: black;
	font-size: 15px;
	letter-spacing: 1px;
}
.button{
	font-family: NotoSansSC-Regular;
	color: black;
	font-size: 15px;
	letter-spacing:23%;
	line-height: 20px;
	letter-spacing: 2px;
}
/*header*/
header{
	height: 100px;
	justify-content: center;
	display: flex;
	margin: 0;
}
nav{
	width: 80%;
	height: 100px;		
	display: flex;	
}
#nav_logo{
	width: 18%;
	height: 100px;
	margin-left:0;
}
#nav_logo img{
	width: 128px;
	height: 49px;
	padding-top: 27px;
	padding-left:25px;
	cursor: pointer;
}
nav ul{		
	width: 59%;
	height: 20px;	
	padding-top: 25px;
}
nav li{	
	text-decoration: none;
	display: inline;
	padding-right: 8%;
}
nav li a{
	text-decoration: none;
	color: black;
}
nav li a:hover{
	border-bottom: 1px solid BurlyWood ;
	cursor: pointer;
	color: BurlyWood;
}
#nav_log{
	width: 23%;
	height: 20px;
	padding-top: 25px;
	display: flex;
}
#nav_log li{
	padding-top: 15px;
	padding-right: 10px;
}
#cart{
	width: 40px;
	height: 40px;
	display: flex;
}
#cart img{
	position: relative;
	width: 36px;
	height: 37px;
	padding-left: 20px;
	padding-top: 6px;
}
#cart span{
	position: relative;
	width: 36px;
	height: 37px;
	padding-left: 20px;
	padding-top: 6px;
}
body{
	margin:0;
}
html{
  scroll-behavior: smooth;
}
#main{
	width: 75%;
	margin: 0 auto;
	justify-content: center;
}
#add{
	height: 150px;
	width: 60%;
	padding: 40px;
	box-sizing: border-box;
}
#add address{
	font-style: normal;
}
#copy{
	height: 30px;
	text-align: center;
	margin: 20px 0;
	font-size: 10px;
}
#main1{
	width: 100%;
	display: flex;
	margin-top: 80px;
}

.form{
	width: 45%;
	height: 1070px;
	margin-left: 12.5%;
}
#form-email{
	margin-top: 30px;
}
.form2{
	width: 100%;
	height: 100px;
	display: flex;
	justify-content: space-between;
	margin-bottom: 10px;

}
.form2 div{
	width: 47%;
	height: 100px;
	box-sizing: content-box;
}
input{
	margin-top: 7px;
	padding: 20px 0px 20px 10px;
	width: 100%;
	box-sizing: content-box;
}
.form1{
	margin-bottom: 10px;
}
.form1 div{
	width: 100%;
	height: 100px;
	box-sizing: content-box;
}
.form1 input{
	margin-top: 7px;
	padding: 20px 0px 20px 10px;
	width: 100%;
	box-sizing: content-box;
}
.button1{
	margin-top: 20px;
	width: 100%;
	height: 70px;
	color: white;
	border:0px;
	display: flex;
	justify-content: space-between;
}
.button1 div{
	width: 47%;
}
#reset{
	background-color: white; 
	border: 1px solid black;
}
#reset:hover{
	background-color: rgba(0,0,0,0.1);
	cursor: pointer;
}
#submit{
	background-color: black;
	color: white;
	border: 1px solid black;
}
#submit:hover{
	cursor: pointer;
	background-color: rgba(0,0,0,0.7);
}
#pic{
	width: 42.5%;
	height: 1070px;
}
#pic img{
	width: 70%;
	float: right;
	margin-top: 170px;
    margin-right: 50px;
}
</style>
<form method="POST">
		<section id="main1">
		<!-- form -->
			<article class="form">
				<span class="Btitle">Join Us</span>
			<!-- email -->
				<section class="form1" id="form-email">					
					<div>
						<label class="regular">E-mail</label>
						<input required type="email" id="email" name="Email" placeholder="E-mail" class="regular">
					</div>					
				</section>

			<!-- set password -->
				<section class="form1">					
					<div>
						<label class="regular">Set Password</label>
						<input required type="password" required pattern="[A-Za-z0-9!@#$%^&*()]{0,10}" id="password" name="password" placeholder="Set Password" class="regular">
					</div>					
				</section>

			<!-- retype password -->
				<section class="form1">					
					<div>
						<label class="regular">Retype Password</label>
						<input required type="password" required pattern="[A-Za-z0-9!@#$%^&*()]{0,10}" id="repassword" name="repassword" placeholder="Retype Password" class="regular">
					</div>					
				</section>

				<section class="form1">
					<div>
						<label class="regular">NickName</label>
						<input required type="text" required pattern="[A-Za-z0-9]{1,50}" id="fname" name="fname" placeholder="NickName" class="regular">
					</div>
					
				</section>

			<!-- phone -->
				<section class="form1">					
					<div>
						<label class="regular">Phone</label>
						<input type="text" id="phone" name="phone" placeholder="Phone" class="regular">
					</div>					
				</section>

			<!-- address -->
				<section class="form1">					
					<div>
						<label class="regular">Address</label>
						<input type="text" id="address" name="address" placeholder="Address" class="regular">
					</div>					
				</section>

			<!-- birthday -->
				<section class="form1">					
					<div>
						<label class="regular">Birthday</label>
						<input type="date" id="birthday" name="birthday" placeholder="Birthday" class="regular">
					</div>					
				</section>				

			<!-- button -->
				<section class="button1">
					<div>
						<input id="reset" type="reset" name="reset" value="RESET" class="button">
					</div>
					<div>
						<input id="submit" type="submit" name="submit" value="SIGN UP" class="button">
					</div>
				</section>
				<section id="info">
					<p class="regular">Already a member ?</p>
					<div></div>
					<p class="regular">Click <a href="index.php">HERE</a> for member log in</p>
				</section>
			</article>
			<aside id="pic">
				<img src="Web.png"></img>
			</aside>
		</section>
	</form>
<?php
		require_once('config.php');
		if(""==$_POST[Email]){
		}
		else{
			if($_POST[password]!=$_POST[repassword]) 
			{
				echo "<script>alert('Those passwords didn’t match. Try again.')</script>"; 
			}
			else{
				$user=$_POST[Email];
				$stmt = $link->prepare("SELECT * FROM `members` WHERE `E-mail` = ?;");
    			$stmt->bind_param('s',$user);
    			$stmt->execute();
    			$result = $stmt->get_result();
    			$output = $result->fetch_assoc();
				date_default_timezone_set("Asia/Taipei");
				$getpasstime = date('Y/m/d H:i:s');
				if($output>0){ 
					echo "<script>alert('That username is taken.Try another')</script>"; 
				}else{
					$enpassword=base64_encode($_POST[password]);
					$username=$_POST[Email];
					$nickname=$_POST[fname];
					$phone=$_POST[phone];
					$address=$_POST[address];
					$bt=$_POST[birthday];
					$url="https://image.damanwoo.com/files/styles/rs-big/public/flickr/4/3151/5820170825_59418deec8_o.jpg";
					$type=getimagesize($url);
    				$fileContent = base64_encode(file_get_contents($url));
					$stmt=$link ->prepare("insert into members values(?,?,?,?,?,?,?,?,?)");
            		$stmt ->bind_param('sssssssss',$username,$enpassword,$nickname,$phone,$address,$bt,$getpasstime,$fileContent,$type);
            		$stmt ->execute();
					echo "<script>alert('Registration success.Can login!')</script>";
					session_destroy();
					echo "<script>location.href='index.php'</script>"; 
				}
			}
		}
	?>
