
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="index.html" class="default-logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo"></a>
                    <a href="index.html" class="default-retina-logo"><img src="<?php echo base_url(); ?>assets/images/logo@2x.png" alt="Logo" width="199" height="30"></a>
                    <a href="index.html" class="sticky-logo"><img src="<?php echo base_url(); ?>assets/images/sticky-logo.png" alt="Logo"></a>
                    <a href="index.html" class="sticky-retina-logo"><img src="<?php echo base_url(); ?>assets/images/sticky-logo@2x.png" alt="Logo" width="199" height="30"></a>
                </div>
             	<a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- <div class="header-info-col"><i class="fa fa-phone"></i> 1800-9090-8089</div> -->
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <?php
						foreach ($category as $cat){ ?>
							<li><a href="<?php echo base_url('Page/list_post/').$cat->id;?>"><?php echo $cat->name; ?></a></li>
					<?php } ?>
                    <li><a href="<?php echo base_url();?>Winner">winners</a></li>
                    <li><a href="<?php echo base_url();?>Blog">blog</a></li>
                    <li><a href="<?php echo base_url();?>About">About</a></li>
                    
              	</ul>
            </div>
        </header>
    </div>
