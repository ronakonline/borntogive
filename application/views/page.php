<?php $this->load->view('css-links'); ?>
<?php $this->load->view('header'); ?>
    
   <!-- Hero Area -->
   <div class="hero-area" style="background: rgba(0, 0, 0, 0.5);">
    	<?php  
            foreach ($category as $value) {
                if ($value->id == $ccid) {

        ?>
            <div class="page-banner parallax" style="background-color: rgba(0,0,0,1);background-image:url(<?php echo base_url('uploads/images/category/').$value->banner_img;?>">
                    

                
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">
						<?php echo $value->name; ?>
                    </h1>
                </div>
            </div>
				<?php }
				} ?>
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
                        <?php foreach ($posts as $value) { ?>
							<?php if($value->cid==$ccid){ ?>
                            <li class="col-md-4 col-sm-6 grid-item event-grid-item education format-standard">
                            	<div class="grid-item-inner">
                                    <a href="<?php echo base_url('Page/single_post/').$ccid.'/'.$value->id ?>" class="media-box">
                                        <img src="<?php echo base_url('uploads/images/post/').$value->banner_img1; ?>" alt="No image" style="height: 238px;width: 358px;">
                                    </a>
                                    <div class="grid-item-content" style="padding-bottom: 10px;">
                                        <span class="event-date">
                                            <span class="date"><?php echo date('d', strtotime($value->created)); ?></span>
                                            <span class="month"><?php echo date('F', strtotime($value->created)); ?></span>
                                            <span class="year"><?php echo date('Y', strtotime($value->created)); ?></span>
                                        </span>
                                        <span class="meta-data"><!-- Thursday, 11:20 AM - 02:20 PM --></span>
                                        <h3 class="post-title"><a href="<?php echo base_url('Page/single_post/').$ccid.'/'.$value->id ?>"><?php echo $value->title; ?></a></h3>
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
                        <?php } }?>
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
<?php $this->load->view('js-links');?>
