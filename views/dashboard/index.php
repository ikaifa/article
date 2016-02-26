


<!-- Styleswitcher
================================================== -->
        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>

                    <li class="no-margin"><a title="Black" class="black" onClick="setActiveStyleSheet('black'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>

                </ul>
        </div>
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

    <div class="container">
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
            <div class="navbar-collapse collapse" style="background-color: #4D4D1F;">

                <!-- Start Navigation List -->
                <ul class="nav navbar-nav" style="background-color: #4D4D1F;">
                    <!-- start menu -->

                    <?php Session::init();?>
<?php if (Session::get('loggedIn') == false): ?>
                        <li><a class="active" href="<?php echo URL; ?>index">Home</a></li>
                        <li><a href="<?php echo URL; ?>about_us">About Us</a></li>
                       <!--  <li><a href="<?php //echo URL; ;;;?>help">Help</a></li> -->
                    <?php

                    	$id = '';
                    	foreach ($this->menuList as $key => $value) {
                    	    if ($value['parent_id'] == 0) {
                    	        echo "<li><a href='" . URL . "post/menu/" . $value['categoryname'] . "' >" . $value['categoryname'] . "</a>";
                    	        $id = $value['categoryid'];
                    	        $this->submenu($value, $id);
                    	        echo "</li>";
                    	    }
                    	}

                    ?>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                    <?php endif;?>

                    <?php if (Session::get('loggedIn') == true): ?>
                        <!-- <li><a class="page-scroll" href="<?php echo URL; ?>dashboard">Dashboard</a></li> -->
                        <li><a href="<?php echo URL; ?>note"><img src="<?php echo URL; ?>publics/images/icon/note.png" style='width:200px;height:200px;'><br/>Notes</a></li>

                        <?php if (Session::get('role') == 'owner'): ?>
                        <li><a href="<?php echo URL; ?>user"><img src="<?php echo URL; ?>publics/images/icon/user.jpg" style='width:200px;height:200px;'><br/>Users</a></li>
                        <li><a href="<?php echo URL; ?>category"><img src="<?php echo URL; ?>publics/images/icon/categories.png" style='width:200px;height:200px;'><br/>Category</a></li>
                        <li><a href="<?php echo URL; ?>member"><img src="<?php echo URL; ?>publics/images/icon/member.png" style='width:200px;height:200px;'><br/>Member</a></li>
                        <?php endif;?>

                    <?php else: ?>
                        <li><a href="<?php echo URL; ?>login">Login</a></li>
                    <?php endif;?>
                    <!-- end menu -->

                </ul>
                <!-- End Navigation List -->
            </div>
        </div>

    </div>
    <!-- End Navigation Section -->
