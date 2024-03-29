<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(<?php echo base_url('uploads/images/blog/inside8.jpg'); ?>)">
        	<div class="container">
            	<div class="page-banner-text">
                    <?php foreach ($blogs as $blog){ ?>
                        <?php if($blog->id == $blogid){ ?>
        			<h1 class="block-title"><?php echo $blog->title; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 content-block" style="padding-top: 40px; ">
                    	<!-- <h3>A single person can change million lives</h3> -->
                    	<div class="post-media">
                        	<img src="<?php echo base_url('uploads/images/blog/').$blog->banner; ?>" alt="">
                        </div>
                        <div class="post-content">
                        	<p><?php echo $blog->blog; ?></p>
                      	</div>
                        <!-- <div class="tag-cloud">
                            <i class="fa fa-tags"></i> 
                            <a href="#">Water</a>
                            <a href="#">Students</a>
                            <a href="#">NYC</a>
                        </div> -->
                        <!-- About Author -->
                        <!-- <section class="about-author">
                            <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar" class="img-thumbnail">
                            <div class="post-author-content">
                                <h3>Emma Paquette <span class="label label-primary">Author</span></h3>
                                <p><strong>Beverly Barnett</strong>, is a regular writer for the Vestige Museum blog. She loves to write more about the animal species and have so much faith in the nature's doing.</p>
                            </div>
                        </section> -->
                        <!-- Pagination -->
                        <!-- <ul class="pager">
                            <li class="pull-left"><a href="#">&larr; Prev Post</a></li>
                            <li class="pull-right"><a href="#">Next Post &rarr;</a></li>
                        </ul> -->
            			<!-- <section class="post-comments" id="comments">
              				<h3><i class="fa fa-comment"></i> Comments (4)</h3>
              				<ol class="comments">
                				<li>
                  					<div class="post-comment-block">
                    					<img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar" class="img-thumbnail">
                                        <div class="post-comment-content">
                                            <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                            <h5>Robin Schmidt <span>says</span></h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <p>There have been human health concerns associated with the consumption of dolphin meat in Japan after tests showed that dolphin meat contained high levels of mercury.</p>
                                      	</div>
                  					</div>
                				</li>
                				<li>
                                    <div class="post-comment-block">
                    					<img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar" class="img-thumbnail">
                                        <div class="post-comment-content">
                                            <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                            <h5>Emma Paquette <span>says</span></h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <p>Nicely said :)</p>
                                      	</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="post-comment-block">
                    							<img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar" class="img-thumbnail">
                                                <div class="post-comment-content">
                                                    <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                                    <h5>Robin Schmidt <span>says</span></h5>
                                                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                                    <p>Étienne de Flacourt (1607-60), French governor of Madagascar, described eating unborn dolphin calves cut out of the womb of a caught dolphin cow in Histoire de la grande isle Madagascar (1661). He considered the meat more tender and delicate than veal and believed it to be among the best meats he had eaten.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-comment-block">
                    							<img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar" class="img-thumbnail">
                                                <div class="post-comment-content">
                                                    <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                                    <h5>Robin Schmidt <span>says</span></h5>
                                                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                                    <p>Real post, i love reading it all through</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="post-comment-block">
                    					<img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar" class="img-thumbnail">
                                        <div class="post-comment-content">
                                            <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                            <h5>Emma Paquette <span>says</span></h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <p>Dolphin meat is consumed in a small number of countries world-wide, which include Japan[125] and Peru (where it is referred to as chancho marino, or "sea pork").[126] While Japan may be the best-known and most controversial example, only a very small minority of the population has ever sampled it.</p>
                                      	</div>
                                    </div>
                                </li>
                            </ol>
                        </section>
                        <section class="post-comment-form">
                            <h3><i class="fa fa-share"></i> Post a comment</h3>
                            <form>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control input-lg" placeholder="Your name">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="email" class="form-control input-lg" placeholder="Your email">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="url" class="form-control input-lg" placeholder="Website (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        	<textarea cols="8" rows="4" class="form-control input-lg" placeholder="Your comment"></textarea>
                                    	</div>
                                	</div>
                            	</div>
                            	<div class="row">
                                	<div class="form-group">
                                    	<div class="col-md-12">
                                        	<button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                                    	</div>
                                	</div>
                            	</div>
                        	</form>
                    	</section> -->
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar-block" style="margin-top: 40px">
                        <div class="widget tabbed_content tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"> <a data-toggle="tab" href="#Trecent">Recent</a> </li>
                               <!--  <li> <a data-toggle="tab" href="#Tpopular">Popular</a> </li>
                                <li> <a data-toggle="tab" href="#Tcomments">Tags</a> </li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="Trecent" class="tab-pane active">
                                    <div class="widget recent_posts">
                                        <ul>
                                            <!-- <?php  ?> -->
                                            <?php foreach (array_reverse($blogs) as $blog) { 
                                                if ($blog->id != $blogid) {?>
                                            <li>
                                                <a href="<?php echo base_url('Blog/single_blog/').$blog->id ?>" class="media-box">
                                                    <img src="<?php echo base_url('uploads/images/blog/').$blog->banner; ?>" alt="">
                                                </a>
                                                <h5><a href="<?php echo base_url('Blog/single_blog/').$blog->id ?>"><?php echo substr(strip_tags($blog->blog),0,70) ?>...</a></h5>
                                                <span class="meta-data grid-item-meta">Posted on <?php echo date('d-m-Y',strtotime($blog->created)); ?></span>
                                            </li>
                                            <?php } } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div id="Tpopular" class="tab-pane">
                                    <div class="widget recent_posts">
                                        <ul>
                                            <li>
                                                <a href="single-post.html" class="media-box">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                                <h5><a href="single-post.html">How to survive the tough path of life</a></h5>
                                                <span class="meta-data grid-item-meta">Posted on 06th Dec, 2015</span>
                                            </li>
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
                                        </ul>
                                    </div>
                                </div>
                                <div id="Tcomments" class="tab-pane">
                                    <div class="tag-cloud">
                                        <a href="#">Water</a>
                                        <a href="#">Students</a>
                                        <a href="#">NYC</a>
                                        <a href="#">Education</a>
                                        <a href="#">Poverty</a>
                                        <a href="#">Food</a>
                                        <a href="#">Poor</a>
                                        <a href="#">Business</a>
                                        <a href="#">Love</a>
                                        <a href="#">Help</a>
                                        <a href="#">Savings</a>
                                        <a href="#">Winter</a>
                                        <a href="#">Soul</a>
                                        <a href="#">Power</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="widget sidebar-widget widget_categories">
                        	<h3 class="widgettitle">Post Categories</h3>
                            <ul>
                            	<li><a href="#">Education</a> (3)</li>
                            	<li><a href="#">Environment</a> (1)</li>
                            	<li><a href="#">Water</a> (4)</li>
                            	<li><a href="#">Wild life</a> (2)</li>
                            	<li><a href="#">Small business</a> (12)</li>
                            </ul>
                        </div> -->
                        <!-- <div class="widget sidebar-widget widget_search">
                        	<div class="input-group">
                          		<input type="text" class="form-control" placeholder="Enter your keywords">
                          		<span class="input-group-btn">
                            		<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                          		</span>
                      		</div>
                        </div> -->
                        <!-- <div class="widget widget_testimonials">
                        	<h3 class="widgettitle">Stories of change</h3>
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="5000" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <li class="item">
                                            <div class="testimonial-block">
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                                </blockquote>
                                                <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="70" height="70"></div>
                                                <div class="testimonial-info">
                                                    <div class="testimonial-info-in">
                                                        <strong>Ada Ajimobi</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="testimonial-block">
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                                </blockquote>
                                                <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="70" height="70"></div>
                                                <div class="testimonial-info">
                                                    <div class="testimonial-info-in">
                                                        <strong>Chloe Lévesque</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } } ?>
    <?php $this->load->view('footer'); ?>
    <?php $this->load->view('js-links');?>