<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $title; ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/images/favicon.ico">
        <link href="<?php echo base_url();?>assets/admin/plugins/morris/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
     
		<!-- JavaScript -->
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

        <link href="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/plugins/dropify/css/dropify.min.css" rel="stylesheet">

        <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
    </head>

    <script>
    //Ajax for deleting Image

        function deleteimg(id) {
            var wid = id;
            if(wid) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('admin/Winner/delete_winner'); ?>',
                    data: 'id=' + wid,
                    success: function (html) {
                        location.reload();
                    }
                });

            }
        }

</script>
<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

	<?php $this->load->view('admin/aside'); ?>

	<!-- Start right Content here -->

	<div class="content-page">
		<!-- Start content -->
		<div class="content">


			<?php $this->load->view('admin/header'); ?>

			<div class="page-content-wrapper ">

				<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<div class="page-title-box">
								<div class="btn-group float-right">
									<ol class="breadcrumb hide-phone p-0 m-0">
										<li class="breadcrumb-item"><a href="#">Blog</a></li>
										<li class="breadcrumb-item"><a href="#"><?php echo $title; ?></a></li>

									</ol>
								</div>
								<h4 class="page-title"><?php echo $title; ?></h4>
							</div>
						</div>
					</div>
					<!-- end page title end breadcrumb -->
					<div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
    
                                    <?php for($i=0; $i<count($img); $i++) { ?>

                                        <form action="<?php echo base_url('admin/Winner/update_winner'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card m-b-30">
                                                            <input type="text" value="<?php echo $img[$i]->id; ?>" name="id" hidden>
                                                        
                                                            <input type="file" name="img" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url('uploads/images/winner/').$img[$i]->image; ?>" />

                                                            <div class="form-group m-t-15">
                                                                <div>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                        Update
                                                                    </button>
                                                                    <button onclick="deleteimg(<?php echo $img[$i]->id; ?>);" type="button" class="btn btn-danger waves-effect m-l-5">
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php } ?>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

				</div><!-- container -->

			</div> <!-- Page content Wrapper -->

		</div> <!-- content -->

		<?php $this->load->view('admin/footer'); ?>

	</div>
	<!-- End Right content here -->

</div>
<!-- END wrapper -->
	<!-- jQuery  -->

        <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
  
        <script src="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/dropify/js/dropify.min.js"></script>
        <!-- App js -->
        <script src="<?php echo base_url();?>assets/admin/js/app.js"></script>

        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>        
<!-- Alertify js -->
<script src="<?php echo base_url();?>assets/admin/plugins/alertify/js/alertify.js"></script>
<script src="<?php echo base_url();?>assets/admin/pages/alertify-init.js"></script>
<?php
if(isset($_SESSION['error'])){
	echo '<script>alertify.error("'.$_SESSION['error'].'"); </script>';
	unset($_SESSION['error']);
}elseif (isset($_SESSION['success'])){
	echo '<script>alertify.success("'.$_SESSION['success'].'");</script>';
	unset($_SESSION['success']);
}
?>
    </body>
</html>
