<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
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

<script type="text/javascript">
  
function valor()
{
     a = document.loginform.username.value;
     b = document.loginform.password.value;
     c = document.getElementById("log").innerHTML;
       localStorage.user=a;
       localStorage.pass=b;
       localStorage.estado=c;
}

function buscarStore() 
{ 

  r=(localStorage.estado);
  if (r=="Login") 
  {
    document.loginform.username.value=(localStorage.user); 
    document.loginform.password.value=(localStorage.pass);
    document.getElementById('loginform').submit();  
  }
  else{
    document.loginform.username.value=(localStorage.user); 
    document.loginform.password.value=(localStorage.pass);
  }
  
 }
 function login(){
                  a = document.loginform.username.value;
                  b = document.loginform.password.value;
                  c = document.getElementById("Heading1").innerHTML;
                  localStorage.user=a;
                  localStorage.pass=b;
                  localStorage.estado=c;
                  document.getElementById('loginform').submit();
 }
  
</script>
</head>
<body onload="buscarStore();">
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Login1" style="display:inline-block;width:100%;z-index:0;">
<form name="loginform" id="loginform" method="post" accept-charset="UTF-8" action="../../controllerGateway.php?controller=Cliente&method=logar" oninput="valor();">
<table id="Login1">
<tr>
   <td class="label"><label for="username">Usuario</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="field[Cliente.nomeCliente]" type="text" id="username" value="" placeholder="User" required="" oninput="valor();"></td>
</tr>
<tr>
   <td class="label"><label for="password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="field[Cliente.senhaCliente]" type="password" id="password" value="" placeholder="Password" required="" oninput="valor();"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
</table>
</form>

<a href="#" id="log" onclick="login();">
  <div id="wb_LayoutGrid8" style="background-color: white;">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:1;border-radius: 40px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);background-color:orange;">
<h1 id="Heading1">Login</h1>
</div>
</div>
</div>
</div>
</div>
</a>

<div class="col-1">
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:1;">
<h1 id="Heading1"><a href="./Criarconta.php" onclick="ShowObject('EditProfile1', 1);return;">Criar conta</a></h1>
</div>
</div>


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
<div id="wb_FontAwesomeIcon7" style="display:inline-block;width:88px;height:54px;text-align:center;z-index:3;">
<a href="index.php"><div id="FontAwesomeIcon7"><i class="fa fa-line-chart"></i></div></a>
</div>
</div>

<div class="col-2">
<div id="wb_Heading2" style="display:inline-block;width:100%;z-index:4;">
<h1 id="Heading2"><a href="#" onclick="ShowObjectWithEffect('wb_Login1', 1, '', 0);return false;">MEU KUMBÚ</a></h1>
</div>
</div>

</div>
</div>
</div>


</body>
</html>