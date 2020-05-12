<!DOCTYPE html>
<html>
    <head>
		<?php $this->load->view('admin/css-links') ?>
		<!-- Dropzone css -->
        <link href="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/admin/plugins/dropify/css/dropify.min.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.css" rel="stylesheet" />
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
										<li class="breadcrumb-item"><a href="#">post</a></li>
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
									<div class="col-md-12 col-lg-12">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                
                                                <!-- <h4 class="mt-0 header-title">Justify Tabs</h4>
                                                <p class="text-muted m-b-30 font-14">Use the tab JavaScript plugin—include
                                                    it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                                    file—to extend our navigational tabs and pills to create tabbable panes
                                                    of local content, even via dropdown menus.</p> -->
                
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-pills nav-justified" role="tablist">
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">General</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">Get</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#itinerary" role="tab">Help</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#details" role="tab">Details</a>
                                                    </li>

                                                    <!-- <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">FAQ</a>
                                                    </li>

                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Gallery</a>
                                                    </li> -->
                                                </ul>
                
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="<?php echo base_url('admin/Post')?>/add_post" method="post" enctype="multipart/form-data">
                                                        		<div class="form-group">
																	<label>Title</label>
																	<div>
																		<input type="text" class="form-control" placeholder="Enter Title" name="title" required/>
																	</div>
																</div>
																
																<div class="form-group">
																	<label>Category</label>
																	<select class="form-control" name="category" id="parentname">
																		<?php 
																			foreach ($post as $category) {
																				echo "<option value='$category->id'>$category->name</option>";
																			}
																		 ?>
																	</select>                                                		
																</div>
				                                                <div class="form-group ">
																	<label for="example-search-input" class="">Banner Image</label>
																	
																	<div class="input-group mt-2">
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" name="bannerimg1"  id="src" required>
																			<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																		</div>
																	</div>
																</div>
																
																	<div class="form-group row">
																		<label for="example-search-input" class="col-sm-2 col-form-label"></label>
																		<div class="col-md-10 ">
																			<div class="input-group mt-2">
																				<img id="target" height="200" width="250" style="display: none">
																			</div>
																		</div>
																	</div>
																<div class="form-group">
																	<label>You Will</label>
																	<div>
																		<textarea class="summernote" name="youwill">Hello Summernote</textarea>
																	</div>
																</div>

				                                                <!-- <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form> -->
                                                        </p>
                                                    </div><!-- General -->


                                                    <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="Tour/insert_overview" method="post">
                                                        		<div class="form-group">
																	<label>What you will get</label>
																	<div>
																		<textarea class="summernote" name="youget" required>Hello Summernote</textarea>
																	</div>
																</div>
				                                                
				                                                <div class="form-group ">
																	<label for="example-search-input" class="">Image</label>
																	
																	<div class="input-group mt-2">
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" name="bannerimg2"  id="src2" required>
																			<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																		</div>
																	</div>
																</div>
																	<div class="form-group row">
																		<label for="example-search-input" class="col-sm-2 col-form-label"></label>
																		<div class="col-md-10 ">
																			<div class="input-group mt-2">
																				<img id="target2" height="200" width="250" style="display: none">
																			</div>
																		</div>
																	</div>
				                                                <!-- <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form> -->
                                                        </p>
                                                    </div><!-- Get -->


                                                    <div class="tab-pane p-3" id="itinerary" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<form action="Tour/insert_itinerary" method="post">
                                                        		
                                                        		<div class="form-group">
																	<label>Who you will Help</label>
																	<div>
																		<textarea class="summernote" name="whohelp" required>Hello Summernote</textarea>
																	</div>
																</div>
                                                        		
				                                                <div class="form-group ">
																	<label for="example-search-input" class="">Image</label>
																	
																	<div class="input-group mt-2">
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" name="bannerimg3"  id="src3" required>
																			<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
																		</div>
																	</div>
																</div>
																	<div class="form-group row">
																		<label for="example-search-input" class="col-sm-2 col-form-label"></label>
																		<div class="col-md-10 ">
																			<div class="input-group mt-2">
																				<img id="target3" height="200" width="250" style="display: none">
																			</div>
																		</div>
																	</div>
				                                                <!-- <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>

			                                            	</form> -->
                                                        </p>
                                                    </div><!-- Help -->
                                                    

                                                    <div class="tab-pane p-3" id="details" role="tabpanel">
                                                        <p class="font-14 mb-0">
                                                        	<!-- <form action="Tour/insert_details" method="post"> -->

				                                                <div class="row">
									                                <div class="col-12">
									                                    <div class=" m-b-30">
								                                            <h4 class="mt-0 header-title">Details</h4>
								                                            <!-- <p class="text-muted m-b-30 font-14">Super simple wysiwyg editor on bootstrap</p> -->
								            
								                                            <textarea class="summernote" name="details" required>Hello Summernote</textarea>
									                                    </div>
									                                </div> <!-- end col -->
									                            </div> <!-- end row -->
				                                                <div class="form-group">
				                                                	<button type="submit" class="btn btn-primary">Submit</button>
				                                                </div>
			                                            	</form>
                                                        </p>
                                                    </div><!-- Details -->

                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
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

<!-- Dropzone js -->
		<?php $this->load->view('admin/js-links') ?>
		<script src="<?php echo base_url();?>assets/admin/plugins/dropzone/dist/dropzone.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/dropify/js/dropify.min.js"></script>
        <!--Summernote js-->
        <script src="<?php echo base_url();?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
		
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
        <script type="text/javascript">
        	jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 300,                 
                    minHeight: null,             
                    maxHeight: null,             
                    focus: true                 
                });

            });
        </script>

<script>

	function showImage(src,target) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target.src = this.result; };

		src.addEventListener("change",function() {
			// fill fr with image data
			fr.readAsDataURL(src.files[0]);
			target.style.display="block";
		});
	}

	var src = document.getElementById("src");
	var target = document.getElementById("target");
	showImage(src,target);
	var src2 = document.getElementById("src2");
	var target2 = document.getElementById("target2");
	showImage(src2,target2);
	var src3 = document.getElementById("src3");
	var target3 = document.getElementById("target3");
	showImage(src3,target3);


	// $(document).ready(function(){
	// 	$('#parent').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: 'Tour/getdestinationsgeneral',
	// 				data: 'pid=' + pid,
	// 				success: function (html) {
	// 					$('#destination').html(html);

	// 				}
	// 			});
	// 		}
	// 	});
	// 	$('#destination1').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: 'Tour/gettours',
	// 				data: 'pid=' + pid,
	// 				success: function (html) {
	// 					$('#tour1').html(html);

	// 				}
	// 			});
	// 		}
	// 	});
	// 	$('#destination2').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: 'Tour/gettours',
	// 				data: 'pid=' + pid,
	// 				success: function (html) {
	// 					$('#tour2').html(html);

	// 				}
	// 			});
	// 		}
	// 	});
	// 	$('#destination3').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: 'Tour/gettours',
	// 				data: 'pid=' + pid,
	// 				success: function (html) {
	// 					$('#tour3').html(html);

	// 				}
	// 			});
	// 		}
	// 	});
	// 	$('#destination4').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: 'Tour/gettours',
	// 				data: 'pid=' + pid,
	// 				success: function (html) {
	// 					$('#tour4').html(html);

	// 				}
	// 			});
	// 		}
	// 	});
	// 	$('#destination5').on('change', function(){
	// 		var pid = $(this).val();
	// 		if(pid) {
	// 			$.ajax({
	// 				type: 'POST',
	// 				url: 'Tour/gettours',
	// 				data: 'pid=' + pid,
	// 				success: function (html) {
	// 					$('#tour5').html(html);

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
