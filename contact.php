<?php
	session_start();

	require_once('db_connect.php');
	if(!isset($_SESSION['user'])){
		$user = "";
	}
	else{
		$user = $_SESSION['user'];
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
<!--Fontawesome Start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-GLhlTQ8iKtEkGE3fN5N/RSUpppf2Mzr8r+4Zl5l5vrfE7/t1I1b48jOOuupp1t2" crossorigin="anonymous">
<!--Fontawesome End-->
	
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	
	<script src="js/croppie.js"></script>
	<style type="text/css">
		body {
			margin: 0;
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



		body {
        background: url(image/photography.png);
        background-size: cover;

        background-repeat: no-repeat;
    }

    h2 {
        color: #f00;
        font-weight: 700;
    }

    .contact-panel {
        text-align: center;

    }


    .social-link {
        /*margin-top: 4.5rem;*/
    }

    .social-link ul li {
        display: inline-block;
        margin: 0 0.3rem;
        font-size: 1.5rem;
    }

    .social-link ul li a i {
        /*color: #fff;*/
    }

    .social-link ul li a i:hover {
        color: #f00;
    }




    /* Form CSS */
    @import url("https://fonts.googleapis.com/css?family=Kavivanar");

    * {
        margin: 0;
        padding: 0;
        user-select: none;
    }

    body {
    /*  font-family: 'Bangla', sans-serif; */

        font-family: "Kavivanar", cursive;  
        background: #c4e0e5;
    }

    .wrapper {
        margin: 0px auto 0;
        width: 100%;
        max-width: 680px;
        padding: 20px;
        box-sizing: border-box;
    }

    /* content */
    .content {
        text-align: center;
    }

    .content h1 {
        letter-spacing: 1px;
    }


    /* form */
    .form {
        width: 100%;
        margin: 25px 0;
    }

    .top-form,
    .middle-form,
    .bottom-form {
        width: 100%;
        min-height: 65px;
        margin: 10px 0;
    }

    .form input[type="text"],
    .form textarea {
        border: 2px solid #fff;
        padding: 10px 5px;
        outline: none;
        border-radius: 2px;
        width: 100%;
        transition: all 0.2s ease;
    }

    .form input:focus,
    .form textarea:focus {
        border-color: #4ca1af;
        outline: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.0125),
            0 0 8px rgba(76, 161, 175, 0.5);
    }

    .form .label {
        margin-bottom: 5px;
        text-transform: capitalize;
    }

    /* top-contact */
    .top-form .inner-form {
        width: 29.9%;
        float: left;
        margin-right: 5%;
    }

    .top-form .inner-form:last-child {
        margin-right: 0;
    }


    /* middle-form */
    .middle-form {
        clear: both;
    }

    /* bottom-form */
    .bottom-form textarea {
        height: 80px;
    }

    .btn {
        background: #4ca1af;
        width: 200px;
        padding: 10px 0;
        border-radius: 2px;
        text-align: center;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 5px;
        cursor: pointer;
    }

    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        font-family: "Kavivanar", cursive;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        font-family: "Kavivanar", cursive;
    }

    :-ms-input-placeholder {
        /* IE 10+ */
        font-family: "Kavivanar", cursive;
    }

    @media screen and (max-width: 460px) {
        .top-form .inner-form {
            width: 100%;
            margin: 5px 0;
        }

        .top-form,
        .middle-form,
        .bottom-form {
            margin: 5px 0;
        }

        .form {
            margin-top: 10px;
        }
    }


    /* youtube link */
    .youtube {
        position: fixed;
        bottom: 10px;
        right: 10px;
        width: 160px;
        text-align: center;
        padding: 15px 10px;
        background: #bb0000;
        border-radius: 5px;
    }

    .youtube a {
        text-decoration: none;
        color: #fff;
        text-transform: capitalize;
        letter-spacing: 1px;
    }


	</style>
</head>
<body>
	<div id="wrapper">
<?php
include 'inc/menu1.php'
?>
		

		<div class="contact-panel mt-5 pt-5">
        <div class="container">
            <div class="row">

                <div class="col-sm-4 shadow" style="background: #000; border-right: 1px solid #000;">
                    <div class="container">
                        <h2>Office</h2>

                        <div class="card">

                            <div class="card-body">
                                <p style="text-align: left;">
                                    R.K. Mission Road, Mymensingh
                                    <br><br>
                                    <strong>Office-time:</strong> <ins>11:00am-08:00pm</ins> <small>(Sat-Fri)</small>
                                    <br><br>
                                    Beside Hatti-Matim-Tim
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-4 shadow" style="background: #e7e7d5; border-right: 1px solid #000;">
                    <h2 style="background: #000; border-radius: 15px;">Hotline</h2>
                    <p style="text-align: left;">
                        You can contact us online=> <strong>09:00am-11:00pm </strong> <ins>(Everyday)</ins>
                        <br><br>

                        <i class="fas fa-phone-alt" style="color: #5506f9;"></i> : 01521305166

                    <div class="social-link">
                        <ul style="display: inline;">
                            <li> <a href="www.facebook.com"><i class="fab fa-facebook-messenger"></i></a></li>
                            <li> <a href="www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                            <li> <a href="#whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                            <li> <a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li> <a href="www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    Beside Hatti-Matim-Tim
                    </p>
                </div>

                <div class="col-sm-4 shadow" style="background: #000; border-right: 1px solid #000;">
                    <div class="container">
                        <h2>Emergency</h2>

                        <div class="card">

                            <div class="card-body">
                                <p style="text-align: left;">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fas fa-user-cog" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            01555000120
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-ambulance" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            01855000420
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-hospital-user" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            01755000575
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-book-open" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            01355000750
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-fire-extinguisher" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            01955000525
                                        </td>
                                    </tr>

                                </table>
                                <h6>Beside Hatti-Matim-Tim</h6>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="wrapper">
            <div class="content">
                <h1>CONTACT US </h1>

            </div>
			<?php
				if(isset($_POST['submit'])){
					$user = $_SESSION['user'];
					$query1 = "SELECT * FROM biodata WHERE user = '$user'";
					$result1 = $con->query($query1);
					$row1 = mysqli_fetch_assoc($result1);
					$query = "INSERT INTO message (sender_id, title,body)  VALUES('$row1[id]','$_POST[title]','$_POST[body]')";
                    $result = $con->query($query);
					$_SESSION['m'] = "Massage Sended Successfully";
				}
			?>
            <form method="POST" class="form">
				<?php
					if(isset($_SESSION['m'])){
						echo $_SESSION['m'];
						unset($_SESSION['m']);
					}

				?>
                <div class="middle-form">
                    <div class="inner-form">
                        <div class="label">subject</div>
                        <input type="text" placeholder="Subject" name="title"/>
                    </div>
                </div>
                <div class="bottom-form">
					<div class="inner-form">
						<div class="label">message</div>
                        <textarea placeholder="Your message" name="body"></textarea>
                    </div>
                </div>
				<div class="middle-form">
					<div class="inner-form">
						<input type="submit" class="btn" name="submit"  value="Send Message"/>
					</div>
				</div>
            </form>
        </div>

    </div>
</body>
</html>