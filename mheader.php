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
                                        <a href="index.php#about-s" title="">About Us</a>
                                    </li>
                                    <li>
                                        <a href="index.php#predictor" title="">Predictor</a>
                                    </li>
                                    <li>
                                        <a href="blog" title="">Blog</a>
                                    </li>
                                    <li class="active">
                                        <a href="book-appointment.php" title="">Book Appointment</a>
                                    </li>
                                    <li>
                                        <a href="index.php#contact-s" title="">Contact</a>
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
                            Book Appointment
                        </div>
                        <div class="baner-content">
                            <a href="index.html" class="font-raguler" style="color: aliceblue;">Home </a><span style="color: aliceblue;"> | Book Appointment
                            </span> 
                        </div>
                    </div>
                </div>
            </div>