<?php
	session_start();
	require_once('db_connect.php');

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$data1=test_input($_POST['name11']);
	$data2=test_input($_POST['name22']);
	$ac = 0;
	$msg="";
	$error="";
	if(isset($data1) && isset($data2)){
		$qr = "SELECT * FROM gintama;";
		$rn = mysqli_query($con,$qr);
		while($row = mysqli_fetch_array($rn)){
			$db_mail = $row['yahoo'];
			$db_pass = $row['chabi'];
			if($db_mail===$data1 && $db_pass===$data2){
				$msg = "<br><h5 style='color:green;'>Email/Mobile and Password Matched!</h5>";
				$_SESSION['user']=$db_mail;
				$cookie_name = "user";
				$cookie_value = $db_mail;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
				$ac = 1;
			}
			else{
				$error = "<br><h5 style='color:red;'>Email/Mobile or Password doesn't Match!</h5>";
				
				
			}
		}
		/*$qr = "INSERT INTO `gintama` (`eyed`, `yahoo`, `chabi`) VALUES (NULL, 'nakib@gmail.com', '12345');";
		$run = mysqli_query($con, $qr);*/
	}
		
?>
<?php
	$arr = array('a' => '', 'b' => $ac, 'c' => $msg, 'd' => $data1, 'e' => $error);

	echo json_encode($arr);
?>
<?php
	/*if(isset($msg)){
		//echo "<h6 style='color:green; text-align:center; '>$msg</h5>";
		
	?>
	<script type="text/javascript">
		setTimeout(function(){ window.location.href='index.php' },2000);
	</script>
	<?php
	}
	
	else if(isset($error))
		echo "<h6 style='color:red; text-align:center; '>$error</h5>";*/
?>
			
