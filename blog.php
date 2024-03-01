<?php
	session_start();

	require_once('db_connect.php');
	if(!isset($_SESSION['user'])){
		$user = "";
	}
	else{
		$user = $_SESSION['user'];
		 /*Page Block Session 231223*/

		 $sql = "SELECT * FROM biodata WHERE user='$user'";
		 $result = mysqli_query($con,$sql);
		 $row = mysqli_fetch_assoc($result);
		 if($row["live_status"]==0){
			 header('Location:index.php');
		 }
	 /*Page Block Session end 231223*/
		$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
		$row2 = mysqli_fetch_array($sname);
		$myuser = $row2['id'];
	}
	if(isset($_POST['delete'])){
		$pid = $_POST['post_id'];
		$enqr = mysqli_query($con, "SELECT * FROM goppo WHERE id = '$pid'");
		$ro = mysqli_fetch_array($enqr);
		$image_name = $ro['image'];
		if(!empty($image_name)){
			$path='image/'.$image_name;
			unlink($path);
		}
		$delqr =mysqli_query($con,"DELETE FROM `goppo` WHERE `goppo`.`id` = '$pid'");

	}
//		echo $user;
	
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
	<link rel="stylesheet" type="text/css" href="css/croppie.css">
	<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
	
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	
	<script src="js/croppie.js"></script>
	<style type="text/css">
		body {
			margin:0;
			font-family: 'Bangla', sans-serif;
			background: #f9f9f9;
			height: 100%;
		}
		#wrapper{
			min-height: 100%;
			position: relative;
		}
		
		.topnav a {
		  float: left;
		  display: block;
		  color: #7F7F7F;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 24px;
		}
		.dropdownx {
		    float: left;
		    overflow: hidden;
		}

		.dropdownx .dropbtn {
		    font-size: 24px;    
		    border: none;
		    outline: none;
		    color: #7F7F7F;
		    padding: 14px 16px;
		    background-color: inherit;
		    font-family: inherit;
		    margin: 0;
		}

		.dropdownx-content {
		    display: none;
		    position: absolute;
		    background-color: white;
		    min-width: 160px;

		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdownx-content a {
		    float: none;
		    color: #7f7f7f;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		    text-align: left;
		}

		.sidenav {
		  overflow: hidden;
		  background: #E1EFF9;
		  box-shadow: 0px 6px 14px 0px rgba(0,0,0,0.15);
		  padding: 0px;
		  padding-top: 25px;
		  height: 100%;
		  border-radius: 5px;
		  
		}
		.sidenav:hover{
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);	

		}
		
		.blog_sec{
			width: 77%; margin:50px auto;
	    }

		.active {
		  color: #4CAF50;;
		}

		.topnav .icon {
		  display: none;
		}
		.modal-content{
			padding: 0px 100px;
		}
		.sidnav_a{
			text-decoration: none;
			color: #7f7f7f;
		}

		.sidnav_a:hover{
			text-decoration: none;
			color: #00A2E8;
		}
		@media screen and (max-width: 900px) {
			.blog_sec{
				width: 95%; margin:50px auto;
	    	}
		}
	</style>
</head>
<body>
	<div id="wrapper">
<?php
include 'inc/menu1.php'
?>
		

		<div style="" class="row blog_sec">

			<div style="margin-top: 60px;" class="col-md-2 sidenav">
				<?php if(isset($_SESSION['user'])){?>	
				<ul class="list-group">
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    <a class="sidnav_a" href="profile.php?us1031gdh312k=<?php echo $myuser;?>">Profile</a>
				    
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    <a class="sidnav_a" href="message_notification.php">Messages</a>
				    <span id="no_m" class="badge badge-info badge-pill"></span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    <a class="sidnav_a"  href="comment_notification.php">Notifications</a>
				    <span id="no_m2" class="badge badge-warning badge-pill"></span>
				  </li>
				</ul>
			<?php } 
			
			?>
			</div>
			<?php
				if(isset($_SESSION['user'])){
			?>
<script type="text/javascript">
		function ajaxx(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('no_m2').innerHTML = req.responseText;

                }
            }
            req.open('POST','cnotify.php',true);
            req.send();
        }
        setInterval(function(){ajaxx()},1200);

		function ajax23(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('no_m').innerHTML = req.responseText;

                }
            }
            req.open('POST','pmnotify.php',true);
            req.send();
        }
        setInterval(function(){ajax23()},1200);
  </script>
 <?php }?>
			<div class="col-md-1"></div>
			<div class="col-md-9" style="margin: 0; padding: 0;">
				<?php
					if(isset($_SESSION['user'])){
				?>
				<button type="button" id="post_now" style="font-family: 'Bangla', sans-serif; margin-top: 60px; margin-bottom: -50px; font-weight: bold;" class="btn btn-info form-control">Post Here</button>
			<?php } ?>
				<button type="button" id="hide_now" style="margin-top: 60px; margin-bottom: -50px;" class="btn btn-info form-control">Hide</button>
				<div class="b_posts" id="post_area">
					<h4 style="color: #32BEF0;">Add Photo</h4>
					<input type="file" class="form-control" name="upload_image" id="upload_image" />
  					<br>
  					
  					<div id="uploaded_image"></div>
					<form method="post" action="" enctype="multipart/formdata">
						<h4 style="color: #32BEF0;">Add Title:</h4>
						<input type="text" required id="title" name=""  onfocusout="name_func2(this.value)" class="form-control" onfocus="name_func()" autocomplete="off" placeholder="Add Title Here..." onkeyup="dunc()">
						<h6 style='margin-left: 5px; margin-top: 3px; margin-bottom: 0px;' id = "nm"></h6>
        			
        			<script>
        				function dunc(){
        					document.getElementById('nm').innerHTML = "";
        				}
        			    function name_func(){
        			        document.getElementById('nm').innerHTML = "একটি আকর্ষণীয় টাইটেল দিন...";
        			        document.getElementById('nm').style.color = "red";
        			    }
        			    
        			    function name_func2(name){
        			            //document.getElementById('nm').innerHTML = "";
        			            if(name == ""){
        			            	document.getElementById('nm').innerHTML = "একটি আকর্ষণীয় টাইটেল দিন...";
        			            	document.getElementById('nm').style.color = "red";
        			            }
        			            else{
        			            	document.getElementById('nm').innerHTML = "সুন্দর টাইটেল!";
        			     			document.getElementById('nm').style.color = "green";   
        			        	}
        			    }
        			</script>
						<h4 style="color: #32BEF0;">Write Post:</h4>
						<input type="hidden" id="user" name="" value="<?php echo $user;?>">
						
						<textarea rows="10" class="form-control" required id="post_content" placeholder="Write Post Here..."></textarea>
						<br>
						<button type="submit" id="submit_post" class="btn btn-info" style="font-family: 'Bangla', sans-serif;">Post now</button>
					</form>
					<div id="result">
						
					</div>
				</div>
<script type="text/javascript">
/* For Loading Data */
  function ajax1(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('post_load1').innerHTML = req.responseText;

        }
    }
    req.open('POST','post_load.php',true);
    req.send();
  }

  setInterval(function(){ajax1()},1200);
  </script>

				<div class="" style="margin:0;" id="post_load1" >
					
				</div>
			</div>
		</div>

		<?php
		if(isset($_SESSION['user'])){
			//echo $_SESSION['user'];
			
		}
		?>
<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content" style="padding: 0">
			      <div class="modal-header">
			        <h3 class="modal-title" id="exampleModalLabel" style="color: #00A2E8; text-align: center; margin-left: 15px;">Register Now </h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
			       	<form id="registration_form" class="" method="post">
				           

						<h5 style="margin-left: 3px; margin-top: 10px;">পাত্র / পাত্রীর পূর্ণনামঃ</h5>
						<input type="text" required id="name" class="form-control" name="" placeholder="আপনার পূর্ণ নাম লিখুন">
						<h6 id="name_error_message" style="color: red;"></h6>
						<h5 style="margin-left: 3px; margin-top: 10px;">জেন্ডারঃ</h5>
						<label class="radio-inline"><input required class="gender" type="radio" name="gender"  value="Male"> পুরুষ</label>
						<label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female"> মহিলা</label>

						<h5 style="margin-left: 3px; margin-top: 10px;">ইমেইল / মোবাইল নংঃ</h5>
						<input type="text" required id="email" class="form-control" name="" placeholder="Ex: example@mail.com / 019xxxxxxxx">
						<h6 id="mail_error_message" style="color: red;"></h6>
						<h5 style="margin-left: 3px;  margin-top: 10px;">নতুন পাসওয়ার্ডঃ</h5>
						<input required id="form_password" type="password" class="form-control" name="" placeholder="পাসওয়ার্ড দিন...">
						<h6 id="password_error_message" style="color: red;"></h6>
						<h5 style="margin-left: 3px; margin-top: 10px;">পুনঃরায় পাসওয়ার্ড দিনঃ</h5>
						<input required id="form_retype_password" type="password" class="form-control" name="" placeholder="পুনঃরায় পাসওয়ার্ড দিন...">
						<h6 id="retype_password_error_message" style="color: red;"></h6>
						<h6 id="retype_password_match_message" style="color: green;"></h6>
						<br>
						<input type="checkbox" required id="check" name="rules" value="YES">
						<label for="rules"><a href="help.php">শর্তাবলী</a> আমি পড়েছি এবং সম্মত হয়েছি</label> 
						<div id="result"></div>      
						<button class="btn btn-info form-control" id="regbtn" style="font-family: 'Bangla'">অ্যাকাউন্ট খুলুন</button>
					</form>

				      <h5>অ্যাকাউন্ট আছে? <a href="#" onclick="openModal1()" class="nav_content">লগইন করুন</a></h5>
				      

			      </div>
			    </div>
			  </div>
			</div>
		<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content" style="padding: 0;">
			      <div class="modal-header">
			        <h3 class="modal-title" style="color: #00A2E8; margin-left: 15px; " id="exampleModalLabel">লগ ইন করুনঃ</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
			       	<form id="login" method="post" action="">
				        
				        <h5 style="margin-left: 3px; margin-top: 10px;">ইমেইল/মোবাইলঃ</h5>
				        <input type="text" required id="mail" class="form-control" name="" placeholder="example@gmail.com/019xxxxxxxx">
				        <h6 id="ymail_error_message" style="color: red;"></h6>
				        <h5 style="margin-left: 3px; margin-top: 10px;">পাসওয়ার্ডঃ</h5>
				        <input type="password" required id="pass" class="form-control" name="" placeholder="পাসওয়ার্ড দিন...">
				        <br>    
				        <button type="submit" id="logn" class="btn btn-info form-control" style="font-family: 'Bangla'">লগ ইন করুন</button>
				      </form>
				      <br>
				      <div id="resultx">
					  	
					  </div>
					  <div id="resultx1">
					  	
					  </div>
				      <h5>অ্যাকাউন্ট নেই? <a href="#" onclick="openModal()" class="nav_content">রেজিস্ট্রেশন করুন</a></h5>

			      </div>
			    </div>
			  </div>
			</div>
		
<script type="text/javascript">
$(document).ready(function(){
	$("#login").submit(function(){
		//alert("Hello adil");
		var eror_mail = 0;
		var pat1 = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
		var pat3 = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);

		var adil=$("#mail").val();
		if(pat1.test($("#mail").val()) && $("#mail").val().length > 10) {
			eror_mail = 0;
		}
		else if(pat3.test($("#mail").val())) {
			eror_mail = 0;
		}
		else{
			eror_mail = 1;
		}

		var data2=$("#pass").val();

		if(eror_mail == 0){
			
			var datastring='name11='+adil+'&name22='+data2;
			
			$.ajax({
				type:"post",
				url:"logprocess.php",
				data:datastring,
				dataType:"json",
				cache:false,
				success:function(JSONObject)
				{
					console.log(JSONObject.c);
					console.log(JSONObject.d);
					var ac = JSONObject.b;	
					var mail = JSONObject.d;
					var msg = JSONObject.c;
					var error = JSONObject.e;
					if(ac===1){
						
						setTimeout(function(){ window.location.href='blog.php' },2000);
						$("#resultx").html(msg);
					}
					else{
						$("#resultx").html(error);
					}
				}
				
			});
			return false;	
		}
		else{
			$("#resultx").html("<h5	style='color:red;'>Please insert valid email or mobile number.</h5>");
		}
		
	});
		
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#registration_form").submit(function(){

		//alert("Hello adil");
		var name_error=0;
		var mail_error=0;
		var pass_error=0;
		var con_pass_error=0;
		var pat1 = new RegExp(/(\%27)|(\')|(\-\-)|(\%23)|(#)/i);
		var pat2 = new RegExp(/[1-9][0-9]*|0/);
		var pat3 = new RegExp(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/);
		var pat4 = new RegExp(/[!$%^&*()+|~=`{}\[\]:";'<>?,\/]/);
		
		
		var adil=$("#name").val();
		

		if(pat1.test($("#name").val())) {
			name_error = 1;
		}
		else if(pat2.test($("#name").val())) {
			name_error = 1;
		}
		else if(pat3.test($("#name").val())) {
			name_error = 1;
		}

		var data1=$("input[type='radio'].gender:checked").val();
		var data2=$("#email").val();
		
		
		if(pat1.test($("#email").val())) {
			mail_error = 1;
		}
		else if(pat4.test($("#email").val())) {
			mail_error = 1;
		}
		

		var data31 =  $("#form_password").val();
		var pass_len = $("#form_password").val().length;
		
		if(pat4.test($("#form_password").val())){
			pass_error = 1;
		}

		else if(pass_len < 6 || pass_len > 16){
			pass_error = 1;
		}
		
		var data3=$("#form_retype_password").val();
		if(data3 != data31){
			con_pass_error = 1;
		}

		if(name_error == 0 && mail_error == 0 && pass_error == 0 && con_pass_error == 0){
			var datastring='name11='+adil+'&name22='+data1+'&name33='+data2+'&name44='+data3;
			
			$.ajax({
				type:"post",
				url:"regprocess.php",
				data:datastring,
				dataType:"json",
				cache:false,
				success:function(JSONObject)
				{
					//console.log(JSONObject.c);
					//console.log(JSONObject.d);
					var ac = JSONObject.b;	
					var mail = JSONObject.d;
					var msg = JSONObject.c;
					if(ac==1){
						$("#result").html(msg);	
						setTimeout(function(){ window.location.href='profile.php' },2000);
					}
					else if(ac==2){
						$("#result").html(msg);	
					}
					else{
						$("#result").html(msg);	
					}
					
				}
				
			});
			return false;
		}
		else{
			$("#result").html("<h5 style='color:red;'>Please Fill the form correctly.</h5>");	
		}
		
	});
		
});
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
<script type="text/javascript">
$('#post_area').hide();
$('#hide_now').hide();
$('#post_now').click(function(){
	$('#post_area').show();
	$('#post_now').hide();
	$('#hide_now').show();
});
$('#hide_now').click(function(){
	$('#post_area').hide();
	$('#post_now').show();
	$('#hide_now').hide();
});
var myDiv = $('#your-div-id');
myDiv.text(myDiv.text().substring(0,650) + '....');
var img;
$(document).ready(function(){
	$("#submit_post").click(function(){
		//alert("Hello adil");
		var title = $("#title").val();
		var adil=$("#post_content").val();
		var data2=$("#user").val();
		
		var datastring='name11='+adil+'&name22='+data2+'&title='+title;
		
		if(adil!=""){
			$.ajax({
				type:"post",
				url:"upload.php",
				data:datastring,
				dataType:"json",
				cache:false,
				success:function(JSONObject)
				{	
					var msg = JSONObject.c;
					$("#result").html(msg);
					var ac = JSONObject.b;
					if(ac == 1){
						$('#uploaded_image').hide();
						$("#post_content").val("");
						$("#upload_image").val("");
					}	
					
				}
				
			});
		}
		return false;
		
	});
		
});
</script>
		<div id="uploadimageModal" style="" class="modal" role="dialog">
			<div class="modal-dialog" style="">
				<div class="modal-content" style="">
		      		<div class="modal-header">
		        		
		        		<h4 style="color: #32BEF0;" class="modal-title">Crop Image</h4>
		        		<button type="button"  class="close" data-dismiss="modal">&times;</button>
		      		</div>
		      		<div class="" style="">
		  					
						  <div id="image_demo" style="width:430px; margin-left:-115px;"></div>
  						
					</div>
					<br>
					<div class="modal-footer">
						<div  style="margin-top: -40px;" class="btn-group">
						  <button style=""	class="btn btn-info crop_image">Upload</button>
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						 </div>
						
					</div>
		    	</div>
		    </div>
		</div>

<?php

?>
		<div style="position: absolute;  bottom: 0; width: 100%; height: 10px;">
			
<?php
include 'inc/footer.php';
?>

		</div>
	</div>
	<input type="hidden" name="" id="name_img" value="<?php echo $user;?>">
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
<script>  
$(document).ready(function(){
  var name = $("#name_img").val();
	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:320,
      height:320,
      type:'square' //circle
    },
    boundary:{
      width:338,
      height:338
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
       	
        data:{
          "image": response,
          "name": name
        },
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
          

        }
      });
    })
  });

});  
</script>

<script type="text/javascript">
	
</script>
</body>
</html>