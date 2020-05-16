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
					<?php foreach ($blogs as $blog) {} ?>
                    <li class="col-md-4 col-sm-6 grid-item blog-grid-item format-standard">
                        <div class="grid-item-inner">
                            <a href="single-event.html" class="media-box">
                                <img src="<?php echo base_url('uploads/images/blog/').$blog->banner; ?>" alt="">
                            </a>
                            <div class="grid-item-content">
                                <h3 class="post-title"><a href="single-post.html"><?php echo $blog->title; ?></a></h3>
                                <span class="meta-data"><i class="fa fa-calendar"></i> Posted on <?php echo date('d-m-Y',strtotime($blog->created)); ?></span>
                                <p><?php echo substr(strip_tags($blog->blog),0,70) ?>...</p>
                            </div>
                        </div>
                    </li>
                </ul>
               
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
