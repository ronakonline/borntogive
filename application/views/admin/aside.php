<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
	<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
		<i class="ion-close"></i>
	</button>

	<!-- LOGO -->
	<div class="topbar-left">
		<div class="text-center">
			<!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>TravelCrunch</a>-->
			<a href="<?php echo base_url('admin'); ?>" class="logo"><img src="<?php echo base_url();?>assets/admin/images/kns_logo.png" height="74" alt="logo"></a>
		</div>
	</div>

	<div class="sidebar-inner slimscrollleft">
		<div id="sidebar-menu">
			<ul>
				<li>
					<a href="<?php echo base_url();?>admin/Dashboard" class="waves-effect">
						<i class="mdi mdi-airplay"></i>
						<span> Dashboard <span class="badge badge-pill badge-primary float-right"></span></span>
					</a>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-group"></i> <span> Categories </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Categories">Add Category</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Categories/list_categories">All Categories</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-file-chart"></i> <span> Post </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Post">Add Post</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Post/list_posts">All Post</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-group"></i> <span> Blog </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Blog">Add Blog</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Blog/list_blog">All Blogs</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-group"></i> <span> Testimonial </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Testimonial">Add Testimonial</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Testimonial/list_testimonial">All Testimonial</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-group"></i> <span> Cards </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Cards">Add Card</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Cards/list_cards">All Cards</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-areaspline"></i> <span> Winner </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Winner">Add Winner</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Winner/list_winner">All Winner</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-areaspline"></i> <span> SEO </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Seo/">Add SEO</a></li> -->
						<li><a href="<?php echo base_url(); ?>admin/Seo/add_SEO">Add SEO</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Seo/list_seo">All SEO</a></li>
					</ul>
				</li>
				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-settings"></i> <span> Site Setting </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="<?php echo base_url(); ?>admin/Sitesetting/homepage">Home Page</a></li>	
						<li><a href="<?php echo base_url(); ?>admin/Sitesetting/navbar">Nav-Bar</a></li>
						<!-- <li><a href="<?php //echo base_url(); ?>admin/Sitesetting/main_SEO">Page SEO</a></li> -->		
						<li><a href="<?php echo base_url(); ?>admin/Sitesetting">Contact</a></li>			
						<li><a href="<?php echo base_url(); ?>admin/Sitesetting/add_logo">Logo</a></li>
						<li><a href="<?php echo base_url(); ?>admin/Sitesetting/footer">Footer</a></li>
					</ul>
				</li>

			</ul>
		</div>
		<div class="clearfix"></div>
	</div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
