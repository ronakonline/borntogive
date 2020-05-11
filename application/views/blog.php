<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

  <!-- Hero Area -->
  <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(<?php echo base_url(); ?>assets/images/inside7.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Blogs</h1>
                </div>
            </div>
        </div>
    </div>
  <!-- Main Content -->
  <div id="main-container" style="margin-top:40px;">
    	<div class="content">
        	<div class="container">
                <ul class="grid-holder isotope gallery-items" data-sort-id="gallery">
                    <li class="col-md-4 col-sm-6 grid-item blog-grid-item format-standard">
                        <div class="grid-item-inner">
                            <a href="single-event.html" class="media-box">
                                <img src="<?php echo base_url(); ?>assets/images/post1.jpg" alt="">
                            </a>
                            <div class="grid-item-content">
                                <h3 class="post-title"><a href="single-post.html">A single person can change million lives</a></h3>
                                <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 11th Dec, 2015</span>
                                <p>A blog post sample excerpt text which can be edited by editing the blog post page...</p>
                                <div class="tag-cloud">
                                    <i class="fa fa-tags"></i> 
                                    <a href="#">Water</a>
                                    <a href="#">Students</a>
                                    <a href="#">NYC</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 grid-item blog-grid-item format-standard">
                        <div class="grid-item-inner">
                            <a href="single-event.html" class="media-box">
                                <img src="<?php echo base_url(); ?>assets/images/post2.jpg" alt="">
                            </a>
                            <div class="grid-item-content">
                                <h3 class="post-title"><a href="single-post.html">Donate your woolens this winter Born To Give</a></h3>
                                <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 11th Dec, 2015</span>
                                <p>A blog post sample excerpt text which can be edited by editing the blog post page...</p>
                                <div class="tag-cloud">
                                    <i class="fa fa-tags"></i> 
                                    <a href="#">Water</a>
                                    <a href="#">Students</a>
                                    <a href="#">NYC</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 grid-item blog-grid-item format-standard">
                        <div class="grid-item-inner">
                            <a href="single-event.html" class="media-box">
                                <img src="<?php echo base_url(); ?>assets/images/post3.jpg" alt="">
                            </a>
                            <div class="grid-item-content">
                                <h3 class="post-title"><a href="single-post.html">How to survive the tough path of life</a></h3>
                                <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 11th Dec, 2015</span>
                                <p>A blog post sample excerpt text which can be edited by editing the blog post page...</p>
                                <div class="tag-cloud">
                                    <i class="fa fa-tags"></i> 
                                    <a href="#">Water</a>
                                    <a href="#">Students</a>
                                    <a href="#">NYC</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
               
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>