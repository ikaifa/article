
<!-- Start Service Section -->
<div id="service" class="services-section">
    <div class="row" >
        <?php
        	if (!empty($this->postList)) {
        	    foreach ($this->postList as $key => $value) {
        	        echo '<div class="col-md-4 col-sm-6 col-xs-12" >';
        	        echo '<div class="feature-2">';
        	        echo "<img src='" . URL . "publics/upload/{$value['image']}' class='img-responsive' />";
        	        echo "<h4><strong><a href=" . URL . 'post/detail/' . $value['noteid'] . ">{$this->limitText($value['title'], 200)}</a></strong></h4>";
        	        //echo '<li class="fa fa-calendar">&nbsp;</li> <hr/><p id="date_color">' . $value['date_added'] . ' comments (3) </p><hr/>';
        	        echo '<hr/><strong><p id="date_color" class="fa fa-calendar ">' . $value['date_added'] . ' comments (3) </p></strong><hr/>';
        	        //echo '<p>' . $this->limitText($value['content'], 200) .'</p>';
        	        echo '<a id="btnRead" class="btn btn-primary" href="' . URL . 'post/detail/' . $value['noteid'] . '">Read more</a>';
        	        echo '</div>';
        	        echo '</div>';
        	    }
        	} else {
        	    echo "<h1 style='color:blue;'>គ្មានទិន្នន័យ</h1>";
        	}
        ?>

    </div><!-- /.row -->

    <!-- pagination -->
    <div class="container">
        <div class="row">
            <div>
                <ul class="pagination">
                    <?php
                    	if (!empty($this->postList) && $this->pageLink == "post/menu/") {
                    	    for ($page = 1; $page <= $this->totalPages; ++$page) {
                    	        //$url = URL . "post/cate/{$this->cateid}/{$page}";
                    	        $url = URL . "{$this->pageLink}{$this->menu}/{$page}";
                    	        if ($page == $this->currentPage) {
                    	            echo "<li class='active'><a href='$url'>$page</a></li>";
                    	        } else {
                    	            echo "<li><a href='$url'>$page</a></li>";
                    	        }
                    	    }
                    	}
                    	if (!empty($this->postList) && $this->pageLink == "post/submenu/") {
                    	    for ($page = 1; $page <= $this->totalPages; ++$page) {
                    	        //$url = URL . "post/cate/{$this->cateid}/{$page}";
                    	        $url = URL . "{$this->pageLink}{$this->menu}/{$this->sub}/{$page}";
                    	        if ($page == $this->currentPage) {
                    	            echo "<li class='active'><a href='$url'>$page</a></li>";
                    	        } else {
                    	            echo "<li><a href='$url'>$page</a></li>";
                    	        }
                    	    }
                    	}
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- end pagination -->
</div>
<!-- End Services Section -->
