<!DOCTYPE html>
<html>
    <head>
		<?php $this->load->view('admin/css-links') ?>
	</head>


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
										<li class="breadcrumb-item"><a href="#">Site Setting</a></li>
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
									<form method="post" action="update_seo" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col col-form-label">Page</label>
											<select class="form-control" name="page" id="page">
												<option value="1">Yes</option>
												<option value="1">No</option>
												<!-- <option selected disabled>Select Page</option> -->
												<!-- <?php //foreach ($seo as $value) {?>
													<option value="<?php //echo $value->page ?>"><?php //echo $value->name ?></option>
												<?php //} ?> -->
											</select>
										</div>
										<div class="form-group">
											<label for="example-text-input" class="col col-form-label">Meta Title</label>
											<input class="form-control" type="text" name="tags" id="tags">
										</div>
										<div class="form-group">
											<label for="example-text-input" class="col col-form-label">Meta Description</label>
											<textarea rows="5" class="form-control" name="metatags" id="metatags"></textarea>
										</div>
										<div class="form-group">
											<label class="col col-form-label">KeyWords</label>
											<textarea rows="5" class="form-control" name="keywords" id="keywords"></textarea>
										</div>
										<div class="form-group">
											<label for="example-text-input" class="col col-form-label">Indexing</label>
											<select class="form-control" name="indexing" id="indexing">
												
											</select>
										</div>

										<div class="form-group">
											<label for="example-text-input" class="col col-form-label">Follow</label>
											<select class="form-control" name="follow" id="follow">
												
											</select>
										</div>

										<div class="text-center">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>
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


<?php $this->load->view('admin/js-links') ?>

<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('#page').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: '<?php //echo base_url('admin/Sitesetting');?>/getseotags',
	// 				data: 'page=' + pid,
	// 				success: function (data) {
	// 					$('#tags').val(data);
	// 					//console.log($('#tags'));
	// 				}
	// 			});
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: '<?php//echo base_url('admin/Sitesetting');?>/getseometatags',
	// 				data: 'page=' + pid,
	// 				success: function (html) {
	// 					$('#metatags').html(html);
	// 				}
	// 			});
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: '<?php //echo base_url('admin/Sitesetting');?>/getseokeywords',
	// 				data: 'page=' + pid,
	// 				success: function (html) {
	// 					$('#keywords').html(html);
	// 				}
	// 			});
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: '<?php //echo base_url('admin/Sitesetting');?>/getseoindexing',
	// 				data: 'page=' + pid,
	// 				success: function (html) {
	// 					$('#indexing').html(html);
	// 				}
	// 			});
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: '<?php //echo base_url('admin/Sitesetting');?>/getseofollow',
	// 				data: 'page=' + pid,
	// 				success: function (html) {
	// 					$('#follow').html(html);
	// 				}
	// 			});
	// 		}
	// 	});
	// });
</script>
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
