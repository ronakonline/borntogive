<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

    <!-- Hero Area -->
    <div class="hero-area">
    	<!-- Start Hero Slider -->
      	<div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
            <ul class="slides">
                <li class="parallax" style="background-image:url(<?php echo base_url();?>assets/images/slide4.jpg)">
                	<div class="flex-caption">
                    	<div class="container">
                        	<div class="flex-caption-table">
                            	<div class="flex-caption-cell">
                                	<div class="flex-caption-text">
                                        <h2>Let your life be<br>an Inspiration</h2>
                                        <p>Lorem ipsum dolor sit amet, consectet<br>adipiscinge lit. Nam malesuada dapi<br>bus diam, ut fringilla purus..</p>
                                        <a href="causes.html" class="btn btn-primary">Start with a little</a>
                                    </div>
                               	</div>
                          	</div>
                        </div>
                    </div>
                </li>
                <li class="parallax" style="background-image:url(<?php echo base_url();?>assets/images/slide2.jpg)">
                	<div class="flex-caption">
                    	<div class="container">
                        	<div class="flex-caption-table">
                            	<div class="flex-caption-cell">
                                	<div class="flex-caption-text text-align-center">
                                        <h2>Make a difference for people<br>who needs it the most</h2>
                                        <a href="causes.html" class="btn btn-primary">Start with a little</a>
                                    </div>
                               	</div>
                          	</div>
                        </div>
                    </div>
                </li>
               
          	</ul>
       	</div>
        <!-- End Hero Slider -->
    </div>

    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
			<?php foreach ($category as $cat){ ?>
        	<div class="lgray-bg padding-tb45">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-12 col-sm-12">
                        		<h2 class="block-title"><?php echo $cat->name; ?></h2>
                        		<div class="spacer-30"></div>
                        </div>

                  	</div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="causes-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                               <?php foreach (array_reverse($posts) as $post){ ?>
								   <?php if($post->cid == $cat->id){ ?>
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php echo base_url('uploads/images/post/').$post->banner_img1;?>" alt="" style="width: 263px; height: 176px;">
                                            </a>
                                            <div class="grid-item-content">

                                                <h3 class="post-title"><a href="single-cause.html"><?php echo $post->title; ?></a></h3>

                                            </div>

                                        </div>
                                    </div>
                                </li>
								<?php } } ?>

                            </ul>
                        </div>
                    </div>
               	</div>
            </div>
            <?php } ?>

            
            <div class="padding-tb75 padding-b0">
                <div class="container">
                    <div class="text-align-center">
                        <h2 class="block-title block-title-center">Some of the success stories</h2>
                    </div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-autoplay="5000" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <?php foreach ($testimonial as$value) { ?>
                                    
                                
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p><?php echo $value->feedback; ?></p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="<?php echo base_url('uploads/images/testimonial/').$value->profile; ?>" alt="" width="70" height="70"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong><?php echo $value->name; ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Carousel -->
           <!--  <div class="partner-carousel">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3 col-sm-3">
                        	<h4 class="push-top">Our Most Trusted Supporting partners</h4>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="partners-slider" data-columns="5" data-autoplay="5000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="3" data-items-mobile="2">
                                        <li class="item"><img src="<?php echo base_url();?>assets/images/logo1.png" alt=""></li>
                                        <li class="item"><img src="<?php echo base_url();?>assets/images/logo2.png" alt=""></li>
                                        <li class="item"><img src="<?php echo base_url();?>assets/images/logo3.png" alt=""></li>
                                        <li class="item"><img src="<?php echo base_url();?>assets/images/logo4.png" alt=""></li>
                                        <li class="item"><img src="<?php echo base_url();?>assets/images/logo5.png" alt=""></li>
                                        <li class="item"><img src="<?php echo base_url();?>assets/images/logo6.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   	</div>
                </div>
           	</div> -->
            

            
            <div class="padding-tb75 lgray-bg">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-4 col-sm-4">
                       		<h2 class="block-title">Latest news from our blog</h2>

                        </div>
                        
                        <div class="col-md-12 col-sm-12">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="news-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <?php foreach ($blogs as $blog) { ?>
										<li class="item">
                                            <div class="grid-item blog-grid-item format-standard">
                                                <div class="grid-item-inner">
                                                    <a href="single-event.html" class="media-box">
                                                        <img src="<?php echo base_url('uploads/images/blog/').$blog->banner;?>" alt="">
                                                    </a>
                                                    <div class="grid-item-content">
                                                        <h3 class="post-title"><a href="single-post.html"><?php echo $blog->title; ?></a></h3>
                                                        <span class="meta-data">Posted on <?php echo date('d-m-Y',strtotime($blog->created)); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										<?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
   <?php $this->load->view('footer'); ?>
</div>



<?php $this->load->view('js-links');?>
