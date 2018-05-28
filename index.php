<?php
 session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login | CLP</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="Monitoreo SEPP">
        <meta name="author" content="Save Technology">

        <!-- Base Css Files -->
        <link href="Admin/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="Admin/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="Admin/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="Admin/assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="Admin/assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="Admin/assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="Admin/assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="Admin/assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="Admin/assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="Admin/assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="Admin/assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="Admin/assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="Admin/assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="Admin/assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="Admin/assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="Admin/assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="Admin/assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="Admin/assets/img/apple-touch-icon-152x152.png" />
    </head>
    <body class="fixed-left login-page">
    		
	<!-- Begin page -->
	<div class="container">
	   <?php if(isset($_SESSION['LoginError'])){?>
	    <div class="alert alert-warning">
          The user or password is wrong, please chek the information and try again.
        </div>
	   <?php unset($_SESSION['LoginError']); }?>
	   
		<div class="full-content-center">
			
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<p class="text-center">
			          <a href="index.php">
					   <img src="Admin/images/common/CDV letrasfb.png" height="100px">
					  </a>
			        </p>
					
					<form role="form" action="Admin/DMU/ValidateUser.php" method="POST">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" id="login" name="login" placeholder="Usuario">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" class="form-control text-input" id="password" name="password" placeholder="Password">
						</div>
						<div class="row">
							<div class="col-sm-12">
							<button type="submit" class="btn btn-success btn-block">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<BR>
		<div>
		 
		</div>
	</div>
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="Admin/assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="Admin/assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="Admin/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="Admin/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="Admin/assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="Admin/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="Admin/assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="Admin/assets/libs/fastclick/fastclick.js"></script>
	<script src="Admin/assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="Admin/assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="Admin/assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="Admin/assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="Admin/assets/libs/nifty-modal/js/classie.js"></script>
	<script src="Admin/assets/libs/nifty-modal/js/modalEffects.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="Admin/assets/libs/prettify/prettify.js"></script>

	<script src="Admin/assets/js/init.js"></script>
	</body>
</html>