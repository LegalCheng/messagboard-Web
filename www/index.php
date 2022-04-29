<?php
		session_start();
		//if you already Logged in.turn to account apge
		if($_SESSION['E-mail']!=null){ 
			echo "<script>location.href='comment.php'</script>";
		}
	?>
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

#footer{
	width: 100%;
	height: 150px;
	border: 1px solid #C4C4C4;
	border-left:none;
	border-right:none;
	display:flex;
}
/*contact info*/
#footer ul{
	margin:0;
	height: 150px;
	width: 23%;
	border:1px solid #C4C4C4;
	border-left: none;
	border-top: none;
	border-bottom: none;
	list-style-type: none;
	padding: 40px;
	box-sizing: border-box;

}
#footer ul li{
	padding-bottom: 10px;
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
#ig{
	height: 150px;
	width: 17%;
	border: 1px solid #C4C4C4;
	border-right:none;
	border-top: none;
	border-bottom: none;
	display: flex;
}
#ig a{
	cursor: pointer;
	margin:auto;
}
#ig a img{
	width: 23px;
	height: 24px;
}
#copy{
	height: 30px;
	text-align: center;
	margin: 20px 0;
	font-size: 10px;
}
#main1{
	width: 100%;
	height: 550px;
	display: flex;
	margin-top: 80px;
}
#pic{
	width: 42.5%;
}
#pic img{
	width: 80%;
	float: right;
	margin-top: 20px;
    margin-right: 70px;
}


.form{
	width: 45%;

	margin-left: 12.5%;
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
	margin-top: 10px;
	width: 100%;
	height: 70px;
	color: white;
	border:0px;
}
.button1 input{
	width: 100%;
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
#info{
	width: 100%;
	display: flex;
	justify-content: center;
	font-size: 10px;
}
#info div{
	width: 5%;
}
#info a{
	color: black;
}
#cart_qty{
	width: 3%;
	left: 90%;
	cursor: pointer;
}
#cart_qty:before{
	content: attr(data-count);
	color: black;
	position: absolute;
	right: 22px; 
	font-size: 15px;
	text-align: center;
	top: -23px;
	width: 20px;
	height: 20px;

	opacity: 0;
}
#cart_qty.zero:before{
	opacity: 1;
}
</style>
<form method="POST">
		<section id="main1">
		<!-- form -->
			<article class="form">
				<span class="Btitle">Log In</span>
			<!-- email -->
				<section class="form1" id="form-email">					
					<div>
						<label class="regular">E-mail</label>
						<input required type="email" id="email" name="email" placeholder="E-mail" class="regular">
					</div>					
				</section>

			<!-- password -->
				<section class="form1">					
					<div>
						<label class="regular">Password</label>
						<input required type="password" id="password" name="password" placeholder="Password" class="regular">
					</div>					
				</section>

			<!-- button -->
				<section class="button1">
						<a href="comment.php"><input id="submit" type="submit" name="submit" value="LOG IN" class="button" ></a>
				</section>

			<!-- INFO -->
				<section id="info">
					<p class="regular">Don’t have an account?</p>
					<div></div>
					<p class="regular">Click <a href="register.php">HERE</a> to register</p>
					<div></div>
				</section>

			</article>
		<!-- aside pic -->
			<aside id="pic">
				<img src="security.png"></img>
			</aside>
		</section>
	</form>
    <?php
        define('DB_SERVER', 'db');
        define('DB_USERNAME', 'user1000');
        define('DB_PASSWORD', 'kiki90317');
        define('DB_NAME', 'myDb');
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		$sqltest="SELECT * FROM `members` WHERE `E-mail` = '$_POST[email]'"; // SQL select same e-mail
		$check=mysqli_query($conn,$sqltest);
		$nums=mysqli_fetch_row($check);
		if($_POST[email] == null || $_POST[password] == null ){
		}
		else{
			//decode MIME BASE64
			$enpassword=base64_decode($nums[1]);
			if( $nums[0] == $_POST[email] && $enpassword == $_POST[password]){ //confirm correct username and password
				//access session
        		$_SESSION['E-mail'] = $_POST[email];
        		$_SESSION['password'] = $enpassword;
        		$_SESSION['fname'] = $nums[2];
        		$_SESSION['phone'] = $nums[3];
        		$_SESSION['address'] = $nums[4];
        		$_SESSION['birthday'] = $nums[5];
        		echo "<script>location.href='comment.php'</script>"; //turn to account page
		}
			else{
        		echo "<script>alert('Wrong username or password. Try again')</script>";
			}
		}
	?>
