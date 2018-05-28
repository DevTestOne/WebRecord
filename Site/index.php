<?php
    session_start();
	$id_user  = $_SESSION["IdUsuario"];
?>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Test List | Confia</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/iconmoon/style.css" rel="stylesheet" />

        <!-- LESS FILE <link href="assets/css/style.less" rel="stylesheet/less" type="text/css" /> -->
                <!-- Extra CSS Libraries Start -->
                <link href="assets/libs/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-magnific/magnific-popup.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		 <!-- Extra CSS Libraries Start -->
         <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
         <!-- Extra CSS Libraries End -->

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
<body class="">
   <div id="wrapper">    <header>
            
    
	<section class="main-slider" data-stellar-background-ratio="0.5" style="background-image: url(images/headers/main_header.jpg)">
	<div class="slider-caption">
		
		</div>
</section>    </header>
    <section class="hero-banner">
        <div class="container text-center">
            
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1 class="text-primary">El siguiente listado muestra los test psicológicos asignados a usted</h1>
                    <h2 class="text-default">Por favor revise la fecha limite de aplicación!</h2><hr>
                    <div class="row text-justify">
                        <div class="col-sm-12">
                           <form class='form-horizontal' action="#" method="POST" role='form'>							
								<input type="hidden" name="userID" id="userID" value="<?php echo $id_user ?>">
								<div class="table-responsive">
								  <table id="scheduledTest" class="table">
                                      <thead>
                                          <tr>
										   <th>Test</th>
				                	       <th>Fecha Limite</th>
										   <th>Estatus</th>
										   <th></th>
			  	                	      </tr>
                                      </thead>
                                     
                                  </table>
								</div>
							   </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#"> 
                            <img src="assets/img/logo.png" alt="Coco Frontend Template" class="footer-logo"> 
                        </a>
                        <h5>Designing your future...</h5>
                        
                    </div>


                    <div class="col-sm-4">
                        <h4>CONTACT US</h4>
                        <ul class="list-unstyled company-info">
                            <li><i class="icon-map-marker"></i> 1375 Richmond Avenue<br>Minneapolis, MN 90017</li>
                            <li><i class="icon-phone3"></i> 1-800-666-666</li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-4 hidden-xs">
                        <h4>CONTACT US</h4>
                        <ul class="list-unstyled company-info">
                            <li><i class="icon-envelope"></i> <a href="mailto:contact@somecorporation.com">contact@somecorporation.com</a></li>
                            <li><i class="icon-alarm2"></i> Monday - Friday: <strong>8:00 am - 7:00 pm</strong><br>Saturday - Sunday: <strong>Closed</strong></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row"> 
                    <div class="col-sm-6">
                        <p>Copyright &copy; 2014 by <a href="http://www.hubancreative.com" target="_blank">HubanCreative</a></p> 
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="social-links">
                            <a href="javascript:;">
                                <i class="icon-twitter4"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="icon-facebook4"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="icon-instagram3"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="icon-vimeo3"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="icon-tumblr4"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="icon-googleplus6"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="tothetop" href="javascript:;"><i class="icon-angle-up"></i></a>
    </div>

    <script>
        var resizefunc = [];
    </script>
    <script src="assets/libs/less-js/less-1.7.5.min.js"></script>
    <script src="assets/libs/pace/pace.min.js"></script>
    <script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/libs/jquery-browser/jquery.browser.min.js"></script>
    <script src="assets/libs/fastclick/fastclick.js"></script>
    <script src="assets/libs/stellarjs/jquery.stellar.min.js"></script>
    <script src="assets/libs/jquery-appear/jquery.appear.js"></script>
    <script src="assets/js/init.js"></script>
    <!-- Page Specific JS Libraries -->
    <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/libs/jquery-magnific/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/pages/index.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	<script src="assets/js/pages/testList.js"></script>
    <!-- Page Specific JS Libraries End -->
    </body>
</html>