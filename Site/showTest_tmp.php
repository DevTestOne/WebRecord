<?php
  session_start();
  include('Entities/Test.php');
  $idSchedule  = $_POST['scheduleID'];
  $test = new Test();
  $id_user  = $_SESSION["IdUsuario"];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body onload="javascript:document.Forma.stUser.focus();" style="padding:0px; margin:0px; background-color:#24262e;font-family:Arial, sans-serif">

    <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/demos/image-gallery.slider -->
    
    <!-- This demo works without jquery library. -->
    
	<link rel="stylesheet" href="assets/libs/media-recorder/main.css" />
	
	
	
	<!-- use jssor.slider.debug.js instead for debug -->
    
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

	<!--div>
      <button id="record">Start Recording</button>
      <button id="download" disabled>Download</button>
	  <video id="recorded" autoplay loop></video> 
	  <button id="play" enabled> </button>
    </div-->
	
    <input type="hidden" value="<?=$_POST['testID']?>" id="IdTest">
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
    
    <!-- #endregion Jssor Slider End -->
	
	<!-- START MEDIA RECORDER --> 
	 <div id="container">
       <!-- Preview -->
       <video id="gum" autoplay muted></video>
       <!-- Player -->
       <video id="recorded" autoplay loop hidden></video>
     
       <div>
         <!-- Commands -->
         <button id="record">Start Recording</button>
         <button hidden id="play" >Play</button>
         
       </div>
     
       <form name="fileinfo" id="fileinfo" enctype="multipart/form-data">
         <button id="send">Enviar</button>
       </form>
       <div name="output" id="output"></div>
     </div>
  
	<!-- END MEDIA RECORDER -->
	
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	
    <script type="text/javascript" src="assets/libs/jssorSlider/jssor.slider.min.js"></script>
	<script type="text/javascript" src="assets/libs/media-recorder/main.js"></script>
    <script type="text/javascript" src="assets/js/pages/showTest.js"></script>
	
</body>
</html>
