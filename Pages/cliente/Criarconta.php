
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Criar Conta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="Criarconta.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wwb14.min.js"></script>
<script>
$(document).ready(function()
{
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
});

function criada(){
   var a=document.editprofileform.fullname.value;
   alert (a +" ,conta criada com sucesso! Efectue seu login." );
}
</script>

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
</head>
<body onload="DefineComponent();">
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_EditProfile1" style="display:inline-block;width:100%;z-index:0;">

<form name="editprofileform" method="post" action="../../controllerGateway.php?controller=Cliente&method=save" accept-charset="UTF-8" 
id="editprofileform">
<table id="EditProfile1">
<tr>
   <td class="header">Criar conta</td>
</tr>

<tr>
   <td class="label"><label for="fullname">Nome</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="field[Cliente.nomeCliente]" type="text" id="fullname" value="" required=""></td>
</tr>

<tr>
   <td class="label"><label for="username">Sobrenome</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="field[Cliente.sobrenome]" type="text" id="username" value="" required=""></td>
</tr>

<tr>
   <td class="label"><label for="email">E-mail</label></td>
</tr>
<tr>
   <td class="row"><input class="input" value="" name="field[Cliente.emailCliente]" type="email" id="email" required=""></td>
</tr>

<tr>
   <td class="label"><label for="Profissão">Ocupação</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="field[Cliente.profissao]" type="text" id="Profissão"></td>
</tr>
<tr>
   <td class="label"><label for="Password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="field[Cliente.senhaCliente]" type="Password" id="Password" value=""  required=""></td>
</tr>

<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="" value="Criar Conta" id="update" 
      onclick="criada();"></td>
</tr>
</table>
</form>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon7" style="display:inline-block;width:88px;height:54px;text-align:center;z-index:1;">
<a href="index.php"><div id="FontAwesomeIcon7"><i class="fa fa-line-chart"></i></div></a>
</div>
</div>
<div class="col-2">
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:2;">
<h1 id="Heading1"><a href="#" onclick="ShowObject('Login1', 1);return ;">Meu Kumbú</a></h1>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_Heading2" style="display:inline-block;width:100%;z-index:3;">
<h1 id="Heading2"><a href="./login.php" onclick="ShowObject('Login1', 1);return;">Já tenho conta!</a></h1>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Text1">
<span style="color:#000000;">Copyright © 2018.&nbsp; All Rights Reserved</span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>