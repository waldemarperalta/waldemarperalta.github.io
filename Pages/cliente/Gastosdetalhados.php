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
<title>Relatórios mensais</title>


    <script src="assets/js/chart-master/Chart.js"></script>
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" /> 

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="Gastosdetalhados.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="scrollspy.min.js"></script>


</head>
<body data-spy="scroll" >
<div id="wb_spaceGrid" style="display:none;left:auto;right:16px;top:auto;bottom:0px;position: fixed">
<input type="text" placeholder="Pesquisar Registro" name="" value="" style="font-size:18px;height:40%;width:70%;border-radius:8px;text-align: center;border:2px solid #86e5ed;margin: 20px 0px 20px 0px;">
</div>
<div id="line"></div>
<div class="row mt">

        <div class="darkblue-panel " id="body" style="padding-top:20px;padding-bottom:20px;">
                <div class="darkblue-header" style="color: red;">
                  <h5>Este ano</h5>
                  <p class="mt"><b><?php echo $totalAno; ?>.00 kz</b></p>
                </div>
                <div class="chart mt">
                  <div class="sparkline" data-type="line" data-resize="true" data-height="100" data-width="90%" data-line-width="1" data-line-color="gray" data-spot-color="red" data-fill-color="" data-highlight-line-color="red" data-spot-radius="4" data-data="[0,344,2567,3833,526,996,564,123,890,464,655,1453,0]">
                  </div>
                </div>
                
              </div>
</div>

<div id="wb_facts" style="background-color: white;display:;padding-top: 20px;">
    <div id="facts">
        <div class="row">
            <div class="col-1">
                <div class="steps" style="padding: 10px;">
                    <?php
                    $tipo = array("janeiro","Fevereiro","Março","Abril","Maio","Junho");
                    $rela = array("2023","3400","6500","2000","5300","3045");
                    for ($i= 0; $i <= 5; $i++) {
                        echo "<Label><i class='fa fa-calendar-plus-o'></i>   " . $tipo[$i] ."-->". $rela[$i] ."</Label>";
                    }
                    ?>
                    <Label> <h4>Total: <?php echo $totalMensal;?> </h4> </Label>

                </div>

            </div>
        </div>
    </div>
</div>



<div id="novo" style="left:auto;right:16px;top:auto;bottom:84px;">
<div id="wb_up-arrow" style="text-align:center;z-index:0;">
<a href="" onclick="document.getElementById('wb_spaceGrid').style.display='';return false">
<i class="but fa-search"></i>
</a>
</div>
</div>

<?php include "menu.php";?>


<!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.sparkline.js"></script>

    <script src="assets/js/sparkline-chart.js"></script>

</body>
</html>