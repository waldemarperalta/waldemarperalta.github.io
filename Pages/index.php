
<?php
session_start();
	include "../Apllication/core/FacadePrincipal.php";
	if($facadePrincipal->ClienteController()->sessionExist())
		header("Location:cliente/pagecliente.php");
	else
		header("Location:cliente/meukumbu.html");
?>
