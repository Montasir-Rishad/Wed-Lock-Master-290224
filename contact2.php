<?php
 include ( "inc/connection.inc.php" );

ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
	$utype_db = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = $con->query("SELECT * FROM user WHERE id='$user'");
		$get_user_name = $result->fetch_assoc();
			$uname_db = $get_user_name['fullname'];
			$utype_db = $get_user_name['type'];
}

//time ago convert
include_once("inc/timeago.php");
$time = new timeago();


?>



<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />

    <!-- menu tab link -->
    <link rel="stylesheet" type="text/css" href="css/homemenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--------------------------------- Bootstrap-4 CDN ------------------>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!------------------------- Font Awesome CSS ---------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">



    <style>
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

    /*  */
    </style>

</head>

<body class="body1">
    <div>
        <div>
            <header class="header">

                <div class="header-cont">

                    <?php
					include 'inc/menu1.php';
				?>

                </div>
            </header>

        </div>
        <div class="topnav">
            <div class="parent2">
                <div class="test1 bimage1"><a href=""><img src="image/tech.png" title="IT Solution"
                            style="border-radius: 50%;" width="42" height="42"></a></div>
                <div class="test2"><a href="#"><img src="image/eventmgt.png" title="Event Management" width="42"
                            height="42" style="border-radius: 50%;"></a></div>
                <div class="test3"><a href="#"><img src="image/photography.png" title="Photography" width="42"
                            height="42" style="border-radius: 50%;"></a></div>
                <div class="test4"><a href="#"><img src="image/teaching.png" title="Tution" style="border-radius: 50%;"
                            width="42" height="42"></a></div>
                <div class="mask2"><i class="fa fa-home fa-3x"></i></div>
            </div>
            <a class="navlink" href="index.php" style="margin: 0px 0px 0px 100px;">Newsfeed</a>
            <?php 
			if($utype_db == "teacher")
            {
                echo '<a class="navlink" href="search2.php">Search Student</a>';
                
            }else {
                echo '<a class="navlink" href="search.php">Search Tutor</a>';
                if($utype_db == "student")
                {
                    echo '<a class="navlink" href="postform.php">Post</a>';
                }
            }

			 ?>
            <a class="active navlink" href="contact.php">Contact</a>
            <a class="navlink" href="about.php">About</a>
            <div style="float: right;">
                <table>
                    <tr>
                        <?php
							if($user != ""){
								$resultnoti = $con->query("SELECT * FROM applied_post WHERE post_by='$user' AND student_ck='no'");
								$resultnoti_cnt = $resultnoti->num_rows;
								if($resultnoti_cnt == 0){
									$resultnoti_cnt = "";
								}else{
									$resultnoti_cnt = '('.$resultnoti_cnt.')';
								}
								echo '<td>
							<a class="navlink" href="notification.php">Notification'.$resultnoti_cnt.'</a>
						</td>
								<td>
							<a class="navlink" href="profile.php?uid='.$user.'">'.$uname_db.'</a>
						</td>
						<td>
							<a class="navlink" href="logout.php">Logout</a>
						</td>';
							}else{
								echo '<td>
							<a class="navlink" href="login.php">Login</a>
						</td>
						<td>
							<a class="navlink" href="registration.php">Register</a>
						</td>';
							}
						?>

                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="contact-panel mt-5">
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

                        <i class="fas fa-phone-alt" style="color: #5506f9;"></i> : 547567567

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
                                            4576547
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-ambulance" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            5657577
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-hospital-user" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            5657789
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-book-open" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            3895756
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fas fa-fire-extinguisher" style="color: #00f;"></i> :
                                        </td>

                                        <td>
                                            4576547
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
                <h1>CONTACT US</h1>
            </div>
			<?php
				if(isset($_REQUEST['submit']) && isset($_SESSION['user_login'])){
					$query = "INSERT INTO message (sender_id, title,body)  VALUES('$_SESSION[user_login]','$_REQUEST[title]','$_REQUEST[body]')";
                    $result = $con->query($query);
					$_SESSION['m'] = "Massage Sended Successfully";
					header("location: contact.php");
					return;
				}
				else if(isset($_REQUEST['submit']) && !isset($_SESSION['user_login'])){
					$_SESSION['m'] = "Please, Login first";
					header("location: contact.php");
					return;
				}
			?>
            <form class="form">
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
    </div>
    </div>




    <!-- main jquery script -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- homemenu tab script -->
    <script src="js/homemenu.js"></script>

    <!-- topnavfixed script -->
    <!-- <script src="js/topnavfixed.js"></script> -->

</body>

</html>