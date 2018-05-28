<?php
  session_start();
  include('Entities/Test.php');
  $idSchedule  = $_POST['scheduleID'];
  $test = new Test();
  $id_user  = $_SESSION["IdUsuario"];
  $_SESSION['scheduleID'] = $idSchedule;
  $test->getTestBySchedule($idSchedule,$id_user);
  
?>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Test <?= $test->Titulo?> | Confia</title>  
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
				
				<link rel="stylesheet" href="assets/libs/media-recorder/main.css" />
                <!-- Extra CSS Libraries End -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		 <!-- Extra CSS Libraries Start -->
         <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
		 <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
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
        
		<style>
        
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01 .p            (normal)
        .jssort01 .p:hover      (normal mouseover)
        .jssort01 .p.pav        (active)
        .jssort01 .p.pdn        (mousedown)
        */
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        
        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }
        
        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;
        }
        
    </style>
		
    </head>
<body class="" style="background:#000;">
    
    <div class="md-modal md-fade-in-scale-up" id="modal_instructions">
		<div class="md-content">
			<h3>Por favor lea detenidamente las siguientes instrucciones antes de comenzar su prueba</h3>
			<div>
				<p><?= $test->Indicaciones; ?></p>
				
				<p>
				<button onclick="index.php" class="btn btn-danger btn-lg md-close" style="width:180px">Comenzar mas tarde</button>
				<button id="record" class="btn btn-success btn-lg" style="width:150px" onclick="toggleRecording()">Comenzar..!</button>
				</p>
			</div>
		</div><!-- End div .md-content -->
	</div>
		
	<div class="md-modal md-fade-in-scale-up" id="modal_finish">
		<div class="md-content">
			<h3>Muchas gracias</h3>
			<div>
				<p>Haz finalizado correctamente la prueba, ahora por favor solo da clic en el boton "Enviar" y 
				   espere a que sea redirigido a la pagina de inicio sin cerrar su navegador</p>
				
				<p>
				<form name="fileinfo" id="fileinfo" enctype="multipart/form-data">
                    <button class="btn btn-success btn-lg" style="width:150px" id="send" onclick="addToForm()" >Enviar</button>
                </form>
					  
				</p>
			</div>
		</div><!-- End div .md-content -->
	</div>

   <div id="wrapper" style="background:#000;">    
   
   <header>
   
   </header>
    <section class="hero-banner">
        <div class="container text-center">
            
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <input type="hidden" value="<?=$_POST['testID']?>" id="IdTest">
					<input type="hidden" value="<?=$idSchedule?>" id="IdChedule">
	                <BR><BR><BR>
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 650px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 650px; overflow: hidden;" id="slides">
                            
                        </div>
                        <!-- Arrow Navigator -->
                        <!--span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span-->
                    </div>
					
					<div id="container">
                      <!-- Preview -->
                      <video id="gum" autoplay muted></video>
                      <!-- Player -->
                      <video id="recorded" autoplay loop hidden></video>
                    
                      <div>
                        <!-- Commands -->
                        <button hidden id="play" >Play</button>
                        
                      </div>
                    
                      
                      <div name="output" id="output"></div>
                    </div>
	 
                </div>
            </div>
        </div>
    </section>

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
	
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	
	<script type="text/javascript" src="assets/libs/jssorSlider/jssor.slider.min.js"></script>
	<script type="text/javascript" src="assets/libs/media-recorder/main.js"></script>
    <script type="text/javascript" src="assets/js/pages/showTest.js"></script>
	
	
    <!-- Page Specific JS Libraries End -->
    </body>
</html>