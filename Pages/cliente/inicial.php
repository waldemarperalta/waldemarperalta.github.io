<?php  
	include "../../Apllication/core/FacadePrincipal.php";
	if($facadePrincipal->ClienteController()->sessionExist())
		header("Location:pagecliente.php");
?>


<!doctype html>
=======
>>>>>>> 60987cff57892ddbfd24f75e3272ae9d42a01164:index.html
<html>
<head>
<meta charset="utf-8">
<title>MEU KUMBÚ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="icon.PNG" rel="shortcut icon" type="image/x-icon">
<link href="icon.PNG" rel="apple-touch-icon" sizes="200x200">
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="meucumbu.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="scrollspy.min.js"></script>
<script src="jquery-ui.min.js"></script>

<link rel="manifest" href="../../manifest.json">

<!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Percent">
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
   $("#wb_ResponsiveMenu1 ul li a").click(function(event)
   {
      $("#wb_ResponsiveMenu1 input").prop("checked", false);
   });
   $("a[href*='#LayoutGrid3']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid3').offset().top }, 600, 'linear');
   });
   $("a[href*='#LayoutGrid5']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid5').offset().top }, 600, 'linear');
   });
   $("a[href*='#features']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_features').offset().top }, 600, 'linear');
   });
   $("a[href*='#services']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_services').offset().top }, 600, 'linear');
   });
   $("a[href*='#LayoutGrid1']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid1').offset().top }, 600, 'swing');
   });
   $("a[href*='#LayoutGrid4']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid4').offset().top }, 600, 'swing');
   });
   $("a[href*='#skills']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#skills').offset().top }, 600, 'easeOutSine');
   });
   $("a[href*='#awards']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#awards').offset().top }, 600, 'easeOutSine');
   });
   $("a[href*='#FlexContainer2']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#FlexContainer2').offset().top }, 600, 'easeOutSine');
   });
   $("a[href*='#spaceGrid']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_spaceGrid').offset().top }, 600, 'linear');
   });
   $("a[href*='#contact']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_contact').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#footer']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_footer').offset().top }, 600, 'easeOutSine');
   });
   $("#Progressbar4").progressbar(
   {
      value: 90,
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
      value: 60,
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
});
</script>
<!-- Insert Google Analytics code here --><script>
$(document).ready(function()
{
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
</head>
<body data-spy="scroll">
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<nav id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_JavaScript2" style="display:inline-block;width:100%;z-index:0;">
<div style="color:#000000;font-size:36px;font-family:Arial;font-weight:bold;font-style:normal;text-align:center;text-decoration:none" id="typewriter-deluxe">
<span id="typewriter-text" style="border-right: 0.08em solid #000000;"></span>
</div>
<script>
var data = "MEU KUMBÚ";
var lines = data.split('^');
var reverse = false;
var index = 0;
var text = '';
var typeWriterElement = document.getElementById("typewriter-text");
function typeWriterDeluxe() 
{
   var i = index % lines.length;
   var line = lines[i];
   if (reverse) 
   {
      text = line.substring(0, text.length - 1);
   } 
   else 
   {
      text = line.substring(0, text.length + 1);
   }
   typeWriterElement.innerHTML = text;
   var timeout = 450 - Math.random() * (450/2);
   if (reverse) 
   { 
      timeout /= 2; 
   }
   if (!reverse && text === line) 
   {
      timeout = 3000;
      reverse = true;
   } 
   else 
   if (reverse && text === '') 
   {
      reverse = false;
      index++;
      timeout = 500;
   }
   setTimeout(typeWriterDeluxe, timeout);
}
typeWriterDeluxe();
</script>
</div>
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:19px;line-height:22px;">Olá, seja bem vindo a nossa pagina.<br><br> Como ser humano que somos, acreditamos que&nbsp; todos nós já nos fizemos perguntas,<br> relativas ao nosso dinheiro.<br> Tais como!</span>
</div>
</div>
</div>
</nav>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:52px;height:47px;text-align:center;z-index:2;">
<a href="#features"><div id="FontAwesomeIcon3"><i class="fa fa-chevron-down"></i></div></a>
</div>
</div>
</div>
</div>
</div>
<div id="wb_features" class="triangle">
<nav id="features">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_FontAwesomeIcon4" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:3;">
<div id="FontAwesomeIcon4"><i class="fa fa-calculator"></i></div>
</div>
<div id="wb_Heading2" style="display:inline-block;width:100%;z-index:4;">
<h2 id="Heading2">Quanto tenho gasto?</h2>
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_FontAwesomeIcon2" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:5;">
<div id="FontAwesomeIcon2"><i class="fa fa-pie-chart"></i></div>
</div>
<div id="wb_Heading3" style="display:inline-block;width:100%;z-index:6;">
<h2 id="Heading3">Com o qué tenho gasto?</h2>
</div>
</div>
</div>
<div class="col-3">
<div class="col-3-padding">
<div id="wb_FontAwesomeIcon1" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:7;">
<div id="FontAwesomeIcon1"><i class="fa fa-bar-chart"></i></div>
</div>
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:8;">
<h2 id="Heading1">Como tenho gasto?</h2>
</div>
</div>
</div>
<div class="col-4">
<div class="col-4-padding">
<div id="wb_FontAwesomeIcon8" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:9;">
<div id="FontAwesomeIcon8"><i class="fa fa-map-marker"></i></div>
</div>
<div id="wb_Heading7" style="display:inline-block;width:100%;z-index:10;">
<h2 id="Heading7">Onde tenho gasto?</h2>
</div>
</div>
</div>
</div>
</nav>
</div>
<div id="wb_services" class="diagonal">
<div id="services-overlay"></div>
<div id="services">
<div class="row">
<div class="col-1">
<div id="wb_Text6">
<span style="color:#000000;font-family:Arial;font-size:16px;">Quando já começamos a fazer perguntas como estas pra nós mesmos, mostra a necessidade de começar a cuidar melhor da saúde financeira. <br>Um passo importante para solucionar esse problema é adotar uma planilha, mas por onde começar? <br><br>Aplicativos de controle de gastos são um bom caminho, pois te ajudam a entender para onde vai o dinheiro e, consequentemente, tomar melhores decisões financeiras.<br><br><br>Quando o assunto é educação financeira, uma boa atitude para contornar essa situação é começar a usar um aplicativo de gastos. Assim, você poderá ter melhores decisões financeiras e terá sucesso na missão de fazer sobrar dinheiro.<br>
</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid1" class="diagonal">
<div id="LayoutGrid1-overlay"></div>
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon9" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:12;">
<div id="FontAwesomeIcon9"><i class="fa fa-search-plus"></i></div>
</div>
<div id="wb_Text8">
<span style="color:#000000;font-family:Arial;font-size:32px;line-height:37px;"><strong>IDEIA</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:17px;"><br></span><span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><br></span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:18px;"><br>Preview or publish the page to see the result!Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4" class="diagonal">
<div id="LayoutGrid4-overlay"></div>
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon5" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:14;">
<div id="FontAwesomeIcon5"><i class="fa fa-gears"></i></div>
</div>
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:32px;line-height:37px;"><strong>OBJECTIVO</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:17px;"><br></span><span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><br></span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:18px;"><br>Preview or publish the page to see the result!


</span>
</div>
</div>
</div>
</div>
</div>
<div id="skills">
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:32px;line-height:37px;"><strong>APLICATIVO</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:17px;"><br></span><span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><br></span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:18px;"><br>Preview or publish the page to see the result!Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
</span>
</div>
</div>
<div id="awards">
<div id="wb_Card1" style="display:flex;z-index:17;">
   <div id="Card1-card-body">
      <img id="Card1-card-item0" src="images/zero.PNG" alt="" title="">
   </div>

</div>
<div id="wb_Card2" style="display:flex;z-index:18;">
   <div id="Card2-card-body">
      <img id="Card2-card-item0" src="images/um.PNG" alt="" title="">
   </div>

</div>
<div id="wb_Card3" style="display:flex;z-index:19;">
   <div id="Card3-card-body">
      <img id="Card3-card-item0" src="images/dois.PNG" alt="" title="">
   </div>

</div>
<div id="wb_Card6" style="display:flex;z-index:20;">
   <div id="Card6-card-body">
      <img id="Card6-card-item0" src="images/tres.PNG" alt="" title="">
   </div>

</div>
<div id="wb_Card7" style="display:flex;z-index:21;">
   <div id="Card7-card-body">
      <img id="Card7-card-item0" src="images/dois.PNG" alt="" title="">
   </div>

</div>
</div>
<div id="FlexContainer2">
<label for="" id="Label4" style="display:block;height:28px;height:28px;line-height:20px;z-index:22;">Usuários</label>
<div id="Progressbar4"  style="display:inline-block;height:20px;position:relative;">
<div id="Progressbar4-label">90%</div>
</div>
<label for="" id="Label8" style="display:block;height:28px;height:28px;line-height:20px;z-index:24;">Usuários activos</label>
<div id="Progressbar5"  style="display:inline-block;height:20px;position:relative;">
<div id="Progressbar5-label">80%</div>
</div>
<label for="" id="Label9" style="display:block;height:28px;height:28px;line-height:20px;z-index:26;">Conteúdos visualizados</label>
<div id="Progressbar6"  style="display:inline-block;height:20px;position:relative;">
<div id="Progressbar6-label">60%</div>
</div>

</div>
<div id="wb_spaceGrid">
<div id="spaceGrid">
<div class="row">
<div class="col-1">
<div id="wb_spaceHeading1" style="display:inline-block;width:100%;z-index:29;">
<h2 id="spaceHeading1">DICAS</h2>
</div>
</div>
</div>
</div>
</div>
<div id="wb_contact">
<form name="contact" method="post" action="mailto:waldemarperalta916@hotmail.com.com" enctype="text/plain" accept-charset="UTF-8" id="contact">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Heading4" style="display:inline-block;width:100%;z-index:30;">
<h2 id="Heading4">Alguma Pergunta? <br></h2>
</div>
<div id="wb_contactHeading1" style="display:inline-block;width:100%;z-index:31;">
<h2 id="contactHeading1">Alguma Sujestão? <br></h2>
</div>
<div id="wb_contactIcon1" style="display:inline-block;width:64px;height:64px;text-align:center;z-index:32;">
<div id="contactIcon1"><i class="fa fa-envelope-o"></i></div>
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<label for="JavaScript2" id="Label1" style="display:block;width:100%;z-index:33;">Name</label>
<input type="text" id="editboxName" style="display:block;width: 100%;height:34px;z-index:34;" name="Editbox1" value="" spellcheck="false">
<label for="LayoutGrid8" id="Label2" style="display:block;width:100%;z-index:35;">Email</label>
<input type="text" id="editboxEmail" style="display:block;width: 100%;height:34px;z-index:36;" name="email" value="" spellcheck="false">
<label for="contact" id="Label3" style="display:block;width:100%;z-index:37;">Message</label>
<textarea name="message" id="editboxMessage" style="display:block;width: 100%;;height:100px;z-index:38;" rows="4" cols="61" spellcheck="false"></textarea>
<input type="submit" id="Button1" name="" value="Enviar" style="display:inline-block;width:92px;height:39px;z-index:39;">
</div>
</div>
</div>
</form>
</div>
<div id="wb_footer">
<div id="footer-overlay"></div>
<div id="footer">
<div class="row">
<div class="col-1">
<div id="wb_Text11">
<span style="color:#FFFFFF;"><strong>EQUIPA</strong></span>
</div>
<div id="wb_Card5" style="display:flex;width:100%;z-index:41;">
   <div id="Card5-card-body">
      <img id="Card5-card-item0" src="images/80x80.jpg" alt="" title="">
      <div id="Card5-card-item1">Flávio Geremias</div>
      <div id="Card5-card-item2">Desenvolvedor</div>
      <div id="Card5-card-item3"><i class="fa fa-facebook"></i></div>
      <div id="Card5-card-item4"><i class="fa fa-envelope"></i></div>
      <div id="Card5-card-item5"><i class="fa fa-phone"></i></div>
   </div>

</div>
<div id="wb_Card4" style="display:flex;width:100%;z-index:42;">
   <div id="Card4-card-body">
      <img id="Card4-card-item0" src="images/80x80.jpg" alt="" title="">
      <div id="Card4-card-item1">Valdemar Lemos</div>
      <div id="Card4-card-item2">Desenvolvedor</div>
      <div id="Card4-card-item3">Designer</div>
      <div id="Card4-card-item4"><i class="fa fa-facebook"></i></div>
      <div id="Card4-card-item5"><i class="fa fa-envelope"></i></div>
      <div id="Card4-card-item6"><a href="tel:+244996611738"><i class="fa fa-phone"></i></a></div>
   </div>

</div>
</div>
<div class="col-2">
<div id="wb_Text9">
<span style="color:#FFFFFF;"><strong>CONTACTOS</strong></span>
</div>
<div id="wb_Text10">
<span style="color:#FFFFFF;"><strong>Email</strong>: meukumbu@hotmail.com<br><br><strong>Phone</strong>: +244 900 000 000<br><br><strong>Website</strong>:waldemarperalta.github.io</span>
</div>
</div>
<div class="col-3">
<div id="wb_Text3">
<span style="color:#FFFFFF;"><strong>NAVEGAÇÃO</strong></span>
</div>
<div id="wb_CssMenu2" style="display:inline-block;width:100%;z-index:46;">
<ul role="menubar">
<li class="firstmain"><a role="menuitem" href="#" target="_self">Home</a>
</li>
<li><a role="menuitem" href="#" target="_self">Boas&nbsp;vindas</a>
</li>
<li><a role="menuitem" href="#" target="_self">Ideia</a>
</li>
<li><a role="menuitem" href="#" target="_self">Objectivo</a>
</li>
<li><a role="menuitem" href="#" target="_self">Dicas</a>
</li>
</ul>

</div>
</div>
<div class="col-4">
<div id="wb_Text5">
<span style="color:#FFFFFF;"><strong>FOLLOW US</strong></span>
</div>
<div id="wb_CssMenu5" style="display:inline-block;width:100%;z-index:48;">
<ul role="menubar">
<li class="firstmain"><a role="menuitem" href="#" target="_self">Facebook</a>
</li>
<li><a role="menuitem" href="#" target="_self">Instagram</a>
</li>
<li><a role="menuitem" href="#" target="_self">YouTube</a>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_Text16">
<span style="color:#000000;">Copyright © 2018.&nbsp; All Rights Reserved</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon7" style="display:inline-block;width:88px;height:54px;text-align:center;z-index:50;">
<a href="./index.php"><div id="FontAwesomeIcon7"><i class="fa fa-line-chart"></i></div></a>
</div>
</div>
<div class="col-2">
<div id="wb_ResponsiveMenu1" style="display:inline-block;width:100%;z-index:51;">
<label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title">MEU KUMBÚ<span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu1-submenu">
<ul class="ResponsiveMenu1" id="ResponsiveMenu1" role="menu">
<li><a role="menuitem" href="#LayoutGrid2"><i class="fa fa-home fa-2x">&nbsp;</i><br>Home</a></li>
<li><a role="menuitem" href="#services"><i class="fa fa-thumb-tack fa-2x">&nbsp;</i><br>Ideia</a></li>
<li><a role="menuitem" href="#LayoutGrid4"><i class="fa fa-check fa-2x">&nbsp;</i><br>Objectivo</a></li>
<li><a role="menuitem" href="#skills"><i class="fa fa-gears fa-2x">&nbsp;</i><br>Aplicativo</a></li>
<li><a role="menuitem" href="#spaceGrid"><i class="fa fa-file-text fa-2x">&nbsp;</i><br>Dicas</a></li>
<li><a role="menuitem" href="../cliente/login.php"><i class="fa fa-sign-in fa-2x">&nbsp;</i><br>Sign-in</a></li>
<li><a role="menuitem" href="#footer"><i class="fa fa-tags fa-2x">&nbsp;</i><br>Sobre</a></li>
</ul>

</div>
</div>
</div>
</div>
</div>
</body>
</html>
