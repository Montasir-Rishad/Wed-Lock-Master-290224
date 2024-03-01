<?php
	session_start();

	require_once('db_connect.php');
	if(!isset($_SESSION['user'])){
		header('Location:index.php');
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
		$user_bio_data = mysqli_query($con, "SELECT * FROM biodata WHERE user = '$user';");
		$row3 = mysqli_fetch_assoc($user_bio_data);
		$user_last_qualification = "";
		if($row3){
			$user_last_qualification = $row3["last_ins"];
		}
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
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	
	<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="js/jquery.min.js"></script>  
	<script src="js/bootstrap.min.js"></script>  
	<script src="js/croppie.js"></script>
	<style type="text/css">
		body {
			margin:0;
			font-family: 'Bangla', sans-serif;
			background: #e6f5ff;
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
		  color: #4CAF50;
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
<!---------Menu1 Start---------------->
<?php
include 'inc/menu1.php';
?>
<!---------Menu1 End---------------->


	<div id="wrapper">
		<div style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%; ">
			<div class="topnav" id="myTopnav">
			  <a><img class="logo" style="margin-top: -5px;" src="img/WC_logo.png" height="50px"></a>
			  <a href="index.php" class="nav_content">Home</a>
			  
			  <div class="dropdownx">
			    <button class="dropbtn" style="color: #00A2E8;">Find Partner 
			      <i class="fa fa-caret-down"></i>
			    </button>
			    <div class="dropdownx-content">
			      <a href="search.php?gender=Male" class="nav_content">Groom</a>
			      <a href="search.php?gender=Female" class="nav_content">Bride</a>
			    </div>
			  </div>

			  <!--<a href="posts.php" class="nav_content">Posts</a>-->

			  
			  <a href="blog.php" class="nav_content" style="">Blog</a>
			  <!--<a href="#" onclick="openModal1()" class="nav_content">লগ ইন</a>
			  <a href="#" onclick="openModal()" class="nav_content">রেজিস্ট্রেশন</a>
			  <a href="help.php" class="nav_content">হেল্প</a>-->
			  <div class="dropdownx">
			    <button class="dropbtn">Help 
			      <i class="fa fa-caret-down"></i>
			    </button>
			    <div class="dropdownx-content">
			      <a href="terms.php" class="nav_content">Terms</a>
			      <a href="services.php" class="nav_content">Services</a>
			      <a href="faq.php" class="nav_content">FAQ</a>
			    </div>
			  </div>
			  <a href="logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
			  <a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
		</div>
		

		<div style="" class="row blog_sec">
			<div style="margin-top: 60px;" class="col-md-2 sidenav">
				
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
			</div>
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

			<div class="col-md-1"></div>
			<div class="col-md-9" style="margin: 0; padding: 0; margin-top: 60px; min-height: 400px;">
			<div class="row">
			
<?php
	if(isset($_GET['gender'])){
		$gender = $_GET['gender'];
		//Created a template
		$sql = "SELECT * FROM tipshoi WHERE gender = ? ORDER BY id DESC";
		//Create a prepared statement
		$stmt = mysqli_stmt_init($con);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "Sql statement failed!";
		}
		else{
			//bind parameter
			mysqli_stmt_bind_param($stmt, 's', $gender);
			//run
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		/*}
		/*$rn = mysqli_query($con, "SELECT * FROM tipshoi WHERE gender = '$gender' ORDER BY id DESC");*/
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
					$name = $row['name'];
					$mail = $row['mail'];
					$user_id = $row['id'];
					if($mail!="admin@admin.com" && $mail!=$user){
						$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$mail'");
						if(mysqli_num_rows($rdp)>0){
							$rww = mysqli_fetch_array($rdp);
							$val = $rww['num'];
							$imageName = $mail.'_dp'.$val.'.png';
						}
						else{
							$imageName = 'avatar.png';	
						}
					?>
				<div style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
					<div class="pull-left">
						<img src="dp/<?php echo $imageName;?>" width="70" class="rounded-circle">

					</div>
					<div style="padding: 17px 0px;">
						<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>" style="color: #7f7f7f;"	><?php echo $name?></a></h3>
					</div>
				</div>
				<?php
					}
				}
			} 
		}
	}
	else if(isset($_POST['search'])){
		$m_stat = $_POST['m_stat'];
		$gender = $_POST['gender'];
		
		
		$religion = $_POST['religion'];
		//echo $gender;
		//echo $religion;
		//echo $m_stat;
		//error is here

		$last_qualification_sql = "SELECT * FROM last_educational_qualification WHERE degree = '$user_last_qualification'";
		$last_qualification_result = mysqli_query($con,$last_qualification_sql);
		$row4 = mysqli_fetch_assoc($last_qualification_result);
		if(	$row4){

		
		$last_ins_category = $row4["category"];
		
		$all_last_qualification = mysqli_query($con, "SELECT * FROM last_educational_qualification WHERE category = $last_ins_category");

		$last_qualification_array = array();

		while($row5 = mysqli_fetch_assoc($all_last_qualification)){
			array_push($last_qualification_array,$row5["degree"]);
		}


		$last_qualification = join("','",$last_qualification_array);

		$query = "SELECT * FROM biodata WHERE gender = '$gender' AND user != '$user' AND religion = '$religion' AND m_stat = '$m_stat' AND last_ins IN ('$last_qualification')";



		$rn = mysqli_query($con, $query);
		?>
			<div class="col-md-6">
				<h5 class="text-center" style="color:blue;text-align:center; border: 2px solid green; border-width: 5px 5px 5px 30px;
  border-radius: 25px; background-color: lightblue; color: #000; font-weight: bold; padding: 10px 5px 10px 5px; box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;">Recommended</h5>

				<?php
		if(mysqli_num_rows($rn)>0){  //here
			
			while($row = mysqli_fetch_array($rn)){
				$dm_stat = $row['m_stat'];
				$dreligion = $row['religion'];
				$dgender = $row['gender'];
				$name = $row['name'];
				$user = $row['user'];
				$idfind = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user'");
				$idrow = mysqli_fetch_array($idfind);
				$user_id = $idrow['id'];
				//if($m_stat == $dm_stat && $gender = $dgender && $religion == $dreligion){
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
				<div style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
					<div class="pull-left">
						<img src="dp/<?php echo $imageName;?>" width="70" class="rounded-circle">

					</div>
					<div style="padding: 17px 0px;">
						<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>" style="color: #7f7f7f;"	><?php echo $name?></a></h3>
					</div>
				</div>			
		<?php
			
				}
			//}

		}
		else
		{
		?>	
			<h4 style="color: #7f7f7f; font-style: italic;"> Sorry! No one found!</h4>
		<?php
		}
		?></div><?php
	}
	else{
		?>
	
		<div class="col-md-6">
				<h5 class="text-center" style="color:blue;text-align:center; border: 2px solid green; border-width: 5px 5px 5px 30px;
				border-radius: 25px; background-color: lightblue; color: #000; font-weight: bold; padding: 10px 5px 10px 5px; box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;">Recommended</h5>
				<h4 style="color: #7f7f7f; font-style: italic;"> Sorry! No one found!</h4>
		</div>
		<?php
		
	}

		$query = "SELECT * FROM biodata WHERE gender = '$gender' AND religion = '$religion' AND m_stat = '$m_stat' AND user != '$user'";



		$rn = mysqli_query($con, $query);
		?>
			<div class="col-md-6">
			<h5 class="text-center" style="color:blue;text-align:center; border: 2px solid green; border-width: 5px 5px 5px 30px;
  border-radius: 25px; background-color: lightblue; color: #000; font-weight: bold; padding: 10px 5px 10px 5px; box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;">Random</h5>
				<?php
		if(mysqli_num_rows($rn)>0){  //here
			
			while($row = mysqli_fetch_array($rn)){
				$dm_stat = $row['m_stat'];
				$dreligion = $row['religion'];
				$dgender = $row['gender'];
				$name = $row['name'];
				$user = $row['user'];
				$idfind = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user'");
				$idrow = mysqli_fetch_array($idfind);
				$user_id = $idrow['id'];
				//if($m_stat == $dm_stat && $gender = $dgender && $religion == $dreligion){
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
				<div style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
					<div class="pull-left">
						<img src="dp/<?php echo $imageName;?>" width="70" class="rounded-circle">

					</div>
					<div style="padding: 17px 0px;">
						<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>" style="color: #7f7f7f;"	><?php echo $name?></a></h3>
					</div>
				</div>			
		<?php
			
				}
			//}

		}
		else
		{
		?>	
			<h4 style="color: #7f7f7f; font-style: italic;"> Sorry! No one found!</h4>
		<?php
		}
		?></div><?php


?><div><?php

		
	}
	else{
		$rn = mysqli_query($con, "SELECT * FROM tipshoi ORDER BY id DESC");
		if(mysqli_num_rows($rn)>0){
			while($row = mysqli_fetch_array($rn)){
				$name = $row['name'];
				$mail = $row['mail'];
				$idfind = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$mail'");
				$idrow = mysqli_fetch_array($idfind);
				$user_id = $idrow['id'];
				$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$mail'");
				if(mysqli_num_rows($rdp)>0){
					$rww = mysqli_fetch_array($rdp);
					$val = $rww['num'];
					$imageName = $mail.'_dp'.$val.'.png';
				}
				else{
					$imageName = 'avatar.png';	
				}
				if($mail != "admin@admin.com"){
				?>
				<div style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
					<div class="pull-left">
						<img src="dp/<?php echo $imageName;?>" width="70" class="rounded-circle">

					</div>
					<div style="padding: 17px 0px;">
						<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>" style="color: #7f7f7f;"	><?php echo $name?></a></h3>
					</div>
				</div>
				<?php
			}
			}
		} 
	}
?>
				
				
			</div>
		</div>

		<?php
		if(isset($_SESSION['user'])){
			//echo $_SESSION['user'];
			
		}
		?>
<script type="text/javascript">

$(document).ready(function(){
	$("#submit_post").click(function(){
		//alert("Hello adil");
		var adil=$("#post_content").val();
		var data2=$("#user").val();
		
		var datastring='name11='+adil+'&name22='+data2;
		
		
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
</script>

<script type="text/javascript">
	
</script>
</body>
</html>