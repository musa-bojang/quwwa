<?php session_start();?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>PKPS | Dashboard Majikan</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
		<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-multi-select/css/multi-select-metro.css" />
	<link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="dashboard.html">
				PKPS
				<!--<img src="assets/img/logo.png" alt="logo" />-->
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					
					<!-- BEGIN INBOX DROPDOWN -->
					
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						
						
						<span class="username"><?php echo $_SESSION["name"]; ?></span>
						
						
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox <span class="badge badge-important">3</span></a></li>
							<li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">8</span></a></li>
							<li class="divider"></li>
							
							<li><a href="model/logout.php"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
						<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active">
					<a href="dashboard.php">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				
				
				
				<li >
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Majikan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<?php 
							if(isset($_SESSION["role"])) {
								if($_SESSION["role"]==="admin")
								{
							?>
						<li >
							<a href="senarai_syarikat.php">
							Senarai Majikan</a>
						</li>
						<li >
							<a href="company_profile.php">
							Maklumat Admin</a>
						</li>
						<?php 
								}
								else
								{
									?>
									<li >
							<a href="company_profile.php">
							Maklumat Majikan</a>
						</li>
						<li >
							<a href="login_soft.html">
							Dokumen Sokongan</a>
						</li>
						<li >
							<a href="muatnaik_dokumen.php">
							Muatnaik Dokumen Sokongan</a>
						</li>
									
									<?php
							}
							}
							?>
						
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-th"></i>
					<span class="title">Data Tables</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					<li>
						<a href="survey_data.html">
						Survey Data</a>
					</li>
						<li >
							<a href="table_basic.html">
							Basic Tables</a>
						</li>
						<li >
							<a href="table_responsive.html">
							Responsive Tables</a>
						</li>
						<li >
							<a href="table_managed.html">
							Managed Tables</a>
						</li>
						<li >
							<a href="table_editable.html">
							Editable Tables</a>
						</li>
						<li >
							<a href="table_advanced.html">
							Advanced Tables</a>
						</li>
					</ul>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-grey" data-style="grey"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label>
									<span>Layout</span>
									<select class="layout-option m-wrap small">
										<option value="fluid" selected>Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</label>
								<label>
									<span>Header</span>
									<select class="header-option m-wrap small">
										<option value="fixed" selected>Fixed</option>
										<option value="default">Default</option>
									</select>
								</label>
								<label>
									<span>Sidebar</span>
									<select class="sidebar-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
								<label>
									<span>Footer</span>
									<select class="footer-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Muat Naik Dokumen Sokongan 
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Profil Majikan</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Muatnaik Dokumen</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Senarai Muatnaik Dokumen</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									
									<div class="control-group">
										<label class="control-label">Salinan SSM Syarikat(Borang 9/24/49)</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" />
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Salinan Bil Utiliti (Jika Bukan Syarikat)</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" />
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Salinan Kad Pengenalan (Semua Ahli Pengarah)</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" />
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Gambar Premis (Papan Tanda/Bangunan)</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
												</div>
												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												<div>
													<span class="btn btn-file"><span class="fileupload-new">Select image</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" /></span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Gambar Tempat Kerja (Skop Pekerjaan/Mesin)</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
												</div>
												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												<div>
													<span class="btn btn-file"><span class="fileupload-new">Select image</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" /></span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Gambar Penginapan (Termasuk Katil dan Dapur)</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
												</div>
												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												<div>
													<span class="btn btn-file"><span class="fileupload-new">Select image</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" /></span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
											<div class="well">
							<h3>Demo Notes</h3>
							<ul>
								<li>Dokumen dan gambar mestilah berwarna</li>
								<li>Dokumen dan gambar mestilah terang dan jelas</li>
								<li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
								<li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed.</li>
								
							</ul>
						</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE --> 
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2020 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<!-- BEGIN:File Upload Plugin JS files-->
	<script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
	<!-- The File Upload file processing plugin -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
	<!-- The File Upload user interface plugin -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
	<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
	<!--[if gte IE 8]><script src="assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
	<!-- END:File Upload Plugin JS files-->
	<!-- END PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/form-fileupload.js"></script>
	
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
	<script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
	<script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
	<script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
	<script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/form-components.js"></script>
	
	
	<script>
		jQuery(document).ready(function() {
		// initiate layout and plugins
		App.init();
		FormFileUpload.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>