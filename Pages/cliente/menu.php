<script src="assets/nova/wb.panel.min.js"></script>
<script>
$(document).ready(function()
{
   $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'overlay', position: 'right', toggle: true});
   $("#PanelMenu1_markup ul li a").click(function(event)
   {
       $.panel.hide($("#PanelMenu1_panel"));
   });
   $("#PanelMenu1-close a").click(function(event)
   {
       $.panel.hide($("#PanelMenu1_panel"));
   });
});
</script>

<script>
    $(document).ready(function() {
        var cor = ["menu","novo","line","modal","body","iconapp"];
        for (i = 0; i <= 15; i++) {
            document.getElementById(cor[i]).style.backgroundColor = '<?php echo "orange"; ?>';
        }
    });
</script>

<div id="menu" style=" 
    left: auto;
    right: 16px;
    top:auto;
    bottom:16px;
    z-index: 11111">
<div id="wb_PanelMenu1" style="    
   position: relative;
    left: 5px;
    top: 5px;
    width: 50px;
    height: 50px;
    text-align: center;
    z-index: 0;">
<a href="#PanelMenu1_markup" id="PanelMenu1">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</a>

<script type="text/javascript">
 function logout(){
                  localStorage.estado="Logout";
                  document.getElementById('loginform').submit();
 }
  
</script>
<div id="PanelMenu1_markup">
   <div id="PanelMenu1-close"><a role="button" aria-hidden="true" href="#">&times;</a></div>
<ul role="menu">
<li><a role="menuitem" href="./pagecliente.php" class="active"><i class="fa fa-home fa-2x">&nbsp;</i>Home</a></li>
<li><a role="menuitem" href="./novoregistro.php"><i class="fa fa-plus fa-2x">&nbsp;</i>Adicionar Registro&nbsp;</a></li>
<li><a role="menuitem" href="./Gastosdetalhados.php"><i class="fa fa-file-text fa-2x">&nbsp;</i>Gastos&nbsp;Detalhados</a></li>
<li><a role="menuitem" href="./dicas.php"><i class="fa fa-comment fa-2x">&nbsp;</i>Dicas</a></li>
<li><a role="menuitem" href="./perfilcliente.php"><i class="fa fa-user-circle fa-2x">&nbsp;</i><?php echo $user = $_SESSION['nomeCliente']; ?> </a></li>
<li>
  <a role="menuitem" href="../../controllerGateway.php?controller=Cliente&method=logout&field[]"  onclick="logout();">
    <i class="fa fa-sign-in fa-2x">&nbsp;</i>
    Logout
  </a>
</li>
</ul>
</div>
</div>
</div>




