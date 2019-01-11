<?php
session_start();
require '../../Apllication/core/FacadePrincipal.php';
$registro = $facadePrincipal->registrosController()->getDTO()->findRegistros();
$anual  = $facadePrincipal->registrosController()->getDTO()->relatorioAnual();
$diario = $facadePrincipal->registrosController()->getDTO()->relatorioDia();
$mensal = $facadePrincipal->registrosController()->getDTO()->relatorioMensal();
$registromensal = $facadePrincipal->registrosController()->getDTO()->Mensal();
 $loged=$_SESSION['idClienteLoged'];

 $totalAno = 0; 
 $totalDia = 0; 
 $totalMensal=0;

 foreach ($anual as $x => $ano): 
 $totalAno +=$ano->quanto;
 endforeach; 

foreach ($mensal as $x => $mes): 
 $totalMensal +=$mes->quanto;
 endforeach; 

 foreach ($diario as $x => $dia): 
 $totalDia +=$dia->quanto;
 endforeach; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<script src="assets/js/chart-master/Chart.js"></script>

<link href="assets/index.css" rel="stylesheet">
<script src="assets/jquery-1.12.4.min.js"></script>
<script src="assets/wwb14.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="pagecliente.css" rel="stylesheet">
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
   $("a[href*='#LayoutGrid2']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid2').offset().top }, 600, 'linear');
   });
   $("a[href*='#spaceGrid']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_spaceGrid').offset().top }, 600, 'linear');
   });
   $("a[href*='#facts']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_facts').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#LayoutGrid1']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid1').offset().top }, 600, 'linear');
   });
   $("a[href*='#FlexContainer2']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#FlexContainer2').offset().top }, 600, 'easeOutSine');
   });


   $("#Progressbar4").progressbar(
   {   
      valuemax:20000,
      value:<?php echo $totalDia?>,
      change: function() 
      {
         $("#Progressbar4-label").text($(this).progressbar('value') + '%');
      }
   });


   $("#Progressbar5").progressbar(
   {
      value: 80,
      change: function() 
      {
         $("#Progressbar5-label").text($(this).progressbar('value') + '%');
      }
   });


   $("#Progressbar6").progressbar(
   {
      value:<?php echo $totalAno?>,
      change: function() 
      {
         $("#Progressbar6-label").text($(this).progressbar('value') + '%');
      }
   });


   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
   $("a[href*='#footer']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_footer').offset().top }, 600, 'easeOutSine');
   });
});
</script>

<script>
$(document).ready(function()
{
  var totalDia= 10000;
  var hoje=<?php echo $totalDia; ?>;
  if (hoje>totalDia) {
    document.getElementById("totalDia").style.color="red";
  }

   var $progressbars = $('.ui-progressbar');
   
   $progressbars.each(function() 
   {
     var $obj = $(this);
     $obj.data('value', $obj.progressbar('option', 'value'));
     $obj.data('done', false);
     $obj.progressbar('option', 'value', 0);
   });
   $(window).bind('scroll', function() 
   {
      $progressbars.each(function() 
      {
         var $obj = $(this);
         if (!$obj.data('done') && $(window).scrollTop() + $(window).height() >= $obj.offset().top) 
         {
            $obj.data('done', true);
            $obj.animate({scroll: 1}, 
            { 
               duration: 3000, 
               step: function(now) 
               {
                  var $obj = $(this);
                  var val = Math.round($obj.data('value') * now);
                  $obj.progressbar('option', 'value', val);
               }
            });
         }
      });
   }).triggerHandler('scroll');
});
</script>
<script type="text/javascript">
            function buscarRegistro(id) {
                ajax = new XMLHttpRequest();
                ajax.open("GET","../../controllerGateway.php?controller=Registros&method=buscar&field[Registros.id]="+ id);
                ajax.send();
                ajax.onreadystatechange = function () {

                    if (ajax.readyState == 4 && ajax.status == 200) {
                        dados = ajax.responseText.toString().split("-%-");
                   document.getElementById('comprou').innerHTML = "Comprou: "+ dados[0];
                    document.getElementById('quanto').innerHTML = "Gastou: " +dados[1];
                    document.getElementById('dia').innerHTML    = "Dia: " +dados[2];
                      document.getElementById('categoria').innerHTML = "Categoria: " +dados[3];
                 document.getElementById('descricao').innerHTML = "Descrição: " +dados[4]; 
                     document.getElementById('idref').href      = "editarregistro.php?registro="+dados[5]; 
                    }
                } 
            }
</script>

</head>
<body  data-spy="scroll" id="body" style="background-color:;" onload="cor();ShowObject('modal', 0);return false;">

<div id="modal" >
  <div class="ver" style="padding-left: 20px;">
        <label id="comprou">   </label>
        <label id="quanto">    </label>
        <label id="dia">    </label>
        <label id="categoria">      </label>
        <label id="descricao"> </label>
  </div>

<div style="background-color:;width: 96%;display:-webkit-inline-flex;border-top: 1px solid black;margin: 2%">
<div id="bot1" style="border-right:1px solid black;width: 50%;height: 60px;">
<div id="wb_up-arrow" style="text-align:center;z-index:0;">  
<a href="" id="idref"><i class="but fa-edit"></i></a>
</div>
</div>
<div id="bot2" style="background-color:;width: 50%;height: auto;">
 <div id="wb_up-arrow" style="text-align:center;z-index:0;">  
<a href="#" onclick="ShowObjectWithEffect('modal', 0, 'slideup', 500);return false;">
  <div id="IconFont1">
   <i class="but fa-close"></i>
  </div>
</a>
</div>
</div>
</div>
</div>

<div class="row mt">

	<!-- apresentacao anual -->
              <div class="darkblue-panel " style="padding-top:30px;padding-bottom:30px;">
                 <div class="darkblue-header">
                  <h5>Este Mês</h5>
                  <p class="mt"><b><?php echo $totalMensal; ?>.00 kz</b></p>
                </div>
                <div class="chart mt">
                  <div class="sparkline" data-type="line" data-resize="true" data-height="100" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[0.344,667,333,526,996,564,123,890,464,655,1453,0]"></div>
                </div>
               
              </div>

	   <div class="white-panel donut-chart" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="row">
            <div class="col-sm-6 col-xs-6 goleft">
                <p id="totalDia">Hoje: <?php echo $totalDia; ?>.00 kz</p>
            </div>
        	</div>              

                <canvas id="serverstatus01" height="140" width="140" > </canvas>
                <script>
                  var doughnutData = [
                      {
                        value:<?php echo $totalDia; ?> ,
                        color:"black"
                      },
                      {
                        value :10000-<?php echo $totalDia; ?>,
                        color : "white"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                </script>

<div id="wb_facts">
<div id="facts">
<div class="row">
<div class="col-1">
  <div class="steps" style="padding: 10px;">
    <?php foreach ($registro as $x => $recentes): ?>
    <label onclick="buscarRegistro(document.getElementById('nRegistro').value='<?php $edit=$recentes->id; echo $recentes->id;?>');ShowObjectWithEffect('modal',1, 'bounce', 800);return false;">
    <input id="nRegistro" value="<?php $idat=$recentes->id; echo $recentes->id;?>" style="display:none;">
    <i class="fa fa-file-text"></i>  <?php echo $recentes->quanto;  ?>.00 kz - <?php echo $recentes->comprou;?> 
    </label>
      <?php endforeach; ?>           
      </div>
</div>
</div>
</div>
</div>

<div id="wb_footer">
<div id="footer-overlay"></div>
<div id="footer">
<div class="row">
<div class="col-2">
<div id="wb_Text5">
<a href="#wb_Text5" style="text-decoration: none;"><span >
	<strong style="color:black;text-align: center;margin-top: 5px;font-size: 25px;">Categorias</strong></span></a>
</div>
</div>
</div>
</div>
</div>
<div id="wb_facts" style="background-color: white;display:;">
<div id="facts">
<div class="row">
<div class="col-1">
  <div class="steps" style="padding:10px;">
          <?php
          $tipo = array("Alimentacao","Saude","Transporte","Vestuario","Comunicacao","Outros");
          $rela = array("2023","3400","6500","2000","5300","3045");
          for ($i= 0; $i <= 5; $i++) {
              echo "<Label><i class='fa fa-money'></i>   " . $tipo[$i] ."-->". $rela[$i] ."</Label>";
          }
          ?>
      </div>

</div>
</div>
</div>
</div>
        

      </div>

              
           
</div>
</div>

<?php include"menu.php";?>

<div id="iconapp" style="left:auto;top:16px;bottom:auto;right:16px; ">
    <div id="wb_up-arrow" style="text-align:center;z-index:0;">
        <a href="./perfilcliente.php">
            <i class="but fa-user-circle">
            </i>
        </a>
    </div>
</div>

<div id="novo" style="left:auto;right:16px;top:auto;bottom:84px;">
<div id="wb_up-arrow" style="text-align:center;z-index:0;">
<a href="./novoregistro.php">
<i class="but fa-plus"></i>
</a>
</div>
</div>

<div id="line"></div>


<!-- js placed at the end of the document so the pages load faster -->

    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="assets/js/sparkline-chart.js"></script>    
</body>
</html>