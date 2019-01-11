<?php
session_start()
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="jscookmenu.min.js"></script>
<link href="font-awesome.min.css" rel="stylesheet">
<link href="produtos_02.css" rel="stylesheet">
<link href="cliente.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="affix.min.js"></script>
<script src="wwb12.min.js"></script>
<script>
$(document).ready(function()
{
   $("#wb_ResponsiveMenu1").affix({offset:{top: $("#wb_ResponsiveMenu1").offset().top}});
});
</script>
</head>
<body>
<div id="container">
<section id="Layer1">
<div id="Layer1_Container">
<div id="wb_Heading1">
<h1 id="Heading1">Perfil</h1></div>
<input type="submit" id="Button2" name="" value="Editar">
<input type="submit" id="Button3" name="" value="Sair">
<input type="submit" id="Button1" name="" value="Apagar">
<div id="wb_Heading2">
<h1 id="Heading2">Encomendas</h1></div>
<div id="wb_Form3">
<form name="Form3" method="post" action="" enctype="text/plain" id="Form3">
<label for="Button3" id="Label1">


Nome:    <?php
     
     if(isset($_SESSION['idClienteLoged'])){
      echo $_SESSION['nomeCliente'];
     }
     

    ?></label>
<label for="MenuBar1" id="Label2">Sobrenome</label>
<label for="Heading10" id="Label3">Data de nascimento</label>
<label for="" id="Label4">Email</label>
<label for="" id="Label5">Telefone</label>
<label for="" id="Label6">Endereço</label>
</form>
</div>
</div>
</section>
<hr id="Line1">
</div>
<div id="PageHeader1" >
<div id="PageHeader1_Container">
<div id="wb_Heading9">
<h1 id="Heading9">L</h1></div>
<div id="wb_Heading10">
<h1 id="Heading10">C</h1></div>
<div id="wb_ResponsiveMenu1">
<label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title">Menu<span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu1-submenu">
<ul class="ResponsiveMenu1" id="ResponsiveMenu1">
<li><a href="../index.php"><i class="fa fa-home fa-2x">&nbsp;</i><br>Home</a></li>
<li><a href="http://"><i class="fa fa-user-circle-o fa-2x">&nbsp;</i><br>Conta</a></li>
<li><a href="http://"><i class="fa fa-sign-out fa-2x">&nbsp;</i><br>Sair</a></li>
</ul>
</div>
</div>
</div>
<div id="PageHeader2">
<div id="PageHeader2_Container">
<div id="wb_ResponsiveMenu3">
<label class="toggle" for="ResponsiveMenu3-submenu" id="ResponsiveMenu3-title">Menu<span id="ResponsiveMenu3-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu3-submenu">
<ul class="ResponsiveMenu3" id="ResponsiveMenu3">
<li><a href="#"><i class="fa fa-facebook-square fa-2x">&nbsp;</i><br>facebook</a></li>
<li><a href="#"><i class="fa fa-instagram fa-2x">&nbsp;</i><br>Instagram</a></li>
</ul>
</div>
<div id="wb_MenuBar1">
<div id="MenuBar1">
<ul style="display:none;">
<li><span></span><span>FALE&nbsp;CONOSCO:</span></li>
</ul>
</div>
<script>
var cmMenuBar1 =
{
   mainFolderLeft: '',
   mainFolderRight: '',
   mainItemLeft: '',
   mainItemRight: '',
   folderLeft: '',
   folderRight: '',
   itemLeft: '',
   itemRight: '',
   mainSpacing: 0,
   subSpacing: 0,
   delay: 100,
   offsetHMainAdjust: [0, 0],
   offsetSubAdjust: [0, 0]
};
var cmMenuBar1HSplit = [_cmNoClick, '<td class="MenuBar1MenuSplitLeft"><div></div></td>' +
                                       '<td class="MenuBar1MenuSplitText"><div></div></td>' +
                                       '<td class="MenuBar1MenuSplitRight"><div></div></td>'];
var cmMenuBar1MainVSplit = [_cmNoClick, '<div><table width="15" cellspacing="0"><tr><td class="MenuBar1HorizontalSplit">|</td></tr></table></div>'];
var cmMenuBar1MainHSplit = [_cmNoClick, '<td colspan="3" class="MenuBar1MainSplitText"><div></div></td>'];
cmDrawFromText('MenuBar1', 'hbr', cmMenuBar1, 'MenuBar1');
</script>
</div>
</div>
</div>
</body>
</html>