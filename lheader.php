<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediment - Book Appointment</title>
    <link rel="stylesheet" href="assets/css/color/color-1.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--animation-->
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--logo-->
    <link rel="icon" href="assets/image/Facvicon.png" sizes="32x32" />
    <!--<link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet">-->

	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="vendor/datepicker/bootstrap-datepicker.css"/>

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }

			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
			.card {
  font-family: sans-serif;
  width: auto;
  margin-left: auto;
  margin-right: auto;
  margin-top: 3em;
  margin-bottom:3em;
  border-radius: 10px;
  background-color: #ffff;
  padding: 1.8rem;
  box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
}

.title {
  text-align: center;
  font-weight: bold;
  margin: 0;
}
.subtitle {
  text-align: center;
  font-weight: bold;
}
.btn-text {
  margin: 0;
}

.social-login {
  display: flex;
  justify-content: center;
  gap: 5px;
}

.google-btn {
  background: #fff;
  border: solid 2px rgb(245 239 239);
  border-radius: 8px;
  font-weight: bold;
  display: flex;
  padding: 10px 10px;
  flex: auto;
  align-items: center;
  gap: 5px;
  justify-content: center;
}
.fb-btn {
  background: #fff;
  border: solid 2px rgb(69, 69, 185);
  border-radius: 8px;
  padding: 10px;
  display: flex;
  align-items: center;
}

.or {
  text-align: center;
  font-weight: bold;
  border-bottom: 2px solid rgb(245 239 239);
  line-height: 0.1em;
  margin: 25px 0;
}
.or span {
  background: #fff;
  padding: 0 10px;
}

.email-login {
  display: flex;
  flex-direction: column;
}
.email-login label {
  color: rgb(170 166 166);
}

input[type="text"],
input[type="password"] {
  padding: 15px 20px;
  margin-top: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}

input[type="date"]{
  margin-top: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}


.cta-btn {
  background-color: rgb(69, 69, 185);
  color: white;
  padding: 18px 20px;
  margin-top: 10px;
  margin-bottom: 20px;
  width: 100%;
  border-radius: 10px;
  border: none;
}

.forget-pass {
  text-align: center;
  display: block;
}

	    </style>
</head>
<body class="header_sticky">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrapper">
        <div id="page">
            <header class="header clearfix">
                <div id="header">
                    <div id="site-header">                   
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/image/logo.png" alt="image">
                            </a>
                        </div>
                        <!-- //mobile menu button -->
                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li>
                                        <a href="index.php" title="">Home</a>
                                        
                                    </li>
                                    <li>
                                        <a href="index.html#about-s" title="">About Us</a>
                                    </li>
                                    <li>
                                        <a href="index.html#predictor" title="">Predictor</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="book-appointment.html" title="">Book Appointment</a>
                                    </li>
                                    <li>
                                        <a href="index.html#contact-s" title="">Contact</a>
                                    </li>
                                </ul>
                                <!-- /.menu -->
                            </nav>
                        </div>
                        <!-- /#mainnav -->
                        <div class="contact">
                            <div class="top-bar-right">
                                <div class="call-us">
                                    <div class="icon-call-us"></div>
                                    <div class="content-call-us">
                                        <p>Call Us</p>
                                        <a href="tel:360-779-2228" class="font-bold text-color-title-sidebar">360-779-2228</a>
                                    </div>
                                </div>
                                <?php
                    		    if(!isset($_SESSION['patient_id']))
                    		    {
                    		    ?>
                    		    <div class="button-header">
                                        <a href="login.php" class="themesflat-button bg-accent btn-header"><span>Login</span></a>
                                </div>
                    		   	<?php
                    		   	}
                    		   	?>
                                
                            </div>
                        </div>

                        <div class="btn-menu">
                            <span></span>
                        </div>
                    </div>
                </div>
            </header>
            <div id="header-baner">
                <div class="container">
                    <div class="text-banner wow fadeInDown">
                        <div class="baner-tittle" style="color: aliceblue;">
                            Login
                        </div>
                        <div class="baner-content">
                            <a href="index.html" class="font-raguler" style="color: aliceblue;">Home </a><span style="color: aliceblue;"> | Login
                            </span> 
                        </div>
                    </div>
                </div>
            </div>