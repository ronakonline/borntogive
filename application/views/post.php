<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
    <!-- Hero Area -->
    <div class="hero-area" style="min-height: 150px;background-color: black;">
    	<div class="page-banner parallax" style="min-height: 200px;background-color: black">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Post</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 content-block">
                    	<!-- <h3>Summer Camp: Students Get Together</h3> -->
                    	<div class="post-media">
                        	<img src="<?php echo base_url('uploads/images/post/').$post[0]->banner_img1; ?>" alt="">
                        </div>  
                        <div class="row">
                        	<div class="col-md-6 col-sm-6">
                                <span class="event-date">
                                    <span class="date"><?php echo date('d', strtotime($post[0]->created)); ?></span>
                                    <span class="month"><?php echo date('F', strtotime($post[0]->created)); ?></span>
                                    <span class="year"><?php echo date('Y', strtotime($post[0]->created)); ?></span>
                                </span>
                                    <!-- <span class="meta-data">Thursday, 11:20 AM - 02:20 PM</span>
                        		<a href="#" class="btn btn-primary btn-event-single-book">Book Tickets</a> -->
                      		</div>
                           <!--  <div class="col-md-6 col-sm-6">
                                <ul class="list-group">
                                    <li class="list-group-item">200<span class="badge">Attendees</span></li>
                                    <li class="list-group-item">341 Magetic state, US<span class="badge">Location</span></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="spacer-20"></div>
                        <h2>what you'll get</h2>
                        <div class="post-media">
                            <img src="<?php echo base_url('uploads/images/post/').$post[0]->banner_img2; ?>" alt="">
                        </div>
                      	<p class="lead"><?php echo $post[0]->youget; ?></p>
                        
                        <div class="spacer-20"></div>
                        <h2>who you'll help</h2>
                        <div class="post-media">
                            <img src="<?php echo base_url('uploads/images/post/').$post[0]->banner_img3; ?>" alt="">
                        </div>
                        <p class="lead"><?php echo $post[0]->whohelp; ?></p>
                        
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar-block">
                        <div class="widget widget_recent_causes">
                            <h3 class="widgettitle"><?php echo $post[0]->title; ?></h3>
                            <h4><strong>You Will:</strong></h4>
                            <p class="lead"><?php echo $post[0]->youwill; ?></p>
                            <!-- <ul>
                                <li>
                                    <a href="#" class="cause-thumb">
                                        <img src="http://placehold.it/200x200&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail">
                                        <div class="cProgress" data-complete="88" data-color="42b8d4">
                                            <strong></strong>
                                        </div>
                                    </a>
                                   	<h5><a href="single-cause.html">Help small shopkeepers of Sunyani</a></h5>
                                    <span class="meta-data">10 days left to achieve</span>
                                </li>
                                <li>
                                    <a href="#" class="cause-thumb">
                                        <img src="http://placehold.it/200x200&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail">
                                        <div class="cProgress" data-complete="75" data-color="42b8d4">
                                            <strong></strong>
                                        </div>
                                    </a>
                                   	<h5><a href="single-cause.html">Save tigers from poachers</a></h5>
                                    <span class="meta-data">32 days left to achieve</span>
                                </li>
                                <li>
                                    <a href="#" class="cause-thumb">
                                        <img src="http://placehold.it/200x200&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail">
                                        <div class="cProgress" data-complete="88" data-color="42b8d4">
                                            <strong></strong>
                                        </div>
                                    </a>
                                   	<h5><a href="single-cause.html">Help rebuild Nepal</a></h5>
                                    <span class="meta-data">10 days left to achieve</span>
                                </li>
                            </ul> -->
                        </div>
                        <!-- <div class="widget sidebar-widget widget_categories">
                        	<h3 class="widgettitle">Event Categories</h3>
                            <ul>
                            	<li><a href="#">Education</a> (3)</li>
                            	<li><a href="#">Environment</a> (1)</li>
                            	<li><a href="#">Global warming</a> (6)</li>
                            	<li><a href="#">Water</a> (4)</li>
                            	<li><a href="#">Wild life</a> (2)</li>
                            	<li><a href="#">Small business</a> (12)</li>
                            </ul>
                        </div>
                        <div class="widget recent_posts">
                           	<h3 class="widgettitle">Latest Posts</h3>
                            <ul>
                                <li>
                                    <a href="single-post.html" class="media-box">
                                        <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                    </a>
                                    <h5><a href="single-post.html">A single person can change million lives</a></h5>
                                    <span class="meta-data grid-item-meta">Posted on 11th Dec, 2015</span>
                                </li>
                                <li>
                                    <a href="single-post.html" class="media-box">
                                        <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                    </a>
                                    <h5><a href="single-post.html">Donate your woolens this winter</a></h5>
                                    <span class="meta-data grid-item-meta">Posted on 11th Dec, 2015</span>
                                </li>
                                <li>
                                    <a href="single-post.html" class="media-box">
                                        <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                    </a>
                                    <h5><a href="single-post.html">How to survive the tough path of life</a></h5>
                                    <span class="meta-data grid-item-meta">Posted on 06th Dec, 2015</span>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('footer'); ?>
    <?php $this->load->view('js-links');?>