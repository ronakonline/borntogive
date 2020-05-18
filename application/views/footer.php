 <!-- Site Footer -->
 <div class="site-footer parallax parallax3" style="background-image:url(<?php echo base_url();?>assets/images/parallax3.jpg)">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget">
                    	<h4 class="widgettitle">About Born to Give</h4>
                        <p><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></p>
                        <p><?php echo $footer[0]->about; ?></p>
                        <ul class="social-icons-rounded social-icons-colored">
                            <li class="facebook"><a href="<?php echo $footer[0]->facebook; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="<?php echo $footer[0]->twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="instagram"><a href="<?php echo $footer[0]->instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget widget_links">
                    	<h4 class="widgettitle">Quick Links</h4>
                        <ul>
                        	<li><a href="#">Home</a></li>
                        	<li><a href="#">Winners</a></li>
                        	<li><a href="#">Blogs</a></li>
                        	<li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
				<div class="col-md-4 col-sm-4">
					<div class="widget footer_widget widget_links">
						<h4 class="widgettitle">Top Categories</h4>
						<ul>
							<?php foreach ($category as $item) { ?>
							<li><a href="<?php echo base_url('Page/').$item->id; ?>"><?php echo $item->name; ?></a></li>
							<?php } ?>

						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6">
                	<div class="copyrights-col-left">
                    	<p>&copy; 2020 Born to Give. All Rights Reserved</p>
                    </div>
                </div>
            	<div class="col-md-6 col-sm-6"></div>

           	</div>
      	</div>
  	</div>
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
