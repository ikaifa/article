<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
    <title><?php echo (isset($this->title)) ? $this->title : 'Home'; ?></title>

    <!-- Basic -->
    <title>Construction | Home</title>

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

    <!-- datatable style -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL . 'publics/css/datatables.min.css'; ?>">

    <!-- Responsive CSS Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/responsive.css">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>publics/css/animate.css">
    <!-- custom -->
    <link href="<?php echo URL; ?>publics/css/custom.css" rel="stylesheet">

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
    <!-- end of -->
    <!-- import ckeditor -->
    <script src="<?php echo URL; ?>publics/ckeditor/ckeditor.js"></script>

    <!-- datatable script -->
    <script type="text/javascript" src="<?php echo URL . 'publics/js/datatables.min.js'; ?>"></script>

    <script src="<?php echo URL; ?>publics/js/note.js"></script>

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

<?php $user = auth_user();?>

<div class="container">
    <nav class="navbar navbar-default">
    <div class="container-fluid">

   <!--  <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div> -->

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>




        <a class="navbar-brand" href="<?php URL . 'dashboard';?>">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <?php if (!empty($user)) {?>

                <li><img src="<?php echo URL . "publics/upload/{$user->photo}"; ?>" style="width:30px; height:30px; border-radius: 5px; margin:5px;"></li>

                <li><span><?php echo $user->username; ?></span></li>

                <li><a class="btn btn-sm btn-danger" href="<?php echo URL . 'dashboard/logout'; ?>">Logout</a></li>
            <?php }
            ?>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </div>
    </nav>
</div>



