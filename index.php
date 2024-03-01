<?php
//	$lifetime=3600;
  //	session_set_cookie_params($lifetime);
	session_start();
	require_once('db_connect.php');

	

?>
<!DOCTYPE html>
<html>

<head>
    <title>WM</title>
    <link rel="icon" href="img/WC_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/validation.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <style>
    body {
        margin: 0;
        font-family: 'Bangla', sans-serif;
        /*background-color: #f9f9f9;
			background-image: url("image/imagecar/BMWblack.jpg");*/


        background-color: #663333;

    }

    input::-moz-placeholder {
        font-family: 'Bangla', sans-serif;
    }

    input:-ms-input-placeholder {
        font-family: 'Bangla', sans-serif;
    }

    input::-ms-input-placeholder {
        font-family: 'Bangla', sans-serif;
    }

    input::-webkit-input-placeholder {
        font-family: 'Bangla', sans-serif;
    }

    input:-moz-placeholder {
        /* Firefox 18- */
        font-family: 'Bangla', sans-serif;
    }

    .slider {
        background: white;
        margin-top: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        padding: 15px 15px;
        border-radius: 5px;
    }

    .slider:hover {
        background: white;
        margin-top: 20px;
        box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
        padding: 15px 15px;
        border-radius: 8px;
    }

    .login {
        margin-top: 20px;
        padding: 15px;
        background: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 5px;
        padding: 20px;
        margin-left: -5px;
        background: #fdf2e9;
    }

    .login:hover {
        margin-top: 20px;
        background: white;
        box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
        border-radius: 8px;

    }

    .section1 {
        width: 80%;
        margin: 0 auto;
    }

    .section2 {
        background: white;

        width: 80%;
        margin: 17px auto;
        padding: 10px 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 5px;
    }

    .section2:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
    }

    .section3 {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 5px;
        background: #fdf2e9;
        padding: 10px 25px;

    }

    .section3:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        background: white;
    }

    .section4 {
        width: 80%;
        border-radius: 5px 5px 0px 0px;
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.15);
    }

    .section5 {
        width: 80%;
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.15);
        border-radius: 0px 0px 5px 5px;

    }

    .section5:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.25);
        border-radius: 0px 0px 10px 10px;
    }

    .p_sec3 {
        width: 80%;
        margin: 0 auto;

    }

    .sp3 {
        width: 93%;
        margin: 0 auto;
        background: #fdf2e9;
        padding: 10px 15px;
    }

    .logo {
        margin-right: 270px;
    }

    .topnav {
        overflow: hidden;
        background-color: #003333;
        color: #fff;
        margin-left: 10%;
        z-index: 100000;
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

    .active {
        color: #4CAF50;
        ;
    }

    .topnav .icon {
        display: none;
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

        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

    .nav_content:hover,
    .dropdownx:hover .dropbtn {
        color: #00A2E8;
    }

    .dropdownx-content a:hover {
        color: #00A2E8;
    }

    .dropdownx:hover .dropdownx-content {
        display: block;
    }

    .nothing {
        margin-left: 42%;
    }

    @media screen and (max-width: 1280px) {
        .logo {
            margin-right: 50px;
        }

        .topnav {
            margin-left: 7%;
        }

        .nothing {
            margin-left: 40%;
        }
    }

    @media screen and (max-width: 1180px) {
        .logo {
            margin-right: 30px;
        }

        .topnav {
            margin-left: 1%;
        }

        .nothing {
            margin-left: 40%;
        }
    }

    @media screen and (max-width: 900px) {

        .topnav a:not(:first-child),
        .dropdownx .dropbtn {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }

        .topnav {
            margin-left: 4%;
        }

        .section1 {
            width: 95%;
        }

        .section2 {
            width: 95%;
        }

        .p_sec3 {
            width: 95%;
        }

        .sp3 {
            width: 100%;
            margin: 10px 0;
        }

        .login {
            margin-left: 0px;
        }

        .section4 {
            width: 95%;
        }

        .section5 {
            width: 95%;
        }

        .nothing {
            margin-left: 35%;
        }

    }

    @media screen and (max-width: 800px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav.responsive .dropdownx {
            float: none;
        }

        .topnav.responsive .dropdownx-content {
            position: relative;
        }

        .topnav.responsive .dropdownx .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }
    }

    @media screen and (max-width: 480px) {
        .img_slider {
            height: 250px;
        }

        .nothing {
            margin-left: 25%;
        }
    }

    .social a {
        padding: 10px 10px;
        color: white;
    }



    .carousel-inner img {
        width: 100%;
        height: 50vh;
    }
    </style>


</head>

<body>

    <!---------Menu1 Start---------------->
    <?php
include 'inc/menu1.php';
?>
    <!---------Menu1 End---------------->

    <div style="width: 100%; margin-top: 73px;">
        <div style="" class="section1 row">
            <div class="slider col-md-7" style="">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img_slider" src="img/marriage1.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img_slider" src="img/marriage2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">

                                <p></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 img_slider" src="img/marriage3.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">

                                <p></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 img_slider" src="img/marriage4.jpg" alt="Fourth slide">
                            <div class="carousel-caption d-none d-md-block">

                                <p></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 img_slider" src="img/marriage5.jpg" alt="Fifth slide">
                            <div class="carousel-caption d-none d-md-block">

                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
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
                <h3 style="color: #FF8D8D; text-align: center; font-family: 'Galada', cursive;">Congratulation, <span
                        style="color: #7F7F7F;"><?php echo $name;?></span></h3>
                <center><img src="dp/<?php echo $imageName;?>" class="rounded-circle img-thumbnail" width="150">
                </center>
                <hr>
                <a href="profile.php?us1031gdh312k=<?php echo $user_id;?>">
                    <h5 style="color: #7f7f7f; font-weight: bold; text-align: center;">Profile</h5>
                </a>
                <hr>
                <a href="message_notification.php">
                    <h5 style="color: #7f7f7f; text-align: center; font-weight: bold;">Messages <span id="no_m"
                            onload="ajaxy()" class="badge badge-primary badge-pill"></span></h5>
                </a>
                <hr>
                <a href="comment_notification.php">
                    <h5 style="color: #7f7f7f; text-align: center; font-weight: bold;">Notificaion <span id="no_m2"
                            class="badge badge-danger badge-pill"></span></h5>
                </a>
            </div>
            <?php
				}
				else{


			?>
            <div class="login col-md-4" style="">
                <form method="post" action="" id="lgform1">
                    <h3 style="color: #00A2E8;">Log In:</h3>
                    <label style="font-size: 20px; color: #202340;">Email/Mobile:</label>
                    <input type="text" style="" required id="Email" class="form-control"
                        placeholder="example@gmail.com/019xxxxxxxx" autocomplete="off">
                    <h6 id="xmail_error_message" style="color: red;"></h6>
                    <label style="font-size: 20px; margin-top: 17px; color: #202340;">Password:</label>
                    <input type="password" class="form-control" required id="Password"
                        style="font-family: 'Bangla',sans-serif; font-size: 18px;" placeholder="**********">
                    <button type="submit" id="lgin" class="btn btn-info"
                        style="margin-top:10px; font-family: 'Bangla', sans-serif; font-size: 19px;">Log In</button>
                </form>

                <div id="report"></div>

                <hr>

                <h5 style="margin-top: 20px; color: #7f7f7f;">Don't have an Account?</h5>
                <button class="btn btn-danger" data-toggle="modal" data-target="#reg"
                    style="font-family: 'Bangla', sans-serif; font-size: 19px;">Register Now</button>
            </div>

            <?php
				}
				if(isset($_SESSION['user'])){
			?>
            <script type="text/javascript">
            function ajaxx() {
                var req = new XMLHttpRequest();
                req.onreadystatechange = function() {
                    if (req.readyState == 4 && req.status == 200) {
                        document.getElementById('no_m2').innerHTML = req.responseText;

                    }
                }
                req.open('POST', 'cnotify.php', true);
                req.send();

            }
            setInterval(function() {
                ajaxx()
            }, 3200);

            function ajaxy() {
                var req = new XMLHttpRequest();
                req.onreadystatechange = function() {
                    if (req.readyState == 4 && req.status == 200) {
                        document.getElementById('no_m').innerHTML = req.responseText;

                    }
                }
                req.open('POST', 'pmnotify.php', true);
                req.send();
            }
            setInterval(function() {
                ajaxy()
            }, 3200);
            </script>
            <?php } ?>
        </div>
        <div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel"
                            style="color: #00A2E8; text-align: center; margin-left: 15px;">Register: </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
                        <form id="registration_form" class="" method="post">


                            <h5 style="margin-left: 3px; margin-top: 10px;">Name</h5>
                            <input type="text" required id="name" class="form-control" name=""
                                placeholder="Enter Your Name" autocomplete="off">
                            <h6 id="name_error_message" style="color: red;"></h6>
                            <h5 style="margin-left: 3px; margin-top: 10px;">Gender</h5>
                            <label class="radio-inline"><input required class="gender" type="radio" name="gender"
                                    value="Male"> Male</label>
                            <label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female">
                                Female</label>

                            <h5 style="margin-left: 3px; margin-top: 10px;">Email / Mobile No:</h5>
                            <input type="text" required id="email" class="form-control" name=""
                                placeholder="Ex: example@mail.com / 019xxxxxxxx" autocomplete="off">
                            <h6 id="mail_error_message" style="color: red;"></h6>
                            <h5 style="margin-left: 3px;  margin-top: 10px;">Password:</h5>
                            <input required id="form_password" type="password" class="form-control" name=""
                                placeholder="Enter your password">
                            <h6 id="password_error_message" style="color: red;"></h6>
                            <h5 style="margin-left: 3px; margin-top: 10px;">Confirm Password:</h5>
                            <input required id="form_retype_password" type="password" class="form-control" name=""
                                placeholder="Confirm Password..">
                            <h6 id="retype_password_error_message" style="color: red;"></h6>
                            <h6 id="retype_password_match_message" style="color: green;"></h6>
                            <br>
                            <input type="checkbox" required id="check" name="rules" value="YES">
                            <label for="rules"><a href="terms.php">Terms</a> I agreed with the terms</label>
                            <div id="result"></div>
                            <button class="btn btn-info form-control" id="regbtn"
                                style="font-family: 'Bangla'">Register</button>
                        </form>

                        <h5>Already have an acount? <a href="#" onclick="openModal1()" class="nav_content">Log in</a>
                        </h5>


                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" style="color: #00A2E8; margin-left: 15px; " id="exampleModalLabel">Log
                            In:</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
                        <form id="login" method="post" action="">

                            <h5 style="margin-left: 3px; margin-top: 10px;">Email/Mobile:</h5>
                            <input type="text" required id="mail" class="form-control" name=""
                                placeholder="example@gmail.com/019xxxxxxxx" autocomplete="off">
                            <h6 id="ymail_error_message" style="color: red;"></h6>
                            <h5 style="margin-left: 3px; margin-top: 10px;">Password</h5>
                            <input type="password" required id="pass" class="form-control" name=""
                                placeholder="Type Password...">
                            <br>
                            <button type="submit" id="logn" class="btn btn-info form-control"
                                style="font-family: 'Bangla'">Log In</button>
                        </form>
                        <br>
                        <div id="resultx">

                        </div>
                        <div id="resultx1">

                        </div>
                        <h5>Not an Account? <a href="#" onclick="openModal()" class="nav_content">Register Now</a></h5>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="block" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel"
                            style="color: #00A2E8; text-align: center; margin-left: 15px;">Currently you are blocked</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#login").submit(function() {
                //alert("Hello adil");
                var eror_mail = 0;
                var pat1 = new RegExp(
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    );
                var pat3 = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);

                var adil = $("#mail").val();
                if (pat1.test($("#mail").val()) && $("#mail").val().length > 10) {
                    eror_mail = 0;
                } else if (pat3.test($("#mail").val())) {
                    eror_mail = 0;
                } else {
                    eror_mail = 1;
                }

                var data2 = $("#pass").val();

                if (eror_mail == 0) {

                    var datastring = 'name11=' + adil + '&name22=' + data2;

                    $.ajax({
                        type: "post",
                        url: "logprocess.php",
                        data: datastring,
                        dataType: "json",
                        cache: false,
                        success: function(JSONObject) {
                            console.log(JSONObject.c);
                            console.log(JSONObject.d);
                            var ac = JSONObject.b;
                            var mail = JSONObject.d;
                            var msg = JSONObject.c;
                            var error = JSONObject.e;
                            if (ac === 1) {

                                setTimeout(function() {
                                    window.location.href = 'index.php'
                                }, 2000);
                                $("#resultx").html(msg);
                            } else {
                                $("#resultx").html(error);
                            }
                        }

                    });
                    return false;
                } else {
                    $("#resultx").html(
                        "<h5	style='color:red;'>Please insert valid email or mobile number.</h5>");
                }

            });

        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#registration_form").submit(function() {

                //alert("Hello adil");
                var name_error = 0;
                var mail_error = 0;
                var pass_error = 0;
                var con_pass_error = 0;
                var pat1 = new RegExp(/(\%27)|(\')|(\-\-)|(\%23)|(#)/i);
                var pat2 = new RegExp(/[1-9][0-9]*|0/);
                var pat3 = new RegExp(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/);
                var pat4 = new RegExp(/[!$%^&*()|~=`{}\[\]:";'<>?,\/]/);


                var adil = $("#name").val();


                if (pat1.test($("#name").val())) {
                    name_error = 1;
                } else if (pat2.test($("#name").val())) {
                    name_error = 1;
                } else if (pat3.test($("#name").val())) {
                    name_error = 1;
                }

                var data1 = $("input[type='radio'].gender:checked").val();
                var data2 = $("#email").val();


                if (pat1.test($("#email").val())) {
                    mail_error = 1;
                } else if (pat4.test($("#email").val())) {
                    mail_error = 1;
                }


                var data31 = $("#form_password").val();
                var pass_len = $("#form_password").val().length;

                if (pat4.test($("#form_password").val())) {
                    pass_error = 1;
                } else if (pass_len < 6 || pass_len > 16) {
                    pass_error = 1;
                }

                var data3 = $("#form_retype_password").val();
                if (data3 != data31) {
                    con_pass_error = 1;
                }

                if (name_error == 0 && mail_error == 0 && pass_error == 0 && con_pass_error == 0) {
                    var datastring = 'name11=' + adil + '&name22=' + data1 + '&name33=' + data2 +
                        '&name44=' + data3;

                    $.ajax({
                        type: "post",
                        url: "regprocess.php",
                        data: datastring,
                        dataType: "json",
                        cache: false,
                        error: function(jqXHR, exception) {
                            if (jqXHR.status === 0) {
                                alert('Not connect.\n Verify Network.');
                            } else if (jqXHR.status == 404) {
                                alert('Requested page not found. [404]');
                            } else if (jqXHR.status == 500) {
                                alert('Internal Server Error [500].');
                            } else if (exception === 'parsererror') {
                                alert('Requested JSON parse failed.');
                            } else if (exception === 'timeout') {
                                alert('Time out error.');
                            } else if (exception === 'abort') {
                                alert('Ajax request aborted.');
                            } else {
                                alert('Uncaught Error.\n' + jqXHR.responseText);
                            }
                        },
                        success: function(JSONObject) {
                            //console.log(JSONObject.c);
                            //console.log(JSONObject.d);
                            var ac = JSONObject.b;
                            var mail = JSONObject.d;
                            var msg = JSONObject.c;
                            if (ac == 1) {
                                $("#result").html(msg);
                                setTimeout(function() {
                                    window.location.href = 'profile.php'
                                }, 2000);
                            } else if (ac == 2) {
                                $("#result").html(msg);
                            } else {
                                $("#result").html(msg);
                            }

                        }

                    });
                    return false;
                } else {
                    $("#result").html("<h5 style='color:red;'>Please Fill the form correctly.</h5>");
                }

            });

        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#lgform1").submit(function() {
                //alert("Hello adil");
                var eror_mail1 = 0;
                var pat1 = new RegExp(
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    );
                var pat3 = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);

                var adil = $("#Email").val();
                if (pat1.test($("#Email").val()) && $("#Email").val().length > 10) {
                    eror_mail1 = 0;
                } else if (pat3.test($("#Email").val())) {
                    eror_mail1 = 0;
                } else {
                    eror_mail1 = 1;
                }

                var data2 = $("#Password").val();

                if (eror_mail1 == 0) {
                    var datastring = 'name11=' + adil + '&name22=' + data2;


                    $.ajax({
                        type: "post",
                        url: "logprocess.php",
                        data: datastring,
                        dataType: "json",
                        cache: false,
                        success: function(JSONObject) {
                            //console.log(JSONObject.c);
                            //console.log(JSONObject.e);
                            var ac = JSONObject.b;
                            var mail = JSONObject.d;
                            var msg = JSONObject.c;
                            var error = JSONObject.e;
                            if (ac === 1) {

                                setTimeout(function() {
                                    window.location.href = 'index.php'
                                }, 2000);
                                $("#report").html(msg);
                            } else {
                                $("#report").html(error);
                            }
                        }

                    });
                    return false;
                } else {
                    $("#report").html(
                        "<br><h5 style='color:red;'>Please insert valid email or mobile number.</h5>"
                        );
                }
            });

        });
        </script>
        <?php

	?>
        <div class="section2" style="background: #f00;  height: 10px;">

            <!-- 
			<h1 style="color: #00A2E8; font-size: 30px;text-align: center;">Smart, reliable and easy solution to find a bride / groom
			</h1>
			<h5 style="color: #7f7f7f;text-align: center;">Welcome to the online wedding service. The easiest way to find a life partner. Run after nine factors, find the life partner of your choice. You can also exchange the information you need through our website. So don't delay, register now and enjoy something new.</h5>

		-->

            <?php
				if(isset($_SESSION['user'])/* || isset($_COOKIE['user'])*/){
				}
				else{


			?>

<!--MIddle Register Button Remove on [08-January-2024]
            <center>
                <button class="btn btn-danger"
                    style="font-family: 'Bangla', sans-serif; font-size: 19px; margin-bottom: 10px;" data-toggle="modal"
                    data-target="#reg">Register</button>
            </center>
-->
            <?php
				}
			?>
        </div>
    </div>
    <div class="p_sec3 row" style="">
        <div class="section3 col-md-4">
            <h2 style="color: #00A2E8">Find Partner</h2>
            <?php if(isset($_SESSION['user'])/* || isset($_COOKIE['user'])*/){
            $user =  $_SESSION['user'];
			$sql = "SELECT * FROM biodata WHERE user='$user'";
            $result = mysqli_query($con,$sql);
            $live_status = "";
            if(mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                $live_status = $row["live_status"];
            }
			?>

            <?php if($live_status==1){ ?>
                <form method="post" action="search.php">
                <h5 style="color: #7f7f7f;">---Gender---</h5>
                <label class="radio-inline"><input type="radio" name="gender" autocomplete="off" value="Male">
                    Male</label>
                <label class="radio-inline" autocomplete="off"><input type="radio" name="gender" value="Female">
                    Female</label>
                <hr style="margin-top: 3px;">
                <h5 style="color: #7f7f7f;">--Marital Status--</h5>

                <label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off"
                        value="বিবাহিত"> Married</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="অবিবাহিত"> Unmarried</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="তালাকপ্রাপ্ত"> Divorced</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="বিধবা"> Widow</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="বিপত্নীক"> Widowed</label>
                <hr style="margin-top: 3px;">
                <h5 style="color: #7f7f7f;">---Religious---</h5>
                <label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off"
                        value="ইসলাম"> Islam</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="হিন্দু">
                    hinduism</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="বৌদ্ধ">
                    Buddhist</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="খ্রিস্টান">
                    Christian</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="অন্যান্য">
                    Others</label>
                <br>
                <button style="margin: 10px 0px;" type="submit" name="search" class="btn btn-success">Search</button>
            </form>
            <?php } else { ?>
                <form method="post" action="">
                <h5 style="color: #7f7f7f;">Gender</h5>
                <label class="radio-inline"><input type="radio" required="gender" name="gender" autocomplete="off"
                        value="Male"> Male</label>
                <label class="radio-inline" autocomplete="off"><input type="radio" name="gender" value="Female">
                    Female</label>
                <hr style="margin-top: 3px;">
                <h5 style="color: #7f7f7f;">Marital Status:</h5>

                <label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off"
                        value="বিবাহিত"> Married</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="অবিবাহিত"> Unmarried</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="তালাকপ্রাপ্ত"> Divorced</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="বিধবা"> Widow</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="বিপত্নীক"> Widowed</label>
                <hr style="margin-top: 3px;">
                <h5 style="color: #7f7f7f;">Religious</h5>
                <label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off"
                        value="ইসলাম"> Islam</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="হিন্দু">
                    Hinduism</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="বৌদ্ধ">
                    Buddhist</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="খ্রিস্টান">
                    Christian</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="অন্যান্য">
                    Others</label>
                <br>
                <button style="margin: 10px 0px;" type="button" name="" class="btn btn-info" onclick="openModalBlock()"
                    id="">Search</button>
            </form>
            <?php } } else{
			?>
            <form method="post" action="">
                <h5 style="color: #7f7f7f;">Gender</h5>
                <label class="radio-inline"><input type="radio" required="gender" name="gender" autocomplete="off"
                        value="Male"> Male</label>
                <label class="radio-inline" autocomplete="off"><input type="radio" name="gender" value="Female">
                    Female</label>
                <hr style="margin-top: 3px;">
                <h5 style="color: #7f7f7f;">Marital Status:</h5>

                <label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off"
                        value="বিবাহিত"> Married</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="অবিবাহিত"> Unmarried</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="তালাকপ্রাপ্ত"> Divorced</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="বিধবা"> Widow</label>
                <label class="radio-inline"><input type="radio" name="m_stat" value="বিপত্নীক"> Widowed</label>
                <hr style="margin-top: 3px;">
                <h5 style="color: #7f7f7f;">Religious</h5>
                <label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off"
                        value="ইসলাম"> Islam</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="হিন্দু">
                    Hinduism</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="বৌদ্ধ">
                    Buddhist</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="খ্রিস্টান">
                    Christian</label>
                <label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="অন্যান্য">
                    Others</label>
                <br>
                <button style="margin: 10px 0px;" type="button" name="" class="btn btn-info" onclick="openModal1()"
                    id="">Search</button>
            </form>
            <?php
			}

			?>
        </div>
        <div class="col-md-4" style="width: 100%; margin: 0; padding: 0;">
            <?php if(isset($_SESSION['user'])/* || isset($_COOKIE['user'])*/){

			
			?>
            <div class="sp3 section3">
                <h2 style="color:#00A2E8; margin-bottom: 10px;">Recent Members:</h2>
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
								$gender = "Male";
							}
							else{
								$gender = "Female";	
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
                    <a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>">
                        <h5 style="color: #7f7f7f;"><?php echo $mem_name; ?></h5>
                    </a>

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
                <a href="search.php"><button class="btn btn-outline-info"
                        style=" margin-top: 10px; margin-bottom: 10px;">See more</button></a>
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
                <h2 style="color:#00A2E8; margin-bottom: 10px;">Recent Members:</h2>
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
								$gender = "Male.";
							}
							else{
								$gender = "Female.";	
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
                    <a href="#" onclick="openModal1()">
                        <h5 style="color: #7f7f7f;"><?php echo $mem_name; ?></h5>
                    </a>

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
                <button class="btn btn-outline-info" onclick="openModal1()"
                    style=" margin-top: 10px; margin-bottom: 10px;">See more</button>
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



        <!--
		<div class="section3 col-md-4" style="background: white; height: inherit; padding: 10px 17px;">
			<h4 style="color: #00A2E8;">আসুন এক নজরে দেখে নিই, কিভাবে বিয়ে২৪ এ রেজিস্ট্রেশন ও বায়োডাটা পূরণ করবেনঃ</h4>
			<iframe style="" width="100%" height="270" src="https://www.youtube.com/embed/jrowJhS35y0">
			</iframe> 
		</div>
	
-->
        <!------------Carousol Trial Start--------------->

        <div class="section3 col-md-4" style="">
            <h4 style="color: #00A2E8;">For Rent a Car on Marital Function Contact Us.</h4>

            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/imagecar/AUDIblue.jpg" alt="Trishal" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Trishal</h3>
                            <p>Contact: +8801792446688</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/imagecar/AUDIred.jpg" alt="Mymensingh" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Mymensingh</h3>
                            <p>Contact: +8801521446688</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/imagecar/AUDIgreen.jpg" alt="Dhaka" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Dhaka</h3>
                            <p>Contact: +8801315446688</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="image/imagecar/AUDIblue2.jpg" alt="JKKNIU" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>JKKNIU</h3>
                            <p>Contact: +8801315446690</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="image/imagecar/BMWblack.jpg" alt="Private" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Private</h3>
                            <p>Contact: +8801315446600</p>
                        </div>
                    </div>


                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>




        </div>




        <!------------Carousol Trial End--------------->














    </div>



    <div style="width: 100%; margin-top: 15px; ">
        <div style=" background: white; margin: 0 auto; padding-bottom: 5px; padding-top: 10px;" class="section4">
            <h2 style="text-align: center; color: #00A2E8;">Recent Marital Posts</h2>

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
                <center><a href="post_s.php?id=<?php echo $post_id;?>"><button class="btn btn-outline-info">See
                            more</button></a></center>

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
        <div class="section5" style="margin:0 auto;"><a href="blog.php"><button type="button"
                    class="form-control btn btn-info">Show More Posts</button></a></div>
    </div>


    <?php
	include 'inc/footer.php';
	?>
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
    function openModal() {
        $('#reg').modal('show');
        $('#log').modal('hide');
        $('#block').modal('hide');
    }

    function openModal1() {
        $('#log').modal('show');
        $('#reg').modal('hide');
        $('#block').modal('hide');
    }

    function openModalBlock(){
        $('#block').modal('show');
        $('#reg').modal('hide');
        $('#log').modal('hide');
    }

    </script>


</body>

</html>