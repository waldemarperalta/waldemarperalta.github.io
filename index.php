<?php
session_start();
 $loged=$_SESSION['idClienteLoged'];
	include "Apllication/core/FacadePrincipal.php";
	if($facadePrincipal->ClienteController()->sessionExist())
		header("Location:pages/cliente/pagecliente.php");
	else
		header("Location:pages/cliente/inicial.php");
?>
