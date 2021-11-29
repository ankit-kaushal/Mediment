<?php

//index.php

include('class/Appointment.php');

$object = new Appointment;

if(isset($_SESSION['patient_id']))
{
	header('location:dashboard.php');
}

$object->query = "
SELECT * FROM ambulance_table 
WHERE ambulance_status = 'Active' 
";

$result = $object->get_result();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediment - Home</title>
    <link rel="stylesheet" href="assets/css/color/color-1.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--owl.carousel-->
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <!--animation-->
    <link rel="stylesheet" href="assets/animation/animate.css">
    <!--logo-->
    <link rel="icon" href="assets/image/Facvicon.png" sizes="32x32" />
</head>
<body class="counter-scroll header_sticky">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrapper">
        <div id="page">
            <header class="header downscrolled clearfix">
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
                                    <li class="active">
                                        <a href="#" title="">Home</a>
                                        
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
                                    <li>
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
                                <div class="button-header">
                                    <a href="book-appointment.php" class="themesflat-button bg-accent btn-header"><span>Get Appointment</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="btn-menu">
                            <span></span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                <!-- SLIDER -->
                                <div class="rev_slider_wrapper fullwidthbanner-container">
                                    <div id="rev-slider2" class="rev_slider fullwidthabanner">
                                        <ul>
                                            <!-- Slide 1 -->
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <div class="black-layer">
                                                    <img src="assets/image/slides/slider-1.jpg" alt="image" data-bgposition="center center" data-no-retina>
                                                </div>
                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme slide-font-1" data-x="['left','left','left','center']" data-hoffset="['4','10','20','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['-160','-157','-157','-85']" data-fontsize="['16']" data-lineheight="['70','70','40','24']"
                                                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    DIAGNOSE ANY DISEASE FROM HOME
                                                </div>

                                                <div class="tp-caption tp-resizeme slide-font-2 " data-x="['left','left','left','center']" data-hoffset="['5','5','15','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-35']" data-fontsize="['68','68','68','45']" data-lineheight="['85','85','85','80']"
                                                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    Use Disease
                                                </div>

                                                <div class="tp-caption tp-resizeme slide-font-2" data-x="['left','left','left','center']" data-hoffset="['5','9','19','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['4','2','2','15']" data-fontsize="['68','68','68','45']" data-lineheight="['65','85','85','80']"
                                                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    Predictor
                                                </div>

                                                <div class="tp-caption" data-x="['left','left','left','center']" data-hoffset="['0','10','20','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['108','108','108','85']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    <a href="index.html#predictor" class="themesflat-button bg-accent big"><span>Predict Now</span></a>
                                                </div>
                                            </li>
                                            <!-- /End Slide 1 -->

                                            <!-- Slide 2 -->
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <div class="black-layer">
                                                    <img src="assets/image/slides/slider-2.jpg" alt="image" data-bgposition="center center" data-no-retina>
                                                </div>
                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme slide-font-1" data-x="['left','left','left','center']" data-hoffset="['4','10','20','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['-160','-157','-157','-85']" data-fontsize="['16']" data-lineheight="['70','70','40','24']"
                                                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    SEARCH FOR BEST DOCTORS
                                                </div>

                                                <div class="tp-caption tp-resizeme slide-font-2 " data-x="['left','left','left','center']" data-hoffset="['5','5','15','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-35']" data-fontsize="['68','68','68','45']" data-lineheight="['85','85','85','80']"
                                                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    Book
                                                </div>

                                                <div class="tp-caption tp-resizeme slide-font-2" data-x="['left','left','left','center']" data-hoffset="['5','9','19','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['4','2','2','15']" data-fontsize="['68','68','68','45']" data-lineheight="['65','85','85','80']"
                                                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    Appointment
                                                </div>

                                                <div class="tp-caption" data-x="['left','left','left','center']" data-hoffset="['0','10','20','-15']" data-y="['middle','middle','middle','middle']" data-voffset="['108','108','108','85']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                    <a href="book-appointment.php" class="themesflat-button bg-accent big"><span>Book Now</span></a>
                                                </div>
                                            </li>
                                            <!-- /End Slide 2 -->
                                        </ul>
                                    </div>
                                </div>
                               
                                <!-- END SLIDER -->
                                <section class="fl-row intro-top" id="about-s">                            
                                   <div class="container">
                                       <div class="row">
                                            <div class="col-12">
                                                <div class="box-intro-top">
                                                    <div class="box-features-intro">
                                                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                                                        <div class="features-intro-top wow fadeInDown">
                                                            <img src="assets/image/common/sideimg.jpg" alt="image">
                                                            <div class="features-inner">
                                                                <img src="assets/image/pattern/Path18193.png" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
                                                    </div>
                                                    <div class="box-content-intro">
                                                        <div class="themesflat-spacer clearfix" data-desktop="87" data-mobile="70" data-smobile="50"></div>
                                                        <h3 class="heading">
                                                            WHAT WE DO
                                                        </h3>
                                                        <div class="title-heading wow fadeInUp">
                                                            True Healthcare For<br> Your Family
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                                        <div class="row-content-intro wow fadeInUp">
                                                            <div class="cl-content-intro">
                                                                <div class="box-icon">
                                                                    <i class="icon-Path-18154 font-size-big"></i>
                                                                </div>
                                                                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                                                <h3><a href="index.html#predictor">Advance Disease Predictor</a></h3>
                                                                <p>
                                                                    Advance ML models to predict various diseases(Cancer, liver disese, heart disease etc)
                                                                </p>
                                                            </div>
                                                            <div class="cl-content-intro">
                                                                <div class="box-icon">
                                                                    <i class="icon-Path-18158 font-size-big"></i>
                                                                </div>
                                                                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                                                <h3><a href="book-appointment.php">Online Doctor's Appointment</a></h3>
                                                                <p>
                                                                    Book appointment of your prefereed doctor. 
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="45" data-smobile="20"></div>
                                                        <div class="box-button">
                                                            <a href="book-appointment.php" class="themesflat-button bg-accent btn-header"><span>Get Appointment</span></a>
                                                        </div> 
                                                        <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="70" data-smobile="50"></div>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                   </div>
                                </section>
                                <!--/intro-top-->
                                <section class="fl-portfolio" id="predictor">
                                    <div class="container">
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="135" data-mobile="70" data-smobile="70"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="box-wrap-ptf fl-st-title wow fadeInUp">
                                                    <h3 class="heading text-color-white font-raguler">
                                                       VARIOUS
                                                    </h3>
                                                    <div class="title-heading text-color-white pdt-10">
                                                        Disease Predictor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="45" data-smobile="30"></div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12">
                                           
                                            <div class="carousel-ptf wow fadeInUp">
                                                <div class="owl-carousel owl-theme ptf" data-margin="25" data-tablet="2" data-mobile="1">

                                                <div class="item box-ptf">
                                                    <img src="assets/image/common/covid.jpg" alt="image">
                                                    <div class="overlay">
                                                        <h4 class="text-color-title-sidebar">
                                                            <a href="https://novid-predict.herokuapp.com/">Covid Predictor</a>
                                                        </h4>
                                                        <p class="text-color-title-sidebar">
                                                            Max Time - 2 min
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="item box-ptf">
                                                    <img src="assets/image/common/heart.png" alt="image">
                                                    <div class="overlay">
                                                        <h4 class="text-color-title-sidebar">
                                                            <a href="#">Heart Disease Predictor</a>
                                                        </h4>
                                                        <p class="text-color-title-sidebar">
                                                            Max Time - 5 min
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="item box-ptf" >
                                                    <img src="assets/image/common/cancer.jpg" alt="image">
                                                    <div class="overlay">
                                                        <h4 class="text-color-title-sidebar">
                                                            <a href="#">Cancer Predictor</a>
                                                        </h4>
                                                        <p class="text-color-title-sidebar">
                                                            Max Time - 7 min
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="item box-ptf" >
                                                    <img src="assets/image/common/lung.jpg" alt="image">
                                                    <div class="overlay">
                                                        <h4 class="text-color-title-sidebar">
                                                            <a href="#">Lung Disease Predictor</a>
                                                        </h4>
                                                        <p class="text-color-title-sidebar">
                                                            Max Time - 5 min
                                                        </p>
                                                    </div>
                                                </div>
                                                </div>

                                            
                                            </div><!--/carousel-ptf-->
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="50"></div>
                                        </div>
                                    </div>
                                </section><!--/portfolio-->

<!-- Main Content -->

                                        <section class="fl-row ambulance">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="box-heading-process text-center">
                                                            <h3 class="heading  wow fadeInUp">
                                                                AVAILABLE AMBULANCE
                                                            </h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
                                                </div>
                                        	<div class="card">
                            		      		<form method="post" action="result.php">
                            			      		
                            			      		<div class="card-body">
                            		      				<div class="table-responsive">
                            		      					<table class="table">
                            		      						<tr>
                            		      							<th>Vehicle No.</th>
                            		      							<th>Vehicle Name</th>
                            		      							<th>Driver Name</th>
                            		      							<th>Contact</th>
                            		      						</tr>
                            		      						<?php
                            		      						foreach($result as $row)
                            		      						{
                            		      							echo '
                            		      							<tr>
                            		      								<td>'.$row["ambulance_no"].'</td>
                            		      								<td>'.$row["ambulance_name"].'</td>
                            		      								<td>'.$row["ambulance_driver"].'</td>
                            		      								<td>'.$row["ambulance_contact"].'</td>
                            		      							</tr>
                            		      							';
                            		      						}
                            		      						?>
                            		      					</table>
                            		      				</div>
                            		      			</div>
                            		      		</form>
                            		      	</div>
                            		      </div>
                            		  </section>
            
            
            
            
            
            <!--#main-content-->
                                
                               
                                
                
                                <!--/counter-->
                                <section class="fl-row process">
                                   <div class="container">
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="box-heading-process text-center">
                                                    <h3 class="heading  wow fadeInUp">
                                                        OUR WORK
                                                    </h3>
                                                    <div class="title-heading text-color-title-sidebar wow fadeInUp">
                                                        This Platform Provides<br> Every Medical Solutions
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="col-process">
                                                    <div class="box-process wow fadeInUp">
                                                        <div class="feature-process">
                                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                                                            <img src="assets/image/common/doctor-illustrator.jpg" alt="image">
                                                        </div>
                                                        <div class="box-wrap pdt-30">
                                                            <h2>
                                                                View Available Doctors
                                                            </h2>
                                                            <p class="text-color-title-sidebar">
                                                                Get complete information about the doctor before booking appointment.
                                                            </p>
                                                            <!--<div class="flat-read-more">
                                                                <a href="service-details.html" class="themesflat-button font-default process">
                                                                    <span>Visit<i class="fa fa-arrow-right"></i> </span>
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="col-process">
                                                    <div class="box-process wow fadeInUp"  data-wow-delay="100ms">
                                                        <div class="feature-process">
                                                            <img src="assets/image/common/Online calendar-bro.jpg" alt="image">
                                                        </div>
                                                        <div class="box-wrap pdt-30">
                                                            <h2>
                                                               Get Status
                                                            </h2>
                                                            <p class="text-color-title-sidebar">
                                                                Know the status of your appointment from your appointment page
                                                            </p>
                                                            <!--<div class="flat-read-more">
                                                                <a href="service-details.html" class="themesflat-button font-default process">
                                                                    <span>Read More<i class="fa fa-arrow-right"></i> </span>
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="col-process" >
                                                    <div class="box-process wow fadeInUp" data-wow-delay="200ms">
                                                        <div class="feature-process">
                                                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                                                            <img src="assets/image/common/Chat bot-bro.jpg" alt="image">
                                                        </div>
                                                        <div class="box-wrap pdt-30">
                                                            <h2>
                                                                Chatbot
                                                            </h2>
                                                            <p class="text-color-title-sidebar">
                                                                For any minor issue chat with our chatbot.
                                                            </p>
                                                            <!--<div class="flat-read-more">
                                                                <a href="service-details.html" class="themesflat-button font-default process">
                                                                    <span>Read More<i class="fa fa-arrow-right"></i> </span>
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="110" data-mobile="50" data-smobile="40"></div>
                                        </div>
                                   </div>
                                </section>
                                <!--/process-->
                                <section class="fl-row contact-us" id="contact-s">
                                    <div class="container-fluid">
                                        <div class="row">
                                           <div class="col-12">
                                               <div class="fl-box-contact">
                                                    <div class="map">
                                                        <img src="assets/image/common/contact-doctor.jpg">
                                                    </img>
                                                    </div>
                                                    <div class= "form-contact-us fl-st-title">
                                                        <div class="themesflat-spacer clearfix" data-desktop="113" data-mobile="70" data-smobile="70"></div>
                                                        <h3 class="heading theme-color">
                                                            CONTACT US
                                                        </h3>
                                                        <div class="title-heading text-color-white">
                                                            Have Questions?<br> Get in Touch!
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="18" data-mobile="18" data-smobile="18"></div>
                                                        <form class="content-form wow fadeInUp" id="contactform" action="./contact/contact-process.php" method="post" accept-charset="utf-8">
        
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input tabindex="1" id="name" name="name" value="" class="input-contact" type="text" placeholder="Full Name" required="">
                                                                </div>
                                                                <div class="col">
                                                                    <input tabindex="2" id="phone" name="phone" value="" class="input-contact" type="text" placeholder="Phone Number" required="">
                                                                </div>
                                                            </div>
        
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="email" tabindex="3" id="email" name="email" value="" class="input-contact" placeholder="Email Address" required="">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" tabindex="4" id="subject" name="subject" value="" class="form-control" placeholder="Subject">
                                                                </div>
                                                            </div>
        
                                                            <div>
                                                                <textarea name="message" tabindex="5" class="form-control" id="exampleFormControlTextarea2" placeholder="Your Message"  maxlength="1000"></textarea>
                                                            </div>
        
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                    <div class="form-check">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                    <div class="box-submit">
                                                                        <button name="submit" id="submit" type="submit" class="themesflat-button bg-accent btn-submit" role="button"><span>Send</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <img src="assets/image/pattern/Ellipse924.png" alt="image" class="img-box-1">
                                                        <img src="assets/image/thumbnails/logocontact.png" alt="image" class="img-box-2">
                                                        <div class="themesflat-spacer clearfix" data-desktop="106" data-mobile="40" data-smobile="40"></div>
                                                    </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </section>
                                <!--/contact-us-->
                               
                                <section class="services-faq">
                                    <div class="container">
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="130" data-mobile="70" data-smobile="70"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="box-services-faq wow fadeInUp">
                                                    <div class="box-wrap-services-faq">
                                                        <div class="feature-box-services-fqa">
                                                            <img src="assets/image/thumbnails/Group962.png" alt="image">
                                                        </div>
                                                        <div class="content-services-faq">
                                                            <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                                            <div class="title-heading">
                                                                FAQ
                                                            </div>
                                                            <p>Answer to some of your queries</p>
                                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="50" data-smobile="50"></div>
                                                        </div>
                                                    </div>

                                                    <div class="themesflat-spacer clearfix" data-desktop="63" data-mobile="50" data-smobile="50"></div>

                                                    <div class="box-faq">
                                                        
                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                                                <h4 ><span>01.</span><span class="pdl-12">What this website is for?</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="17" data-mobile="17" data-smobile="17"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    This website is all in one solution for all your medical realted problems
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>

                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="26" data-smobile="26"></div>
                                                                <h4 ><span>02.</span><span class="pdl-12">What services does this website provides?</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="16" data-mobile="16" data-smobile="16"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    Varrious services such as online appointment booking, predicting various diseases, chatbot etc.
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>

                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                                                <h4 ><span>03.</span><span class="pdl-12">What disease predictors are available</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    Covid Predictor, Heart Disease Predictor, Lung Disease Predictor, Cancer Predictor...
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div><!--/box-services-faq-->
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="box-services-faq wow fadeInUp">

                                                    <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>

                                                    <div class="box-faq">
                                                        
                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="27" data-smobile="27"></div>
                                                                <h4 ><span>04.</span><span class="pdl-12">How to book appointment?</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="16" data-mobile="16" data-smobile="16"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    First register yourself in our website, then browse through all the doctors, finally book appintment for suitable doctor.
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>

                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                                                <h4 ><span>05.</span><span class="pdl-12">How to know the status of my appointment?</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    Status of your appointment can be found on the appointment page of your profile.
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>

                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="27" data-smobile="27"></div>
                                                                <h4 ><span>06.</span><span class="pdl-12">What is the accuracy of disease predictors?</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="16" data-mobile="16" data-smobile="16"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    Accuracy of all the predictor lies between 90-95%.
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>

                                                        <div class="item-faq">
                                                            <div class="title-heading-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                                                <h4 ><span>07.</span><span class="pdl-12">Question not found?</span></h4>
                                                                <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                                            </div>
                                                            <div class="content-item-faq">
                                                                <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="24" data-smobile="24"></div>
                                                                <p>
                                                                    Fill the contact from with your query or write to us on mediment@355668.xyz. 
                                                                </p>
                                                                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div><!--/box-services-faq-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="233" data-mobile="170" data-smobile="80"></div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <!--.page-content-->
                        </div>
                        <!--#inner-content-->
                    </div>
                    <!--site-content-->
                </div>
                <!--#content-wrap-->
            </div>
            <!--#main-content-->
            <footer id="footer" class="fl-st-2">
                <div class="container">
                    <div class="row">
                        <div class="themesflat-spacer clearfix" data-desktop="96" data-mobile="50" data-smobile="70"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box-list-footer-2">
                                <div class="widget-footer widget-list-social">
                                    <div class="logo-footer">
                                        <img src="assets/image/logo-light.png" alt="image">
                                    </div>
                                    <p class="pdt-25">
                                        Platform for solution to all kind of medical problems.
                                    </p>
                                    <ul class="list-social pdt-10">
                                        <li class="active">
                                            <a href=""><i class="icon-social-fb"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="icon-social--tw"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="icon-social-g"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="icon-social-in"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="icon-social-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-footer widget-list-services">
                                    <h4 class="title-list-footer">
                                        Services
                                    </h4>
                                    <ul class="list-footer list-services pdt-10">
                                        <li>
                                            <a href="https://355668.xyz/mediment/admin/">Admin Login</a>
                                        </li>
                                        <li>
                                            <a href="https://355668.xyz/mediment/admin/">Doctor Login</a>
                                        </li>
                                        <li>
                                            <a href="https://355668.xyz/mediment/login.php">Patient Login</a>
                                        </li>
                                        <li>
                                            <a href="book-appointment.php">Book Appointment</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-footer widget-list-useful">
                                    <h4 class="title-list-footer">
                                        Try our Predictors
                                    </h4>
                                    <ul class="list-footer list-useful pdt-10">
                                        <li>
                                            <a href="https://novid-predict.herokuapp.com/">Covid Predictor</a>
                                        </li>
                                        <li>
                                            <a href="#">Heart Disease Predictor</a>
                                        </li>
                                        <li>
                                            <a href="#">Lung Disease Predictor</a>
                                        </li>
                                        <li>
                                            <a href="#">Cancer Predictor</a>
                                        </li>
                                        <li>
                                            <a href="#">Flu Predictor</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-footer widget-form-sub">
                                    <h4 class="title-list-footer">
                                        Subscribe
                                    </h4>
                                    <div class="email-form">
                                        <div class="Email">
                                            <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8">
                                                <input type="email" name="email" id="email" value="" placeholder="Email" required>
                                                <button name="submit" id="submit" type="submit">Subscribe</button>
                                            </form>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                       <p>
                                        Get the latest updates via email. Any time you may unsubscribe
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="30" data-smobile="0"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box-social-footer">
                                <div class="cl-social cl-address">
                                    <div class="box-icon">
                                        <i class="icon-icon11"></i>
                                    </div>
                                    <ul>
                                        <li>
                                            <h5>
                                                Virtual
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cl-social cl-email">
                                    <div class="box-icon">
                                        <i class="icon-icon12 font-size-small"></i>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="mailto:mediment@355668.xyz">Email : mediment@355668.xyz</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="cl-social cl-phone">
                                    <div class="box-icon">
                                        <i class="icon-icon13"></i>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="tel:6207994778">WhatsApp : 6207994778</a>
                                        </li>
                                        <li>
                                            <a href="tel:6207994778">Mobile : 6207994778</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="30" data-smobile="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="bottom">
                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="40"></div>
                                <div class="coppy fl-left">
                                    <p>
                                        © Mediment  2021 | All Rights Reserved
                                    </p>
                                </div>
                               <ul class="fl-right">
                                    <li>
                                        <a href="#">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms</a>
                                    </li>
                                    <li>
                                        <a href="#">Sitemap</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="button-go-top">
                <a href="#" title="" class="go-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>

        </div><!--#page-->
    </div> <!--#wrapper-->
    <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <!-- <script type="text/javascript" src="revolution/js/slider_v1.js"></script>
    <script type="text/javascript" src="revolution/js/slider_v2.js"></script> -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!--animation-->
    <script src="assets/animation/wow.min.js"></script>
    <script src="javascript/animation.js"></script>
    <!--owl.carousel-->
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="owlcarousel/carousel.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
</body>

</html>