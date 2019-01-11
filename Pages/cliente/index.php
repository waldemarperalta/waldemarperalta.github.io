
<?php
session_start();
 $loged=$_SESSION['idClienteLoged'];
	include "../../Apllication/core/FacadePrincipal.php";
	if($facadePrincipal->ClienteController()->sessionExist())
		header("Location:pagecliente.php");
	else
		header("Location:login.php");
?>
