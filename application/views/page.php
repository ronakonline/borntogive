<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>

   <!-- Hero Area -->
   <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(<?php echo base_url(); ?>assets/images/inside9.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">
                    <?php 
                    if ($post) {
                        echo $post[0]->name;    
                    }
                    else{
                        echo "No Posts";
                    }
                     ?>
                    <!-- Cause -->
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                <div class="grid-filter">
                
                </div>
                <div class="row">
                    <ul class="sort-destination isotope gallery-items" data-sort-id="gallery">
                        <?php foreach ($post as $value) { ?>
                            <li class="col-md-4 col-sm-6 grid-item event-grid-item education format-standard">
                            	<div class="grid-item-inner">
                                    <a href="<?php echo base_url('Page/single_post/').$value->id ?>" class="media-box">
                                        <img src="<?php echo base_url('uploads/images/post/').$value->banner_img1; ?>" alt="No image">
                                    </a>
                                    <div class="grid-item-content" style="padding-bottom: 10px;">
                                        <span class="event-date">
                                            <span class="date"><?php echo date('d', strtotime($value->created)); ?></span>
                                            <span class="month"><?php echo date('F', strtotime($value->created)); ?></span>
                                            <span class="year"><?php echo date('Y', strtotime($value->created)); ?></span>
                                        </span>
                                        <span class="meta-data"><!-- Thursday, 11:20 AM - 02:20 PM --></span>
                                        <h3 class="post-title"><a href="<?php echo base_url('Page/single_post/').$value->id ?>"><?php echo $value->title; ?></a></h3>
                                        <p>
                                            <?php //echo strip_tags($value->youwill); ?>
                                        </p>
                                        <!-- <ul class="list-group">
                                            <li class="list-group-item">200<span class="badge">Attendees</span></li>
                                            <li class="list-group-item">341 Magetic state, US<span class="badge">Location</span></li>
                                        </ul> -->
                                    </div>
                               	</div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>