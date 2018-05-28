<?php
session_start();
if (!isset($_SESSION["IdUsuario"])) {
	    $_SESSION["Error"] = '<div id="Error">Favor de Ingresar al Sistema</div>';
        Header("Location: ../index.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test List | CLP</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
				<link href="assets/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />
		

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
    
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Nope!</button>
				<a href="../index.php" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
	  <!-- Top Bar Start -->
        <?php include('barTop.php'); ?> 
      <!-- Top Bar End -->

	  <!-- Left Sidebar Start -->
        <?php include('barLeft.php'); ?>
	  <!-- Left Sidebar End -->
		
	
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
			
			<div id="showPrevTest">
			  <div id="testContent"></div>
			</div>
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> Test List</h1>
            		
				<a class="btn btn-red-1" onclick="javascript:createTest();">Add Test</a>
				</div>
            	<!-- Page Heading End-->				

				<div class="row">
				    <div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2><strong>Tests</strong> </h2> 
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
							<ul id="demo1" class="nav nav-tabs">
									<li class="active">
										<a href="#listTest" data-toggle="tab">List</a>
									</li>
									<li class="">
										<a href="#imagesTest" data-toggle="tab">Images</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade active in" id="listTest">
										<div class="table-responsive">
								            <table id="tests" class="table">
                                                <thead>
                                                    <tr>
								            	     <th>Title</th>
				                                     <th></th>
			  	                                  </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                     <th>Title</th>
				                                     <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
								        </div>
									</div> <!-- / .tab-pane -->
									<div class="tab-pane fade" id="imagesTest">
										
										<div class="widget">
							             <div class="widget-header">
							             	<h2><strong>Tests</strong> </h2> 
							             	<div class="additional-btn">
							             		<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							             		<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							             		<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							             	</div>
							             </div>
							             <div class="widget-content">
										      <p style="margin-left:10px;font-size:15px"><b>Prueba seleccionada: <span id='tituloTest'></span></b></p>
											  <div class="form-group">
							                  <label class="col-sm-2 control-label">Tiempos</label>
							                    <div class="col-sm-10">
							                  	 <div class="row">
							                  	  <div class="col-xs-2">
							                  		<input type="text" class="form-control" id="tiempoMuestra" placeholder="Tiempo a mostrar" value="">
							                  	  </div>
							                  	  <div class="col-xs-3">
							                  		<input type="text" class="form-control" id="tiempoDescanso" placeholder="Tiempo de descanso" value="">
							                  	  </div>
										     	  <input type="hidden" name="testId" id="testId" value="0">
							                   	</div>
							                   </div>
						                      </div>
							             </div>
							            </div>
										
										<div class="table-responsive">
								            <table id="images" class="table">
                                                <thead>
                                                    <tr>
								            	   <th>Image</th>
				                                   <th>Titulo</th>
								                   <th>Descripción</th>
								            	   <th></th>
			  	                                  </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                     <th>Image</th>
				                                   <th>Titulo</th>
								                   <th>Descripción</th>
								            	   <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
								        </div>
									</div> <!-- / .tab-pane -->
								</div> <!-- / .tab-content -->
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="row">
				    <div class="col-md-12">
					    <div class="table-responsive">
							<table id="tableImagesTest" class="table">
                                <thead>
                                    <tr>
								   <th>Image</th>
				                   <th>Titulo</th>
							       <th>Descripción</th>
								   <th></th>
			  	                  </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                     <th>Image</th>
				                   <th>Titulo</th>
							       <th>Descripción</th>
								   <th></th>
                                    </tr>
                                </tfoot>
                            </table>
						</div>
					</div>
				</div>
				
		    <!-- Footer Start -->
            <?php include('footer.php'); ?>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="assets/libs/fastclick/fastclick.js"></script>
	<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="assets/libs/sortable/sortable.min.js"></script>
	<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="assets/libs/pace/pace.min.js"></script>
	<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>

	<script src="assets/js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	<script src="assets/libs/jquery-notifyjs/notify.min.js"></script>
	<script src="assets/libs/jquery-notifyjs/styles/metro/notify-metro.js"></script>
	<script src="assets/js/pages/notifications.js"></script>
	<script src="assets/js/pages/test.js"></script>
	</body>
</html>