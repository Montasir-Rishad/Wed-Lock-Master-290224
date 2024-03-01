<?php
	session_start();

	require_once('db_connect.php');
	if(!isset($_SESSION['user'])){
		header('Location:index.php');
	}
	else{
		$user = $_SESSION['user'];
		$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
		$row2 = mysqli_fetch_array($sname);
		$myuser = $row2['id'];
	}
	if(isset($_GET['user_id'])){
		$receiver_user = $_GET['user_id'];
		$rname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$receiver_user';");
		$row = mysqli_fetch_array($rname);
		$receiver_name = $row['name'];
		$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
		$row2 = mysqli_fetch_array($sname);
		$sender_name = $row2['name'];
		$_SESSION['receiver_user'] = $receiver_user;
		$_SESSION['receiver_name'] = $receiver_name;
		$_SESSION['sender_name'] = $sender_name;
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
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/validation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/croppie.js"></script>
    <style type="text/css">
    body {
        margin: 0;
        font-family: 'Bangla', sans-serif;
        background: #f9f9f9;
        height: 100%;
    }

    #wrapper {
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

        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdownx-content a {
        float: none;
        color: #7F7F7F;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .sidenav {
        overflow: hidden;
        background: #E1EFF9;
        box-shadow: 0px 6px 14px 0px rgba(0, 0, 0, 0.15);
        padding: 0px;
        padding-top: 25px;
        height: 100%;
        border-radius: 5px;

    }

    .sidenav:hover {
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

    }

    .blog_sec {
        width: 70%;
        margin: 50px auto;
    }

    .active {
        color: #4CAF50;
        ;
    }

    .topnav .icon {
        display: none;
    }

    .modal-content {
        padding: 0px 100px;
    }

    .sidnav_a {
        text-decoration: none;
        color: #7f7f7f;
    }

    .sidnav_a:hover {
        text-decoration: none;
        color: #00A2E8;
    }

    @media screen and (max-width: 900px) {
        .blog_sec {
            width: 95%;
            margin: 50px auto;
        }
    }

    .noti {
        list-style: none;
        margin: 0;
        padding: 0;
        margin-top: -20px;
    }

    .noti li {
        border-bottom: 1px solid #fff;
        margin: 0;
    }

    .noti li a {
        color: black;
        text-decoration: none;
    }

    .commenter {
        color: #00A2E8;
    }

    .post_cont {
        color: #555;
    }

    .noti li a:hover {
        color: #7f7f7f;
    }

    .noti li a:hover .commenter {
        color: #81D2FF;
    }

    .noti li a:hover .post_cont {
        color: #7f7f7f;
    }

    .noti_div {
        width: 90%;
    }

    @media screen and (max-width: 900px) {
        .noti_div {
            width: 99%;
        }
    }
    </style>
</head>

<body>
    <div id="wrapper">
        <div
            style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%; ">
            <div class="topnav" id="myTopnav">
                <a><img class="logo" style="margin-top: -5px;" src="img/logo.png" height="50px"></a>
                <a href="index.php" class="nav_content">প্রথম পাতা</a>

                <div class="dropdownx">
                    <button class="dropbtn">সঙ্গী খুঁজুন
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdownx-content">
                        <a href="search.php?gender=male" class="nav_content">পাত্র</a>
                        <a href="search.php?gender=female" class="nav_content">পাত্রী</a>
                    </div>
                </div>
                <a href="posts.php" class="nav_content">পোস্ট সমূহ</a>
                <a href="blog.php" class="nav_content" style="">ব্লগ</a>
                <!--<a href="#" onclick="openModal1()" class="nav_content">লগ ইন</a>
			  <a href="#" onclick="openModal()" class="nav_content">রেজিস্ট্রেশন</a>
			  <a href="help.php" class="nav_content">হেল্প</a>-->
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
                <a href="logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i> লগ আউট
                    করুন</a>
                <a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i
                        class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
        </div>


        <div style="" class="row blog_sec">
            <div style="margin-top: 60px;" class="col-md-2 sidenav">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="sidnav_a" href="profile.php?us1031gdh312k=<?php echo $myuser;?>">Profile</a>

                    </li>
                    <li id="" class="list-group-item d-flex justify-content-between align-items-center">

                        <a class="sidnav_a" href="message_notification.php">Messages</a>
                        <span id="no_m" class="badge badge-info badge-pill"></span>



                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="sidnav_a" href="comment_notification.php">Notifications</a>
                        <span id="no_m2" class="badge badge-warning badge-pill"></span>
                    </li>
                </ul>


            </div>
            <script type="text/javascript">
            /*$('#m_n').hide();
		$('#m_n_bx').hide();
		$('#m_n_b').click(function(){
			$('#m_n').show();
			$('#m_n_bx').show();
			$('#m_n_b').hide();
		});

		$('#m_n_bx').click(function(){
			$('#m_n').hide();
			$('#m_n_b').show();
			$('#m_n_bx').hide();
		})*/
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
            }, 1200);

            function ajax2() {
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
                ajax2()
            }, 1200);
            </script>

            <div class="col-md-2"></div>
            <div class="col-md-8" style=" margin: 0; padding: 0; margin-top: 50px; min-height: 400px;">
                <!--<div class="noti_div" style="margin: 10px auto; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
					<div style=" border-radius: 5px; padding: 8px 10px; margin: 0;background: #feffe8; /* Old browsers */
					background: -moz-linear-gradient(top, #feffe8 0%, #d6dbbf 100%); /* FF3.6-15 */
					background: -webkit-linear-gradient(top, #feffe8 0%,#d6dbbf 100%); /* Chrome10-25,Safari5.1-6 */
					background: linear-gradient(to bottom, #feffe8 0%,#d6dbbf 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffe8', endColorstr='#d6dbbf',GradientType=0 );">
						<h4 style="padding: 5px; color: #00A2E8;">Activities in the post you are following:</h4>
					</div>
					<?php

					?>
					<ul class="noti">
					<?php
						?>
					</ul>
				</div>-->


                <div class="noti_div" style="margin: 10px auto; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
                    <div
                        style=" border-radius: 5px; padding: 8px 10px; margin: 0;background: #feffe8; /* Old browsers */
					background: -moz-linear-gradient(top, #feffe8 0%, #d6dbbf 100%); /* FF3.6-15 */
					background: -webkit-linear-gradient(top, #feffe8 0%,#d6dbbf 100%); /* Chrome10-25,Safari5.1-6 */
					background: linear-gradient(to bottom, #feffe8 0%,#d6dbbf 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffe8', endColorstr='#d6dbbf',GradientType=0 );">
                        <h4 style="padding: 5px; color: #00A2E8;">Notifications</h4>
                    </div>
                    <ul class="noti">
                        <?php
						$user = $_SESSION['user']; 

						$qr1 = "SELECT * FROM comment WHERE poster = '$user' AND commenter != '$user' ORDER BY com_id DESC; ";
						$rn1 = mysqli_query($con,$qr1); 
						if(mysqli_num_rows($rn1)>0){
							while($rw = mysqli_fetch_array($rn1)){
								$p_id = $rw['post_id'];
								$cont_qrun = mysqli_query($con,"SELECT * FROM `goppo` WHERE id = '$p_id'");
								$cont_row = mysqli_fetch_array($cont_qrun);
								$content = mb_substr($cont_row['content'], 0, 10);
								$commenter = $rw['commenter'];
								$comment = mb_substr($rw['comment'], 0, 6);
								$time = strtotime($rw['time']);
								$date = date('d / m / y', $time);
								$time = date('h:i A', $time);

								$rname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$commenter';");
							    $row = mysqli_fetch_array($rname);
							    $sender_name = $row['name'];
								
								?>
                        <li><a href="comment.php?id=<?php echo $p_id;?>">
                                <div style="background: #eeeeee; padding: 10px;">
                                    <h6 style="margin:0;"><span class="commenter"><?php echo $sender_name;?></span>
                                        commented on your post <span class="post_cont"
                                            style=" font-weight: bold;">'<?php echo $content?>...'</span></h6>
                                    <h6 style="margin:0; font-style: italic;">'<?php echo $comment;?>...'</h6>
                                    <h6 style="margin:0;"><?php echo $time;?> - <?php echo $date;?></h6>
                                </div>
                            </a></li>
                        <?php
							/*}*/
							}
						}
						else{
							?>

                        <li>
                            <div style="background: #f9f9f9; padding: 10px;">
                                <h5 style="margin:0; padding: 0; color: #7f7f7f;">No Notifications</h5>

                            </div>
                        </li>
                        <?php
						}
						$qr = "UPDATE `comment` SET `seen` = '1' WHERE `comment`.`poster` = '$user';";
						$rn = mysqli_query($con,$qr);
					?>
                    </ul>
                </div>

            </div>

        </div>
        <script type="text/javascript">
        var myDiv = $('#your-div-id');
        myDiv.text(myDiv.text().substring(0, 5) + '....');

        function ajax() {
            var req = new XMLHttpRequest();
            var nakib = "nakib";
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;

                }
            }
            req.open('POST', 'loadpm.php?receiver=<?php echo $receiver_user;?>', true);
            var datastring = 'name11=' + nakib;
            req.send();
        }
        setInterval(function() {
            ajax()
        }, 200);
        </script>


        <script type="text/javascript">
        $(document).ready(function() {
            $("#pm").submit(function() {
                //alert("Hello adil");
                var adil = $("#user").val();
                var data2 = $("#receiver_user").val();
                var data3 = $("#m").val();
                var datastring = 'name11=' + adil + '&name22=' + data2 + '&name33=' + data3;


                $.ajax({
                    type: "post",
                    url: "pmsend.php",
                    data: datastring,

                    cache: false,
                    success: function(data) {
                        $("#m").val("");
                    }

                });
                return false;

            });

        });
        </script>
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


    <script type="text/javascript">

    </script>

</body>

</html>