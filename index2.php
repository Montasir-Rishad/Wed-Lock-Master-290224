<?php
	session_start();
	require_once('db_connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>বিয়ে২৪</title>
	<link rel="icon" href="img/Logos.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<style>
		body{margin:0;font-family:Bangla,sans-serif;background-color:#f9f9f9}.login,.slider,.slider:hover{background:#fff;margin-top:20px}input::-moz-placeholder{font-family:Bangla,sans-serif}input:-ms-input-placeholder{font-family:Bangla,sans-serif}input::-ms-input-placeholder{font-family:Bangla,sans-serif}input::-webkit-input-placeholder{font-family:Bangla,sans-serif}input:-moz-placeholder{font-family:Bangla,sans-serif}.slider{box-shadow:0 4px 10px rgba(0,0,0,.15);padding:15px;border-radius:5px}.slider:hover{box-shadow:0 10px 16px rgba(0,0,0,.2);padding:15px;border-radius:8px}.login{box-shadow:0 4px 10px rgba(0,0,0,.15);border-radius:5px;padding:20px;margin-left:-5px}.section2,.sp3{background:#fff;padding:10px 15px}.login:hover{margin-top:20px;background:#fff;box-shadow:0 10px 16px rgba(0,0,0,.2);border-radius:8px}.section1{width:80%;margin:0 auto}.section2{width:80%;margin:17px auto;box-shadow:0 4px 10px rgba(0,0,0,.15);border-radius:5px}.p_sec3,.sp3{margin:0 auto}.section2:hover{box-shadow:0 8px 16px rgba(0,0,0,.25);border-radius:10px}.section3{box-shadow:0 4px 10px rgba(0,0,0,.15);border-radius:5px}.section3:hover{box-shadow:0 8px 16px rgba(0,0,0,.25);border-radius:10px}.section4,.section5{box-shadow:0 4px 10px 0 rgba(0,0,0,.15);width:80%}.section4{border-radius:5px 5px 0 0}.section5{border-radius:0 0 5px 5px}.section5:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,.25);border-radius:0 0 10px 10px}.p_sec3{width:80%}.sp3{width:93%}.dropdownx .dropbtn,.topnav a{font-size:24px;padding:14px 16px}.logo{margin-right:270px}.topnav{overflow:hidden;background-color:#fff;margin-left:10%;z-index:100000}.topnav a{float:left;display:block;color:#7F7F7F;text-align:center;text-decoration:none}.active{color:#4CAF50}.topnav .icon{display:none}.dropdownx{float:left;overflow:hidden}.dropdownx .dropbtn{border:none;outline:0;color:#7F7F7F;background-color:inherit;font-family:inherit;margin:0}.dropdownx-content{display:none;position:absolute;background-color:#fff;min-width:160px;box-shadow:0 8px 16px 0 rgba(0,0,0,.2);z-index:1}.dropdownx-content a{float:none;color:#7f7f7f;padding:12px 16px;text-decoration:none;display:block;text-align:left}.dropdownx-content a:hover,.dropdownx:hover .dropbtn,.nav_content:hover{color:#00A2E8}.dropdownx:hover .dropdownx-content{display:block}.nothing{margin-left:42%}@media screen and (max-width:1280px){.logo{margin-right:50px}.topnav{margin-left:7%}.nothing{margin-left:40%}}@media screen and (max-width:1180px){.logo{margin-right:30px}.topnav{margin-left:1%}.nothing{margin-left:40%}}@media screen and (max-width:900px){.dropdownx .dropbtn,.topnav a:not(:first-child){display:none}.topnav a.icon{float:right;display:block}.topnav{margin-left:4%}.p_sec3,.section1,.section2{width:95%}.sp3{width:100%;margin:10px 0}.login{margin-left:0}.section4,.section5{width:95%}.nothing{margin-left:35%}}@media screen and (max-width:800px){.topnav.responsive{position:relative}.topnav.responsive .icon{position:absolute;right:0;top:0}.topnav.responsive a{float:none;display:block;text-align:left}.topnav.responsive .dropdownx{float:none}.topnav.responsive .dropdownx-content{position:relative}.topnav.responsive .dropdownx .dropbtn{display:block;width:100%;text-align:left}}@media screen and (max-width:480px){.img_slider{height:250px}.nothing{margin-left:25%}}.social a{padding:10px;color:#fff}
		</style>


	</head>
	
<body>
	
	<div style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%;">
		<div class="topnav" id="myTopnav">
		  <a><img class="logo" style="margin-top: -5px;" src="img/logo.png" height="50px"></a>
		  <a href="index.php" class="nav_content" style="color: #00A2E8;">প্রথম পাতা</a>
		  
		  <div class="dropdownx">
		    <button class="dropbtn">সঙ্গী খুঁজুন 
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdownx-content">
		    <?php
		    	if(isset($_SESSION['user']) || isset($_COOKIE['user']) ){
		    		$_SESSION['user'] = $_COOKIE['user'];	
		    ?>
		      <a href="search.php?gender=Male" class="nav_content">পাত্র</a>
		      <a href="search.php?gender=Female" class="nav_content">পাত্রী</a>
		      <?php
		 	 	}
		 	 	else{
		 	 	?>
		 	 	<a href="#" onclick="openModal1()" class="nav_content">পাত্র</a>
		      	<a href="#" onclick="openModal1()" class="nav_content">পাত্রী</a>
		 	 	<?php
		 	 	}
		      ?>
		    </div>
		  </div> 
		  <a href="posts.php" class="nav_content">পোস্ট সমূহ</a>
		  <a href="blog.php" class="nav_content">ব্লগ</a>
		  <?php
		  	if(isset($_SESSION['user'])){
		  		
		  		$user = $_SESSION['user'];
		  		$r = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
		  		if(mysqli_num_rows($r)>0){
		  			$temp = mysqli_fetch_array($r);
		  			$user_id = $temp['id'];
		  			$name = $temp['name'];
		  			$_SESSION['name'] = $name;
		  		}
		  		
		  ?>
		  <!--<a href="help.php" class="nav_content">হেল্প</a>-->
		  <div class="dropdownx">
		    <button class="dropbtn">হেল্প
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdownx-content">
		      <a href="terms.php" class="nav_content">শর্তাবলী</a>
		      <a href="services.php" class="nav_content">সেবাসমূহ</a>
		      <a href="faq.php" class="nav_content">প্রশ্ন ও উত্তর - FAQ</a>
		    </div>
		  </div> 
		  <a href="logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i> লগ আউট করুন</a>
		  <?php
		  	}
		  	else{	  	
		  ?>
		  <a href="#" onclick="openModal1()" class="nav_content">লগ ইন</a>
		  <a href="#" onclick="openModal()" class="nav_content">রেজিস্ট্রেশন</a>
		  <!--<a href="help.php" class="nav_content">হেল্প</a>-->
		  <div class="dropdownx">
		    <button class="dropbtn">হেল্প
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdownx-content">
		      <a href="terms.php" class="nav_content">শর্তাবলী</a>
		      <a href="services.php" class="nav_content">সেবাসমূহ</a>
		      <a href="faq.php" class="nav_content">প্রশ্ন ও উত্তর - FAQ</a>
		    </div>
		  </div> 
		  
		  <?php
		  	}
		  ?>
		  <a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
	</div>
	<div style="width: 100%; margin-top: 73px;">
		<div style="" class="section1 row">
			<div class="slider col-md-7" style=""><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> <ol class="carousel-indicators"> <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li><li data-target="#carouselExampleIndicators" data-slide-to="2"></li></ol> <div class="carousel-inner"> <div class="carousel-item active"> <img class="d-block w-100 img_slider" src="img/dt11.jpg" alt="First slide"> <div class="carousel-caption d-none d-md-block"> </div></div><div class="carousel-item"> <img class="d-block w-100 img_slider" src="img/dt12.jpg" alt="Second slide"> <div class="carousel-caption d-none d-md-block"> <p></p></div></div><div class="carousel-item"> <img class="d-block w-100 img_slider" src="img/dt10.jpg" alt="Third slide"> <div class="carousel-caption d-none d-md-block"> <p></p></div></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a></div></div>
			<div class="col-md-1"></div>
			<?php
				if(isset($_SESSION['user']) /*|| isset($_COOKIE['user'])*/){
					//$_SESSION['user'] = $_COOKIE['user'];
					$user = $_SESSION['user'];
					$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$user'");
					if(mysqli_num_rows($rdp)>0){
						$rww = mysqli_fetch_array($rdp);
						$val = $rww['num'];
						$imageName = $user.'_dp'.$val.'.png';
					}
					else{
						$imageName = 'avatar.png';	
					}

			?>

			<div class="login col-md-4" style="">
				<h3 style="color: #FF8D8D; text-align: center; font-family: 'Galada', cursive;">অভিনন্দন, <span style="color: #7F7F7F;"><?php echo $name;?></span></h3>
				<center><img src="dp/<?php echo $imageName;?>" class="rounded-circle img-thumbnail" width="150"></center>
				<hr>
				<a href="profile.php?us1031gdh312k=<?php echo $user_id;?>"><h5 style="color: #7f7f7f; font-weight: bold; text-align: center;">Profile</h5></a>
				<hr>
				<a href="message_notification.php"><h5 style="color: #7f7f7f; text-align: center; font-weight: bold;">Messages <span id="no_m" onload="ajaxy()" class="badge badge-primary badge-pill"></span></h5></a>
				<hr>
				<a href="comment_notification.php"><h5 style="color: #7f7f7f; text-align: center; font-weight: bold;">Notificaion <span id="no_m2" class="badge badge-danger badge-pill"></span></h5></a>
			</div>
			<?php
				}
				else{


			?>
			<div class="login col-md-4" style="">
				<form method="post" action="" id="lgform1">
					<h3 style="color: #00A2E8;">লগ ইন করুনঃ</h3>
					<label style="font-size: 20px; color: #202340;">ইমেইল/মোবাইলঃ</label>
					<input type="text" style="" required id="Email" class="form-control" placeholder="example@gmail.com/019xxxxxxxx" autocomplete="off">
					<h6 id="xmail_error_message" style="color: red;"></h6>
					<label style="font-size: 20px; margin-top: 17px; color: #202340;">পাসওয়ার্ডঃ</label>
					<input type="password" class="form-control" required id="Password" style="font-family: 'Bangla',sans-serif; font-size: 18px;" placeholder="**********">
					<button type="submit" id="lgin" class="btn btn-info" style="margin-top:10px; font-family: 'Bangla', sans-serif; font-size: 19px;">লগ ইন</button>
				</form>
				
						<div id="report"></div>
				
				<hr>

				<h5 style="margin-top: 20px; color: #7f7f7f;">অ্যাকাউন্ট নেই?</h5>
				<button class="btn btn-danger" data-toggle="modal" data-target="#reg" style="font-family: 'Bangla', sans-serif; font-size: 19px;">রেজিস্ট্রেশন করুন</button>
			</div>
			
			<?php
				}
			?>
<script type="text/javascript">
		function ajaxx(){var e=new XMLHttpRequest;e.onreadystatechange=function(){4==e.readyState&&200==e.status&&(document.getElementById("no_m2").innerHTML=e.responseText)},e.open("POST","cnotify.php",!0),e.send()}setInterval(function(){ajaxx()},3200);

		function ajaxy(){var e=new XMLHttpRequest;e.onreadystatechange=function(){4==e.readyState&&200==e.status&&(document.getElementById("no_m").innerHTML=e.responseText)},e.open("POST","pmnotify.php",!0),e.send()}setInterval(function(){ajaxy()},3200);
  </script>

		</div>
		<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h3 class="modal-title" id="exampleModalLabel" style="color: #00A2E8; text-align: center; margin-left: 15px;">রেজিস্ট্রেশন করুনঃ </h3> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div><div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;"> <form id="registration_form" class="" method="post"> <h5 style="margin-left: 3px; margin-top: 10px;">পাত্র / পাত্রীর পূর্ণনামঃ</h5><input type="text" required id="name" class="form-control" name="" placeholder="আপনার পূর্ণ নাম লিখুন" autocomplete="off"><h6 id="name_error_message" style="color: red;"></h6><h5 style="margin-left: 3px; margin-top: 10px;">জেন্ডারঃ</h5><label class="radio-inline"><input required class="gender" type="radio" name="gender" value="Male"> পুরুষ</label><label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female"> মহিলা</label><h5 style="margin-left: 3px; margin-top: 10px;">ইমেইল / মোবাইল নংঃ</h5><input type="text" required id="email" class="form-control" name="" placeholder="Ex: example@mail.com / 019xxxxxxxx" autocomplete="off"><h6 id="mail_error_message" style="color: red;"></h6><h5 style="margin-left: 3px; margin-top: 10px;">নতুন পাসওয়ার্ডঃ</h5><input required id="form_password" type="password" class="form-control" name="" placeholder="পাসওয়ার্ড দিন..."><h6 id="password_error_message" style="color: red;"></h6><h5 style="margin-left: 3px; margin-top: 10px;">পুনঃরায় পাসওয়ার্ড দিনঃ</h5><input required id="form_retype_password" type="password" class="form-control" name="" placeholder="পুনঃরায় পাসওয়ার্ড দিন..."><h6 id="retype_password_error_message" style="color: red;"></h6><h6 id="retype_password_match_message" style="color: green;"></h6><br><input type="checkbox" required id="check" name="rules" value="YES"><label for="rules"><a href="terms.php">শর্তাবলী</a> আমি পড়েছি এবং সম্মত হয়েছি</label> <div id="result"></div><button class="btn btn-info form-control" id="regbtn" style="font-family: 'Bangla'">অ্যাকাউন্ট খুলুন</button></form> <h5>অ্যাকাউন্ট আছে? <a href="#" onclick="openModal1()" class="nav_content">লগইন করুন</a></h5> </div></div></div></div><div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h3 class="modal-title" style="color: #00A2E8; margin-left: 15px; " id="exampleModalLabel">লগ ইন করুনঃ</h3> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div><div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;"> <form id="login" method="post" action=""> <h5 style="margin-left: 3px; margin-top: 10px;">ইমেইল/মোবাইলঃ</h5> <input type="text" required id="mail" class="form-control" name="" placeholder="example@gmail.com/019xxxxxxxx" autocomplete="off"> <h6 id="ymail_error_message" style="color: red;"></h6> <h5 style="margin-left: 3px; margin-top: 10px;">পাসওয়ার্ডঃ</h5> <input type="password" required id="pass" class="form-control" name="" placeholder="পাসওয়ার্ড দিন..."> <br><button type="submit" id="logn" class="btn btn-info form-control" style="font-family: 'Bangla'">লগ ইন করুন</button> </form> <br><div id="resultx"> </div><div id="resultx1"> </div><h5>অ্যাকাউন্ট নেই? <a href="#" onclick="openModal()" class="nav_content">রেজিস্ট্রেশন করুন</a></h5> </div></div></div></div>

<script type="text/javascript">
	$(document).ready(function(){$("#login").submit(function(){var e=0,a=new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/),l=new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/),t=$("#mail").val();e=a.test($("#mail").val())&&$("#mail").val().length>10?0:l.test($("#mail").val())?0:1;var n=$("#pass").val();if(0==e){var o="name11="+t+"&name22="+n;return $.ajax({type:"post",url:"logprocess.php",data:o,dataType:"json",cache:!1,success:function(e){console.log(e.c),console.log(e.d);var a=e.b,l=(e.d,e.c),t=e.e;1===a?(setTimeout(function(){window.location.href="index.php"},2e3),$("#resultx").html(l)):$("#resultx").html(t)}}),!1}$("#resultx").html("<h5\tstyle='color:red;'>Please insert valid email or mobile number.</h5>")})});
</script>
<script type="text/javascript">
$(document).ready(function(){$("#registration_form").submit(function(){var e=0,a=0,t=0,r=0,l=new RegExp(/(\%27)|(\')|(\-\-)|(\%23)|(#)/i),n=new RegExp(/[1-9][0-9]*|0/),s=new RegExp(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/),o=new RegExp(/[!$%^&*()+|~=`{}\[\]:";'<>?,\/]/),m=$("#name").val();l.test($("#name").val())?e=1:n.test($("#name").val())?e=1:s.test($("#name").val())&&(e=1);var p=$("input[type='radio'].gender:checked").val(),i=$("#email").val();l.test($("#email").val())?a=1:o.test($("#email").val())&&(a=1);var v=$("#form_password").val(),c=$("#form_password").val().length;o.test($("#form_password").val())?t=1:(c<6||c>16)&&(t=1);var d=$("#form_retype_password").val();if(d!=v&&(r=1),0==e&&0==a&&0==t&&0==r){var u="name11="+m+"&name22="+p+"&name33="+i+"&name44="+d;return $.ajax({type:"post",url:"regprocess.php",data:u,dataType:"json",cache:!1,success:function(e){var a=e.b,t=(e.d,e.c);1==a?($("#result").html(t),setTimeout(function(){window.location.href="profile.php"},2e3)):$("#result").html(t)}}),!1}$("#result").html("<h5 style='color:red;'>Please Fill the form correctly.</h5>")})});
</script>
<script type="text/javascript">
$(document).ready(function(){$("#lgform1").submit(function(){var e=0,a=new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/),t=new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/),r=$("#Email").val();e=a.test($("#Email").val())&&$("#Email").val().length>10?0:t.test($("#Email").val())?0:1;var l=$("#Password").val();if(0==e){var o="name11="+r+"&name22="+l;return $.ajax({type:"post",url:"logprocess.php",data:o,dataType:"json",cache:!1,success:function(e){var a=e.b,t=(e.d,e.c),r=e.e;1===a?(setTimeout(function(){window.location.href="index.php"},2e3),$("#report").html(t)):$("#report").html(r)}}),!1}$("#report").html("<br><h5 style='color:red;'>Please insert valid email or mobile number.</h5>")})});
</script>
<?php

	?>
		<div style="" class="section2">
			<h1 style="color: #00A2E8; font-size: 30px;text-align: center;">পাত্র/পাত্রী খোঁজার স্মার্ট, বিশ্বস্ত ও সহজ সমাধান
			</h1>
			<h5 style="color: #7f7f7f;text-align: center;">দেশের প্রথম স্বয়ংসম্পূর্ণ বাংলা অনলাইন বিবাহ সেবায় আপনাকে স্বাগতম। জীবন সঙ্গী খুঁজতে সহজ মাধ্যম biye24.com.bd আর নয় ঘটকের পেছনে ছোটাছুটি, খুঁজে নিন নিজের পছন্দের জীবন সাথীকে। এছাড়া আমাদের ওয়েব সাইটের মাধ্যমে আদান প্রদান করতে পারেন আপনার প্রয়োজনীয় তথ্যের মেসেজ। তাই আর দেরি না করে এখনি রেজিস্ট্রেশন করুন biye24.com.bd এ এবং উপভোগ করুন নতুন কিছু।</h5>
			<?php
				if(isset($_SESSION['user'])/* || isset($_COOKIE['user'])*/){
				}
				else{


			?>
			<center><button class="btn btn-danger" style="font-family: 'Bangla', sans-serif; font-size: 19px; margin-bottom: 10px;"  data-toggle="modal" data-target="#reg" >রেজিস্ট্রেশন করুন</button></center>
			<?php
				}
			?>
		</div>
	</div>
	<div class="p_sec3 row" style="">
		<div class="section3 col-md-4" style="background: white; padding: 10px 25px;">
			<h2 style="color: #00A2E8">সঙ্গী খুঁজুন</h2>
			<?php if(isset($_SESSION['user'])/* || isset($_COOKIE['user'])*/){
			
			?>
			<form method="post" action="search.php">
				<h5 style="color: #7f7f7f;">জেন্ডারঃ</h5>
				<label class="radio-inline" ><input type="radio" name="gender" autocomplete="off" value="Male" > পুরুষ</label>
				<label class="radio-inline" autocomplete="off" ><input type="radio" name="gender" value="Female"> মহিলা</label>
				<hr style="margin-top: 3px;">
				<h5 style="color: #7f7f7f;">বৈবাহিক অবস্থাঃ</h5>

				<label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off" value="বিবাহিত"> বিবাহিত</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="অবিবাহিত"> অবিবাহিত</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="তালাকপ্রাপ্ত"> তালাকপ্রাপ্ত</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="বিধবা"> বিধবা</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="বিপত্নীক"> বিপত্নীক</label>
				<hr style="margin-top: 3px;">
				<h5 style="color: #7f7f7f;">ধর্মঃ</h5>
				<label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off" value="ইসলাম"> ইসলাম</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="হিন্দু"> হিন্দু</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="বৌদ্ধ"> বৌদ্ধ</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="খ্রিস্টান"> খ্রিস্টান</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="অন্যান্য"> অন্যান্য</label>
				<br>
				<button style="margin: 10px 0px;" type="submit" name="search" class="btn btn-info">সার্চ করুন</button>
			</form>
			<?php
				}
				else{
			?>
				<form method="post" action="">
				<h5 style="color: #7f7f7f;">জেন্ডারঃ</h5>
				<label class="radio-inline" ><input type="radio" required="gender" name="gender" autocomplete="off" value="Male"> পুরুষ</label>
				<label class="radio-inline" autocomplete="off" ><input type="radio" name="gender" value="Female"> মহিলা</label>
				<hr style="margin-top: 3px;">
				<h5 style="color: #7f7f7f;">বৈবাহিক অবস্থাঃ</h5>

				<label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off" value="বিবাহিত"> বিবাহিত</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="অবিবাহিত"> অবিবাহিত</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="তালাকপ্রাপ্ত"> তালাকপ্রাপ্ত</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="বিধবা"> বিধবা</label>
		        <label class="radio-inline"><input type="radio" name="m_stat" value="বিপত্নীক"> বিপত্নীক</label>
				<hr style="margin-top: 3px;">
				<h5 style="color: #7f7f7f;">ধর্মঃ</h5>
				<label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off" value="ইসলাম"> ইসলাম</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="হিন্দু"> হিন্দু</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="বৌদ্ধ"> বৌদ্ধ</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="খ্রিস্টান"> খ্রিস্টান</label>
				<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="অন্যান্য"> অন্যান্য</label>
				<br>
				<button style="margin: 10px 0px;" type="button" name="" class="btn btn-info" onclick="openModal1()" id="">সার্চ করুন</button>
			</form>
			<?php
					}
			?>
		</div>
		<div class="col-md-4" style="width: 100%; margin: 0; padding: 0;">
			<?php if(isset($_SESSION['user'])/* || isset($_COOKIE['user'])*/){

			?>
			<div style="" class="sp3 section3">
				<h2 style="color:#00A2E8; margin-bottom: 10px;">অতি সাম্প্রতিক মেম্বারসমূহঃ</h2>
				<?php
					$rm = mysqli_query($con, "SELECT * FROM tipshoi ORDER BY id DESC;");
					if(mysqli_num_rows($rm)>1){
						$no = mysqli_num_rows($rm);
						if($no>3){
							$no = 3;
						}
						for($i=0; $i<$no; $i++){
							$rowm = mysqli_fetch_array($rm);
							$member=$rowm['mail'];
							$user_id = $rowm['id'];
							$mem_name = $rowm['name'];
							$gender = $rowm['gender'];
							if($gender=="Male"){
								$gender = "পুরুষ";
							}
							else{
								$gender = "নারী";	
							} 
							
							$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$member'");
							if(mysqli_num_rows($rdp)>0){
								$rww = mysqli_fetch_array($rdp);
								$val = $rww['num'];
								$imageName = $member.'_dp'.$val.'.png';
							}
							else{
								$imageName = 'avatar.png';	
							}
							if($member!="admin@admin.com"){

					
				?>
				<div class="pull-left" style="margin-right: 30px;">
					<img src="dp/<?php echo $imageName;?>" class="rounded-circle" width="70">
				</div>
				
				<div class="" style="">
					<a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>"><h5 style="color: #7f7f7f;"><?php echo $mem_name; ?></h5></a>
					
					<h6><?php echo $gender;?></h6>
				</div>
				<?php
							if($i<$no-1){
				?>
						<hr style="margin-top: 3px;">
						<br>
				<?php
							}
						}
					}
				?>
				<br>
				<a href="search.php"><button class="btn btn-outline-info" style=" margin-top: 10px; margin-bottom: 10px;">See more</button></a>
				<?php
					}else{
						?>
						<h5 style="color: #7f7f7f; text-align: center;">Nothing to show</h5>
						<?php
					}
				?>
				
				
				
			</div>
			<?php
			}
			else{
			?>
			<div style="min-height: 400px;" class="sp3 section3">
				<h2 style="color:#00A2E8; margin-bottom: 10px;">অতি সাম্প্রতিক মেম্বারসমূহঃ</h2>
				<?php
					$rm = mysqli_query($con, "SELECT * FROM tipshoi ORDER BY id DESC;");
					if(mysqli_num_rows($rm)>1){
						$no = mysqli_num_rows($rm);
						if($no>3){
							$no = 3;
						}

						for($i=0; $i<$no; $i++){
							$rowm = mysqli_fetch_array($rm);
							$member=$rowm['mail'];
							$mem_name = $rowm['name'];
							$gender = $rowm['gender'];
							if($gender=="Male"){
								$gender = "পুরুষ";
							}
							else{
								$gender = "নারী";	
							} 
							$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$member'");
							if(mysqli_num_rows($rdp)>0){
								$rww = mysqli_fetch_array($rdp);
								$val = $rww['num'];
								$imageName = $member.'_dp'.$val.'.png';
							}
							else{
								$imageName = 'avatar.png';	
							}
							if($member!="admin@admin.com"){
					
				?>
				<div class="pull-left" style="margin-right: 30px;">
					<img src="dp/<?php echo $imageName;?>" class="rounded-circle" width="70">
				</div>
				
				<div class="" style="">
					<a href="#"  onclick="openModal1()"><h5 style="color: #7f7f7f;"><?php echo $mem_name; ?></h5></a>
					
					<h6><?php echo $gender;?></h6>
				</div>
				<?php
							if($i<$no-1){
				?>
						<hr style="margin-top: 3px;">
						<br>
				<?php
							}
						  }
						}
				?>

				<br>
				<button class="btn btn-outline-info" onclick="openModal1()" style=" margin-top: 10px; margin-bottom: 10px;">See more</button>
				<?php
					}else{
						?>
						<h5 style="color: #7f7f7f; text-align: center;">Nothing to show</h5>
						<?php
					}
				?>
				
				
			</div>
			<?php
			}
			?>
		</div>
		<div class="section3 col-md-4" style="background: white; height: inherit; padding: 10px 17px;">
			<h4 style="color: #00A2E8;">আসুন এক নজরে দেখে নিই, কিভাবে বিয়ে২৪ এ রেজিস্ট্রেশন ও বায়োডাটা পূরণ করবেনঃ</h4>
			<iframe style="" width="100%" height="270" src="https://www.youtube.com/embed/jrowJhS35y0">
			</iframe> 
		</div>
	</div>
	<div style="width: 100%; margin-top: 15px; ">
		<div style=" background: white; margin: 0 auto; padding-bottom: 5px; padding-top: 10px;" class="section4">
			<h2 style="text-align: center; color: #00A2E8;">অতি সাম্প্রতিক বিয়ের পোস্ট সমূহঃ</h2>

		</div>
		<div style="background: white; margin: -5px auto; padding-bottom: 15px;" class="section5 row">
			<?php
				$qr = mysqli_query($con, "SELECT * FROM posts ORDER BY id DESC");
				if(mysqli_num_rows($qr)>0){
					$cn = mysqli_num_rows($qr);
					if($cn>=3){
						$t = 3;
					}
					else{
						$t = $cn;
					}
					for($i=0; $i<$t; $i++){
						$row = mysqli_fetch_array($qr);
						$gender = $row['gender'];
						$post_id = $row['id'];
						$content = mb_substr($row['content'], 0, 60);
						$hisname = $row['name'];
						$image = $row['image'];
				?>
				<div class="col-md-4" style="padding: 15px;">
					<?php 
							if($gender == "Male"){
							?>
							<h5 style="color: #F20E75; text-align: center; margin-top:-8px; ">পাত্রী চাই</h5>
							<?php
							}else{
							?>
							<h5 style="color: #F20E75; text-align: center; margin-top:-8px; ">পাত্র চাই</h5>
							<?php
							}

							?>
					
					<center><img src="post/<?php echo $image; ?>" width="130" class="rounded-circle"></center>
					<br>
					<h5 style="text-align:center; "><span>নামঃ </span><?php echo $hisname; ?></h5>
					<h5 style="text-align:center;" class="your-div-id"><?php echo $content; ?>...</h5>
					<center><a href="post_s.php?id=<?php echo $post_id;?>"><button class="btn btn-outline-info">See more</button></a></center>
					
				</div>	
				<?php
					}
				}
				else{
					?>
					<h5 class="nothing" style="color: #7f7f7f;">Nothing to show</h5>
					<?php
				}
			?>
			
		</div>
		<div class="section5" style="margin:0 auto;"><a href="posts.php"><button type="button" class="form-control btn btn-info">Show More Posts</button></a></div>
	</div>
		
	<div style="margin-top: 50px; background-image: url('img/f.png'); background-size: 100% 100%; padding-bottom: 10px; box-shadow: 0 -5px 8px -5px rgba(0,0,0,0.2); background-color: #f9f9f9;"><div style="width: 80%; margin: 0 auto; padding: 10px; " class="row"><div class="col-md-2"></div><div class="col-md-4"><h5 style="color: #00A2E8; text-align: center;">Contact Info:</h5><h6 style="color: #7f7f7f; text-align: center;">Email: biye24.com.bd@gmail.com</h6><h6 style="color: #7f7f7f; text-align: center;">Facebook: <small><a href="https://www.facebook.com/biye24/">https://www.facebook.com/biye24/</a></small></h6><h6 style="color: #7f7f7f; text-align: center;">9 AM - 12 PM, Saturday - Friday</h6></div><div class="col-md-4"><h5 style="color: #00A2E8; text-align: center;">Support:</h5><h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="faq.php">FAQ</a></h6><h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="terms.php">Terms of Services</a></h6><h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="services.php">Privacy Policy</h6></div></div><center><button class="btn btn-info">Contact Us</button></center></div><div class="row" style="background: rgb(15,180,231); /* Old browsers */background: -moz-linear-gradient(-45deg, rgba(15,180,231,1) 0%, rgba(169,228,247,1) 100%); /* FF3.6-15 */background: -webkit-linear-gradient(-45deg, rgba(15,180,231,1) 0%,rgba(169,228,247,1) 100%); /* Chrome10-25,Safari5.1-6 */background: linear-gradient(135deg, rgba(15,180,231,1) 0%,rgba(169,228,247,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0fb4e7', endColorstr='#a9e4f7',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */ width: 100%; margin: 0; padding-top: 5px;"><div class="col-md-1"></div><div style="width: 220px; margin: 0 auto;" class="col-md-4 social"><a href="https://www.facebook.com/biye24/" class="fa fa-facebook"></a><a href="#" class="fa fa-youtube"></a><a href="#" class="fa fa-linkedin"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-instagram"></a></div><div class="col-md-6" style="padding: 10px 10px;"><h6 style=" color: white; text-align: center;"><b>&copy Copyright biye24.com.bd All Right Reserved. <small>Developed by <a href="https://www.nakibhossain.com/" style="" class="myname"><u>Nakib Hossain</u></a></b></small></h6></div></div>
	<script>
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
	</script>
	<script type="text/javascript">
	function openModal(){
		$('#reg').modal('show');
		$('#log').modal('hide');
	}
	function openModal1(){
		$('#log').modal('show');
		$('#reg').modal('hide');
	}
	</script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
