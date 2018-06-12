<?php

if(isset($_REQUEST['sair'])){
	session_destroy();
	session_unset($_SESSION['usuarioadmin']);
	session_unset($_SERVER['senhaadmin']);
	header("location: ../../index.php");
}