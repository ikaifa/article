

<!-- Start Single Blog Page -->
<div class="row">
    <div class="col-md-8 col-sm-8">
        <div class="blog-section">

            <!-- Start Single Post Area -->
            <div class="blog-post gallery-post">

                <!-- Start Single Post (Gallery Slider) -->
                <div class="post-head">

                    <?php

                    	if (!empty($this->post['image'])) {
                    	    echo '<a title="title" href="' . URL . 'publics/upload/' . $this->post['image'] . '" data-lightbox="project-2" >';
                    	    echo '<img src="' . URL . 'publics/upload/' . $this->post['image'] . '" data-lightbox-gallery="gallery1" class="img-responsive"/>';
                    	    echo '</a>';
                    	}

                    ?>

                    <!-- Start Single Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                        <h3><?php echo $this->post['title']; ?></h3>
                        <ul class="post-meta">
                            <li>By                                   <?php echo $this->post['username']; ?></li>
                            <li><?php echo $this->post['date_added']; ?></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <br/>
                        <p><?php echo $this->post['content']; ?></p>

                        <p><?php echo $this->post['video']; ?></p>

                        <div class="post-bottom clearfix">
                            <div class="post-share">
                                <span>Share This Post:</span>
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post Content -->

                </div>
            </div>
            <!-- End Single Post Area -->

            <!-- Start Comment Area -->

            <div id="comments">
                <h2 class="comments-title">(4) Comments</h2>
                <ol class="comments-list">
                    <li>
                        <div class="comment-box clearfix">
                            <div class="avatar"><img alt="" src="<?php echo URL; ?>publics/images/avatar.jpg" /></div>
                            <div class="comment-content">
                                <div class="comment-meta">
                                    <span class="comment-by">John Doe</span>
                                    <span class="comment-date">February 15, 2013 at 11:39 pm</span>
                                    <span class="reply-link"><a href="#">Reply</a></span>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                        </div>

                        <ul>
                            <li>
                                <div class="comment-box clearfix">
                                    <div class="avatar"><img alt="" src="<?php echo URL; ?>publics/images/avatar.png" /></div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <span class="comment-by">John Doe</span>
                                            <span class="comment-date">February 15, 2013 at 11:39 pm</span>
                                            <span class="reply-link"><a href="#">Reply</a></span>
                                        </div>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    </div>
                                </div>

                                <ul>
                                    <li>
                                        <div class="comment-box clearfix">
                                            <div class="avatar"><img alt="" src="<?php echo URL; ?>publics/images/avatar.jpg" /></div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <span class="comment-by">John Doe</span>
                                                    <span class="comment-date">February 15, 2013 at 11:39 pm</span>
                                                    <span class="reply-link"><a href="#">Reply</a></span>
                                                </div>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="comment-box clearfix">
                            <div class="avatar"><img alt="" src="<?php echo URL; ?>publics/images/avatar.png" /></div>
                            <div class="comment-content">
                                <div class="comment-meta">
                                    <span class="comment-by">John Doe</span>
                                    <span class="comment-date">February 15, 2013 at 11:39 pm</span>
                                    <span class="reply-link"><a href="#">Reply</a></span>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                        </div>
                    </li>

                </ol>

                <!-- Start Respond Form -->
                <div id="respond">
                    <h2 class="respond-title">Leave a reply</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="author">Name<span class="required">*</span></label>
                                <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                            </div>
                            <div class="col-md-4">
                                <label for="email">Email<span class="required">*</span></label>
                                <input id="email" name="author" type="text" value="" size="30" aria-required="true">
                            </div>
                            <div class="col-md-4">
                                <label for="url">Website<span class="required">*</span></label>
                                <input id="url" name="url" type="text" value="" size="30" aria-required="true">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="comment">Add Your Comment</label>
                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                <input name="submit" type="submit" id="submit" class="btn btn-primary" value="Submit Comment">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Respond Form -->

            </div>
            <!-- End Comment Area -->


        </div>
    </div><!-- /.col-md-8 -->

    <!--Start Sidebar Section-->
	<div class="col-md-4 col-sm-4">

        <div class="sidebar right-sidebar">

			<!-- Search Widget -->
			<div class="widget widget-search">
				<form action="#">
					<input type="search" placeholder="Enter Keywords..." />
					<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>

			<!-- Advertist Widget -->
			<div class="widget widget-categories">
				<h3 class="section-title">Your Advertising</h3>

			</div>

			<!-- Recent Posts widget -->
			<div class="widget widget-popular-posts">
				<h3 class="section-title">Recent Post</h3>
				<ul>
					<li>
						<div class="widget-thumb">
							<a href="#"><img src="<?php echo URL; ?>publics/images/blog-mini-01.jpg" alt="" /></a>
						</div>
						<div class="widget-content">
							<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
							<span>Jul 29 2013</span>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="widget-thumb">
							<a href="#"><img src="<?php echo URL; ?>publics/images/blog-mini-02.jpg" alt="" /></a>
						</div>
						<div class="widget-content">
							<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
							<span>Jul 29 2013</span>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="widget-thumb">
							<a href="#"><img src="<?php echo URL; ?>publics/images/blog-mini-03.jpg" alt="" /></a>
						</div>
						<div class="widget-content">
							<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
							<span>Jul 29 2013</span>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>

            <!-- Popular Posts widget -->
			<div class="widget widget-popular-posts">
				<h3 class="section-title">Popular Post</h3>
				<ul>
					<li>
						<div class="widget-thumb">
							<a href="#"><img src="<?php echo URL; ?>publics/images/blog-mini-01.jpg" alt="" /></a>
						</div>
						<div class="widget-content">
							<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
							<span>Jul 29 2013</span>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="widget-thumb">
							<a href="#"><img src="<?php echo URL; ?>publics/images/blog-mini-02.jpg" alt="" /></a>
						</div>
						<div class="widget-content">
							<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
							<span>Jul 29 2013</span>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="widget-thumb">
							<a href="#"><img src="<?php echo URL; ?>publics/images/blog-mini-03.jpg" alt="" /></a>
						</div>
						<div class="widget-content">
							<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
							<span>Jul 29 2013</span>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>

			<!-- Custom Post Widget -->
			<div class="widget">
				<h3 class="section-title">Custom Post</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
			</div>

            <!-- Video Widget -->
			<div class="widget">
				<h3 class="section-title">Video</h3>
				<div>
					<p><?php echo $this->post['video']; ?></p>
				</div>
			</div>

			<!-- Tags Widget -->
			<div class="widget widget-tags">
				<h3 class="section-title">Tags</h3>
				<div class="tagcloud">
					<a href="#">Portfolio</a>
					<a href="#">Theme</a>
					<a href="#">Mobile</a>
					<a href="#">Design</a>
					<a href="#">Wordpress</a>
					<a href="#">Jquery</a>
					<a href="#">CSS</a>
					<a href="#">Modern</a>
					<a href="#">Theme</a>
					<a href="#">Icons</a>
					<a href="#">Google</a>
				</div>
			</div>

		</div>
    </div>
	<!--End sidebar-->





