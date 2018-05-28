<?php
  include('Entities/Image.php');
  $idImage = $_GET['id'];
  $updImage = new Image();
  $updImage->getImage($idImage);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Image | Confia</title>   
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
                <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/summernote/summernote.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />
        
		<!-- Puploap CSS -->
		<link rel="stylesheet" href="assets/libs/plupload/jquery.ui.plupload.css">
        <link rel="stylesheet" href="assets/libs/plupload/jquery.plupload.queue.css">
		
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
        		
	<!-- Begin page -->
	<div id="wrapper">
				   	
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
				<!-- Page Heading Start -->
				<div class="page-heading">
                  <h1><i class='fa fa-user'></i> Update Image</h1>
            	</div>
            	<!-- Page Heading End-->	
					
				<div class="widget">
					<div class="widget-header transparent">
						<h2><strong>Please</strong> Fill all the Information</h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<div class="message"></div>

						<img src="testImages/<?=$updImage->Nombre?>" style="width:256;height:256px;">
						
						<form class="form-horizontal" role="form">
						  <input type="hidden" name="nombreAnterior" id="nombreAnterior" value="<?=$updImage->Nombre?>">
						  <input type="hidden" name="nombre" id="nombre">
						  <input type="hidden" name="idImage" id="idImage" value="<?=$idImage?>">
						  <div class="form-group">
							<label for="input-text-disabled" class="col-sm-2 control-label">Titulo</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="titulo" placeholder="Titulo" value="<?=$updImage->Titulo?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="input-text-disabled" class="col-sm-2 control-label">Descripcion</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="descripcion" placeholder="Descripcion" value="<?=$updImage->Descripcion?>">
							</div>
						  </div>
						  <div id="uploadImage"></div>
						  <button type="button" class="btn btn-default" onclick="javascript:updateImageInfo();">Save</button>
						  
						</form>
						<div class="message"></div>
					</div>
					
				</div>
				<!-- End of your awesome content -->
			
			<!-- Footer Start -->
            <?php include('footer.php');?>
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
    
	<!-- Pupload files js -->
	<script src="assets/libs/plupload/plupload.full.js"></script>
    <script src="assets/libs/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
	
	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>
     
	<script src="assets/js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-inputmask/inputmask.js"></script>
	<script src="assets/libs/summernote/summernote.js"></script>
	<script src="assets/js/pages/forms.js"></script>
	<script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	<script src="assets/js/pages/updimage.js"></script>
	</body>
</html>