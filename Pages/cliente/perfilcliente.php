<?php
session_start();
require '../../Apllication/core/FacadePrincipal.php';
$registro = $facadePrincipal->registrosController()->getDTO()->findRegistros();

$loged=$_SESSION['idClienteLoged'];


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dicas</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="dicas.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="scrollspy.min.js"></script>
<link rel="manifest" href="../../manifest.json">

<!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon-precomposed" href="images/icon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/icon.png">
    <meta name="theme-color" content="#F77F00">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/icon.png">
    <meta name="msapplication-TileColor" content="#F77F00">
     <script>
    if (window.location.protocol != "https:" && window.location.hostname == "waldemarperalta.github.io")
        window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
    </script>
<script>
$(document).ready(function()
{
   $("a[href*='#facts']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_facts').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#LayoutGrid2']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid2').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
});
</script>
</head>
<body data-spy="scroll" style="background-color: white;">

<div id="wb_spaceGrid">
<div id="spaceGrid">
<div class="row">
<div class="col-1">
<div id="wb_spaceIcon" style="display:inline-block;width:100px;height:100px;text-align:center;z-index:0;">
<div id="spaceIcon"><i class="fa fa-user-circle"></i></div>
</div>
</div>
</div>
</div>
</div>





<?php include "menu.php";?>
</body>
</html>