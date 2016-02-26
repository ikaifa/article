<?php require 'util/Common.php';?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
    <title><?php echo (isset($this->title)) ? $this->title : 'Home'; ?></title>

    <!-- Basic -->
    <title>Construction | Home Screen</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Construction - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="<?php echo URL; ?>publics/css/bootstrap.css" type="text/css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>publics/css/font-awesome.min.css" type="text/css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>publics/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL; ?>publics/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL; ?>publics/css/owl.transitions.css" type="text/css">

    <!-- Light Box CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>publics/css/lightbox.css" type="text/css">


    <!-- Construction CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/style.css">

    <!-- Default Color -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/light-red.css">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/colors/black.css" title="black">

    <!-- Responsive CSS Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/responsive.css">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/animate.css">
    <!-- custom -->
    <link href="<?php echo URL; ?>`" rel="stylesheet">

    <!-- Construction JS File -->
    <script src="<?php echo URL; ?>publics/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo URL; ?>publics/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>publics/js/modernizr.custom.js"></script>
    <script src="<?php echo URL; ?>publics/js/owl.carousel.min.js"></script>
    <script src="<?php echo URL; ?>publics/js/lightbox.min.js"></script>
    <script src="<?php echo URL; ?>publics/js/jquery.appear.js"></script>
    <script src="<?php echo URL; ?>publics/js/jquery.fitvids.js"></script>
    <script src="<?php echo URL; ?>publics/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo URL; ?>publics/js/superfish.min.js"></script>
    <script src="<?php echo URL; ?>publics/js/supersubs.js"></script>
    <script src="<?php echo URL; ?>publics/js/styleswitcher.js"></script>

    <script src="<?php echo URL; ?>publics/js/script.js"></script>
    <script src="<?php echo URL; ?>publics/js/note.js"></script>
    <!-- end of -->
    <!-- import ckeditor -->
    <script src="<?php echo URL; ?>publics/ckeditor/ckeditor.js"></script>

     <?php

     	if (isset($this->js)) {
     	    foreach ($this->js as $js) {
     	        echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
     	    }
     	}
     ?>

</head><!--/head-->

<body class="homepage" style="background-color: #e9eaed;">
<input type="hidden" id="basePath" value="<?php echo URL; ?>">



<!-- Styleswitcher
================================================== -->
      <!--  <div>
           <a id="" class="hide-panel"><i class="fa fa-tint"></i></a>
               <ul class="colors-list">
                   <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                   <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                   <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                   <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>

                   <li class="no-margin"><a title="Black" class="black" onClick="setActiveStyleSheet('black'); return false;"></a></li>
                   <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>

               </ul>

       </div> -->
<!-- Styleswitcher End
================================================== -->

<!-- Start Loader -->
<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- End Loader -->



    <!-- Start Navigation Section -->
    <div class="navigation">

        <div class="navbar navbar-default navbar-top">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>

            </div>
            <!-- <div id="bannerSetting"  style="display:none;background-color: #00426E;color:white;height:30px; width:100%;">
                <p>logout</p>
            </div> -->
            <div class="navbar-collapse collapse">
                <div style="float:left; width: 100px; margin-right: 100px;">
                        <img src="/article/publics/img/logo.jpg" width="200" height="80" style="border-radius: 50%;">
                    </div>
                <div class="container">

                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav" style="float:right;">
                        <!-- start menu -->

                        <?php Session::init();?>
<?php if (Session::get('loggedIn') == false): ?>
                            <li>
                                <?php a_link_menu($lang->MENU_HOME, '');?>
                            </li>

                            <li>
                                <?php a_link_menu($lang->MENU_ABOUT_US, 'about_us');?>
                            </li>

                            <?php
                            	foreach ($this->menuList as $key => $menu) {
                            	    if ($menu['parent_id'] == 0) {
                            	        $link = URL . "post/page/{$menu['categoryid']}";

                            	        echo '<li>';
                            	        a_link_menu($menu['catename'], "post/page/{$menu['categoryid']}");

                            	        /*
                            	        if ($url == "post/page/{$menu['categoryid']}") {
                            	        echo "<li><a class='active' href='$link'>{$menu['catename']}</a>";
                            	        } else {
                            	        echo "<li><a href='$link'>{$menu['catename']}</a>";
                            	        }*/

                            	        $this->submenu($menu, $menu['categoryid']);
                            	        echo "</li>";
                            	    }
                            	}
                            ?>

	                        <li>
                                <?php a_link_menu($lang->MENU_CONTACT_US, 'contact_us');?>
	                        </li>

		              <?php endif;?>

<!--                     <?php if (Session::get('loggedIn') == true): ?>
                            <li><a class="page-scroll" href="<?php echo URL; ?>dashboard">Dashboard</a></li>
                            <li><a href="<?php echo URL; ?>note"><img class="size100" src="<?php echo URL; ?>publics/images/icon/note.png"><br/>Notes</a></li>

                            <?php if (Session::get('role') == 'owner'): ?>
                            <li><a href="<?php echo URL; ?>user"><img class="size100" src="<?php echo URL; ?>publics/images/icon/user.jpg"><br/>Users</a></li>
                            <li><a href="<?php echo URL; ?>category"><img class="size100" src="<?php echo URL; ?>publics/images/icon/categories.png"><br/>Category</a></li>
                            <li><a href="<?php echo URL; ?>member"><img class="size100" src="<?php echo URL; ?>publics/images/icon/member.png"><br/>Member</a></li>
                            <?php endif;?>
                            <li>
                                <?php a_link_('dashboard/logout', 'Logout');?>
                            </li>
                            <li>
                                <a style="color:whith;">Welcome :                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <?php echo Session::get('username'); ?></a>

                            </li>
                            <li>
                                <?php

                                	if ($_SESSION["username"]) {
                                	    echo '<img src="' . URL . 'publics/upload/' . $_SESSION["photo"] . '" alt="photo not found"
                                                    style="width:50px; height:50px; border-radius:50%;"/>';
                                	}
                                ?>
                            </li>

                        <?php else: ?>
                           <li><a href="<?php echo URL; ?>login"></a></li>
                        <?php endif;?> -->
                        <!-- end menu -->

                        <li style="line-height: 100%; border-right:none;">
                            <div>
                                <b><a href="<?php echo URL; ?>login" style="color: black;">Login</a></b>
                                <a href="?lang=ar"><img src="<?php echo URL; ?>publics/img/flag_ar.png" style="width: 30px; height:20px; margin-top: 5px;"></a>
                                <a href="?lang=en"><img src="<?php echo URL; ?>publics/img/flag_en.png" style="width: 30px; height:20px;margin-top: 5px;"></a>
                                <a href="?lang=kh"><img src="<?php echo URL; ?>publics/img/flag_kh.png" style="width: 30px; height:20px;margin-top: 5px;"><a/>
                            </div>
                        </li>

                    </ul>


                    <!-- End Navigation List -->
                </div><!-- End container -->
            </div>
        </div>

    </div>
    <!-- End Navigation Section -->

    <!-- Start Main Slider Section -->
        <div class="main-slider hidden-sm hidden-xs" id="main-slider" style="height:780px;">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo URL; ?>publics/images/slider/125.jpg" class="img-responsive" alt="Slider images 2" style="height: 780px;">
                        <div class="carousel-caption">
                            <!-- <h1>This is Slider Caption 2</h1>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo URL; ?>publics/images/slider/123.jpg" class="img-responsive" alt="Slider images 2" style="height: 780px;">
                    </div>
                    <div class="item">
                        <img src="<?php echo URL; ?>publics/images/slider/124.jpg" class="img-responsive" alt="Slider images 2" style="height: 780px;">
                    </div>
                     <div class="item">
                        <img src="<?php echo URL; ?>publics/images/slider/126.jpg" class="img-responsive" alt="Slider images 2" style="height: 780px;">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    <!-- End Main Slider Section -->


    <div class="container">




