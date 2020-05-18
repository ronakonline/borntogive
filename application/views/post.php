<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Born to give - Charity/Crowdfunding HTML5 Template</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<!-- <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ie.css" media="screen" /><![endif]-->
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="<?php echo base_url(); ?>assets/colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script><!-- Modernizr -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<?php $this->load->view('header'); ?>
    <!-- Hero Area -->
    <div class="hero-area" style="background: rgba(0, 0, 0, 0.5);">
        <?php  
            foreach ($category as $value) {
                if ($value->id == $ccid) {

        ?>
            <div class="page-banner parallax" style="background-color: rgba(0,0,0,1);background-image:url(<?php echo base_url('uploads/images/category/').$value->banner_img;?>">
                    
                  <?php }  
             } ?>
				<?php foreach ($posts as $post){ ?>
				<?php if($post->id == $postid){ ?>
            <div class="container">
                <div class="page-banner-text">
                    <h1 class="block-title">
						<?php echo $post->title; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 content-block" style="margin-top: 30px;">
                    	<!-- <h3>Summer Camp: Students Get Together</h3> -->
                    	<div class="post-media">
                        	<img src="<?php echo base_url('uploads/images/post/').$post->banner_img1; ?>" alt="">
                        </div>  
                        <div class="row">
                        	<div class="col-md-6 col-sm-6">
                                <span class="event-date">
                                    <span class="date"><?php echo date('d', strtotime($post->created)); ?></span>
                                    <span class="month"><?php echo date('F', strtotime($post->created)); ?></span>
                                    <span class="year"><?php echo date('Y', strtotime($post->created)); ?></span>
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
                            <img src="<?php echo base_url('uploads/images/post/').$post->banner_img2; ?>" alt="">
                        </div>
                      	<p class="lead"><?php echo $post->youget; ?></p>
                        
                        <div class="spacer-20"></div>
                        <h2>who you'll help</h2>
                        <div class="post-media">
                            <img src="<?php echo base_url('uploads/images/post/').$post->banner_img3; ?>" alt="">
                        </div>
                        <p class="lead"><?php echo $post->whohelp; ?></p>

                    </div>
                    

                    
                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar-block">
                        <div class="widget widget_recent_causes">
                            <!-- <h3 class="widgettitle"><strong><?php //echo $post->title; ?></strong></h3> -->

                            <h4 style="margin-top: 30px;"><strong>You Will:</strong></h4>
                            <p class="lead"><?php echo $post->youwill; ?></p>
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



                    <!-- <div class="lgray-bg padding-tb75">-->
                        <div class="container ">

                            <div class="row">

                                <!-- <div class="col-md-5 col-sm-5">
                                        <h2 class="block-title">Causes that need your<br>urgent attention</h2>
                                        <div class="spacer-30"></div>
                                </div> -->
                                <!-- <div class="col-md-7 col-sm-7">
                                    <div class="spacer-10"></div>
                                    <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec.</p>
                                </div> -->
                            </div>
                            <div class="carousel-wrapper padding-tb75">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="causes-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                        <?php foreach ($posts as $value) {
                                            if ($value->id != $post->id && $value->cid== $ccid)  {?>
                                                <li class="item">
                                                    <div class="grid-item cause-grid-item small-business format-standard">
                                                        <div class="grid-item-inner">
                                                            <a href="<?php echo base_url('Page/single_post/').$ccid.'/'.$value->id ?>" class="media-box">
                                                                <img src="<?php echo base_url('uploads/images/post/').$value->banner_img1; ?>" alt="" style="height: 175px;width: 290px;">
                                                            </a>
                                                            <div class="grid-item-content">
                                                                <!-- <a class="cProgress" data-complete="88" data-color="F23827" data-toggle="tooltip" data-original-title="10 days left"><strong></strong></a> -->
                                                                <h3 class="post-title"><a href="<?php echo base_url('Page/single_post/').$ccid.'/'.$value->id ?>"><?php echo $value->title; ?></a></h3>
                                                                <!-- <div class="meta-data">Donated $26400 / <span class="cause-target">$30000</span></div> -->
                                                            </div>
                                                            <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a> -->
                                                        </div>
                                                    </div>
                                                </li>
                                        <?php }} ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                    <div class="container row">
                        <?php foreach ($card as $card) { ?>
                            
                        
                            <div class="card ml-4 mb-4" style="width: 15rem;">
                              <img class="card-img-top" src="<?php echo base_url('uploads/images/card/').$card->image ?>" alt="Card image cap">
                              <div class="card-body text-center">
                                <h4 class="card-title"><strong><?php echo $card->entries ?> Entries</strong></h4>
                                <p class="card-text"><?php echo $card->detail ?></p>
                                <a href="#" class="btn btn-primary">Donate $<?php echo $card->price ?></a>
                              </div>
                            </div>
                        <?php } ?>
                    
                    </div>
                    

                    <div class="container" style="margin-bottom: 20px";>
                        
                        <h2><div class="" style="text-align: center;"><strong>Stuff Your lawyers want you to read</strong></div></h2>
                        <?php echo $post->details; ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php } } ?>
    <?php $this->load->view('footer'); ?>
    <?php $this->load->view('js-links');?>
