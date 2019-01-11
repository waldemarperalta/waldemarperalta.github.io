<?php
session_start();
require '../../Apllication/core/FacadePrincipal.php';
$novo = $facadePrincipal->registrosController()->getDTO()->findRegistrosNovo();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="novoregistro.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="scrollspy.min.js"></script>
<script src="wwb14.min.js"></script>

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

<script type="text/javascript">
function registrar(){
    a = document.getElementById('editboxName').value;
    b = document.getElementById('editboxEmail').value;
    c = document.getElementById('Editbox2').value;
   if(a==""){alert ("Preencha os campos obrigatórios");}
   else{
    document.getElementById('contact').submit();
    alert (a +" ,Registrado com sucesso!" );
   }
}
</script>

<script type="text/javascript">
            function buscarRegistro(id) {
                ajax = new XMLHttpRequest();
                ajax.open("GET","../../controllerGateway.php?controller=Registros&method=buscarecente&field[Registros.comprou]="+ id);
                ajax.send();
               
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4 && ajax.status == 200) {
                        dados = ajax.responseText.toString().split("-%-");
                        
                     document.getElementById('editboxName').value =dados[0];
                     document.getElementById('editboxEmail').value = dados[1];
                     document.getElementById('Editbox2').value =     dados[5];
                     document.getElementById('editboxMessage').innerHTML = dados[6];   
                    }
                } 
            }
</script>

    <script>
        $(document).ready(function() {
            var cor = ["send","cancelar","voltar"];
            for (i = 0; i <= 4; i++) {
                document.getElementById(cor[i]).style.backgroundColor = '<?php echo "#2b2b2b"; ?>';
            }
        });
    </script>

</head>
<body data-spy="scroll" style="background-color: white;">

<div id="wb_contact">
<form name="Registros" method="post" action="../../controllerGateway.php?controller=Registros&method=save" accept-charset="UTF-8" id="contact">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_FontAwesomeIcon7" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:0;">
<div id="FontAwesomeIcon7"><i class="fa fa-save"></i></div>
</div>
<label for="Label1" id="Label2" style="display:block;width:100%;z-index:1;">Recentes</label>
<select id="Editbox1" style="display:block;width: 100%;height:34px;z-index:2;" name="Recentes" value="" spellcheck="false" oninput="buscarRegistro(document.getElementById('Editbox1').value);">
    
    <option>Selecionar recentes</option>
    <?php foreach ($novo as $x => $recentes): ?>  
    <option><?php echo $recentes->comprou;?></option>
    <?php endforeach; ?>
</select>
<label for="editboxName" id="Label1" style="display:block;width:100%;z-index:4;">Comprou?</label>
<input type="text" id="editboxName" style="display:block;width: 100%;height:34px;z-index:5;" name="field[Registros.comprou]" value="" spellcheck="false" required/>
<label for="editboxEmail" id="Label8" style="display:block;width:100%;z-index:6;">Quanto custou?</label>
<input type="text" id="editboxEmail" style="display:block;width: 100%;height:34px;z-index:7;" name="field[Registros.quanto]" value="" spellcheck="false" required/>
<label for="Editbox7" id="Label10" style="display:block;width:100%;z-index:8;">Quando comprou?</label>

<div id="data" style="display: inline;padding-left:0px;">

<select type="date" id="Editbox7" style="display:inline;width:35%;height:34px;z-index:9;" name="field[Registros.dia]" value="" 
spellcheck="false" required/>
<option id="op1" value="<?php echo date('d');?>"><?php echo date('d');?></option>
<?php for ($i= 1; $i <= 31; $i++) {echo "<option value='$i'>".$i."</option>";}?>
</select>

<select id="Editbox8" style="display:inline;width:30%;height:34px;z-index:9;" name="field[Registros.mes]">
    <option id="op2" value="<?php echo date('m');?>"><?php echo date('m');?> </option>
    <?php for ($i= 1; $i <= 12; $i++) {echo "<option value='$i'>".$i."</option>";}?>
</select>

<select id="Editbox9" style="display:inline;width:35%;height:34px;z-index:9;" name="field[Registros.ano]">
    <?php for ($i= date('y'); $i > date('y')-4; $i--) {echo "<option id='op3' value='$i'>".$i."</option>";}?>
</select>

</div>

<label for="editboxMessage" id="Label9" style="display:block;width:100%;z-index:10;">Descrição(opcional)</label>
<textarea name="field[Registros.descricao]" id="editboxMessage" style="display:block;width: 100%;;height:100px;z-index:11;" rows="4" cols="132" spellcheck="false"></textarea>
<label for="" id="Label3" style="display:block;width:100%;z-index:12;">Categoria:</label>
<select type="text" id="Editbox2" style="display:block;width: 100%;height:34px;z-index:13;" name="field[Registros.tipo]" value="" spellcheck="false">
    <option id="cat" value="">Categorias</option>
    <?php
        $tipo = array("Alimentacao","Saude","Transporte","Vestuario","Comunicacao","Outros");
        for ($i= 0; $i <= 6; $i++) {
        echo "<option value='$tipo[$i]'>" . $tipo[$i] . "</option>";
        }
    ?>
</select>
<input type="hidden" id="Editbox2" style="display:block;width: 100%;height:34px;z-index:13;" name="field[Registros.idCliente]" 
value="<?php echo $user = $_SESSION['idClienteLoged']; ?>" spellcheck="false">

</div>
</div>
</div>
</form>
</div>

<div id="send" style="left:auto;right:16px;top:auto;bottom:150px;">
<div id="wb_up-arrow" style="text-align:center;z-index:0;">
<a href="#" onclick="registrar();return false;">
  <i class="but fa-save"></i>
</a>
</div>
</div>

<div id="cancelar" style="left:auto;right:16px;top:auto;bottom:84px;">
<div id="wb_up-arrow" style="text-align:center;z-index:0;">
<a href="pagecliente.php" onclick="document.getElementById('contact').reset();return false;">
<i class="but fa-trash"></i>
</a>
</div>
</div>

<div id="voltar" style="left:auto;right:16px;top:auto;bottom:16px;">
<div id="wb_up-arrow" style="text-align:center;z-index:0;">
<a href="pagecliente.php">
<i class="but fa-arrow-left"></i>
</a>
</div>
</div>

</body>
</html> 