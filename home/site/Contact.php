<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
</head>
<body id="page5">
	<?php
		function blindSubjectList()
		{
			$conn = mysqli_connect("localhost","root","","contact");
			mysqli_set_charset($conn,'utf8');
			
		}
		$name="";
		$subject="";
		$datewrite=date_default_timezone_set('Asia/Ho_Chi_Minh');
		$information="";
		$email="";
		$phone="";
		$address1="";
		if(isset($_POST["btnContactUs"]))
		{
			$name = $_POST["txtName"];
			$information=$_POST["message"];
			$email = $_POST["txtEmail"];
		
			$insert =
			"INSERT INTO
			`contact`( `Names`, `Information`, `Email`)
			VALUES
			('$name','$information','$email')";
			$conn = mysqli_connect("localhost","root","","contact");
			mysqli_query($conn,$insert);
			echo '<script> alert("Gửi thông tin thành công");</script>';
		}
		
	?>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Hope Center</a></h1>
				<nav>
						<ul id="top_nav">
							<li><a href="index.html"><img src="images/top_icon1.gif" alt=""></a></li>
							<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
							<li class="end"><a href="Contact.php"><img src="images/top_icon3.gif" alt=""></a></li>
						</ul>
					</nav>
				<nav>
						<ul id="menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="../../account/login/login.php">Login</a></li>
							<li><a href="News.html">Shop</a></li>
							<li id="menu_active"><a href="Contact.php">Contact</a></li>
						</ul>
					</nav>
				<nav>
					<ul id="top_nav">
						<li><img src="images/img6.jpg" alt="" ></li>
					</ul>
				</nav>
				
			</div>
		</header>
<!-- / header -->
<!-- content -->
		<article id="content">
			<div class="wrapper">
				<div class="box1">
					<div class="line1 wrapper">
						<section class="col1">
							<h2><strong>A</strong>ddress<span></span></h2>
							<strong class="address">
								
								City:<br>
								Zip Code:<br>
								Telephone:<br>
								Fax:<br>
								E-Mail:
							</strong>
							
							Can Tho<br>
							50122<br>
							+180 01234567<br>
							+155 5123456<br>
							<a href="mailto:">supportgun@gmail.com</a>
						</section>
						<section class="col2 pad_left1">
							<h2 class="color2"><strong>N</strong>ote<span></span></h2>
							<p class="pad_bot1">
									Weapons are equipment, means or combinations of manufactured and manufactured vehicles capable of causing damage or harm to human life and health, destroying material structures, including: dancing Military weapons, hunting guns, rudimentary weapons, sports weapons and other weapons with similar features and effects.
							</p>
									Weapons, explosives, explosive precursors, support tools must be managed and preserved in strict accordance with the regimes and procedures, ensuring safety, not being lost or damaged.
						</section>
					</div>
				</div>	
			</div>
			<div class="wrapper">
				<div class="pad_left2 relative">
					<h4 class="color3"><span>Contact</span>Form</h4>
					<img src="images/page6_img1.png" alt="" class="img1">
					<form id="ContactForm" method="post">
						<div>
							<div class="wrapper"><span>Your Name:</span><input type="text" id="txtName" class="input" required name="txtName"></div>
							<div class="wrapper"><span>Your E-mail:</span><input type="text" id="txtEmail"  class="input" required name="txtEmail"></div>

							<div class="textarea_box"><span>Information</span><textarea name="message" id="message" class="form-control" rows="9" cols="25" required
									placeholder="Enter the information you want to send"></textarea></div>
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="btnContactUs">
								Send</button>
							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').reset()"name="btnContactUs" id="btnContactUs">Clear</a>
						</div>
					</form>
				</div>
			</div>
		</article>
<!-- / content -->
<!-- footer -->
<footer>
			<div class="wrapper">
				<a href="index.html" id="footer_logo"><span>Hope</span>Center</a>
				<ul id="icons">
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon3.gif" alt=""></a></li>
				</ul>
			</div>	
			<div class="wrapper">
				<nav>
					<ul id="footer_menu">
						<li class="active"><a href="index.html">Trang chủ</a></li>
						<li><a href="Mission.html">Cửa hàng</a></li>
						<li><a href="../../account/login/login.php">Đăng nhập</a></li>
						<li class="end"><a href="Contact.php">Liên hệ</a></li>
					</ul>
				</nav>
				<div class="tel"><span>+1 800</span>123 45 67</div>
			</div>
			<div id="footer_text">
					Địa chỉ cửa hàng súng:<br>
					Đường 21 Lý Tự Trọng <a href="https://www.google.com/maps/place/L%C3%BD+T%E1%BB%B1+Tr%E1%BB%8Dng,+Ninh+Ki%E1%BB%81u,+C%E1%BA%A7n+Th%C6%A1,+Vietnam/@10.0342133,105.7775965,17z/data=!3m1!4b1!4m5!3m4!1s0x31a0881ee38079b9:0xf281a75d8bf56fe2!8m2!3d10.0342133!4d105.7797852" target="_blank" rel="nofollow">Cần Thơ, Việt Nam.</a>
			</div>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>