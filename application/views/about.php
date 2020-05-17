<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

  <!-- Hero Area -->
  <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(<?php echo base_url(); ?>assets/images/inside7.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Our Impact</h1>
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
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        <p>Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        <h3>There are multiple ways you can help others to change their lives</h3>
                        <ul class="checks">
                        	<li>Start a workplace campaign</li>
                            <li>Youth involvement</li>
                            <li>Become a Volunteer</li>
                            <li>Become a partner</li>
                            <li>Representative Program</li>
                            
                        </ul>
                    </div>
                    
                    <div class="col-md-4 sidebar-block">
                    	<div class="widget widget_donations">
                        	<i class="fa fa-dollar fa-5x pull-left"></i>
                            <h4>What your single dollar can change</h4>
                            <form>
                            	<label>Name</label>
                            	<input type="text" class="form-control">
                            	<label>Amount (in USD)</label>
                                <input type="text" class="form-control" placeholder="$">
                                <button class="btn btn-default btn-ghost btn-light btn-rounded btn-block">Donate</button>
                            </form>
                        </div>
                    </div>
               	</div>
            </div>
            <div class="spacer-50"></div>
            <div class="padding-tb45 parallax parallax-light parallax1 counters" style="background-image:url(<?php echo base_url(); ?>assets/images/inside6.jpg)">
            	<div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-dollar fa-4x"></i> </div>
                            <div class="timer" data-perc="9000"> <span class="count">1380089</span> </div>
                            <span class="fact">Amount raised</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-heart-o fa-4x"></i> </div>
                            <div class="timer" data-perc="96"> <span class="count">36</span> </div>
                            <span class="fact">Causes</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-bar-chart-o fa-4x"></i> </div>
                            <div class="timer" data-perc="1500"> <span class="count">1211</span> </div>
                            <span class="fact">Total members</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-hand-peace-o fa-4x"></i> </div>
                            <div class="timer" data-perc="1500"> <span class="count">61098</span> </div>
                            <span class="fact">People Impacted</span>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>