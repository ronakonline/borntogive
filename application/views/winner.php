<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
     <!-- Hero Area -->
     <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(<?php echo base_url(); ?>assets/images/inside9.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Winners</h1>
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
                    <ul class="sort-destination isotope gallery-items gallery-items-nocaption" data-sort-id="gallery">
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item images format-image">
                           	<a href="<?php echo base_url(); ?>assets/images/gallery1.jpg" class="media-box magnific-image"> <img src="<?php echo base_url(); ?>assets/images/gallery1.jpg" alt=""> </a>
                        </li>
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item sliders format-gallery">
                            <div class="media-box">
                                <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                                    <ul class="slides">
                                        <li class="item"><a href="<?php echo base_url(); ?>assets/images/gallery2.jpg" class="popup-image"><img src="<?php echo base_url(); ?>assets/images/gallery2.jpg" alt=""></a></li>
                                        <li class="item"><a href="<?php echo base_url(); ?>assets/images/gallery3.jpg" class="popup-image"><img src="<?php echo base_url(); ?>assets/images/gallery3.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item links format-link">
                           	<a href="#" target="_blank" class="media-box"> <img src="<?php echo base_url(); ?>assets/images/gallery4.jpg" alt=""> </a>
                        </li>
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item images format-image">
                           	<a href="<?php echo base_url(); ?>assets/images/gallery6.jpg" class="media-box magnific-image"> <img src="<?php echo base_url(); ?>assets/images/gallery6.jpg" alt=""> </a>
                        </li>
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item images format-image">
                           	<a href="<?php echo base_url(); ?>assets/images/gallery7.jpg" class="media-box magnific-image"> <img src="<?php echo base_url(); ?>assets/images/gallery7.jpg" alt=""> </a>
                        </li>
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item images format-image">
                           	<a href="<?php echo base_url(); ?>assets/images/gallery8.jpg" class="media-box magnific-image"> <img src="<?php echo base_url(); ?>assets/images/gallery8.jpg" alt=""> </a>
                        </li>
                    </ul>
                </div>
                <!-- Page Pagination -->
                <nav>
                    <ul class="pagination pagination-lg">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>