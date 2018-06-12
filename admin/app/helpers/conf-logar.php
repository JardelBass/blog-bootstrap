<?php
	ob_start();
	session_start();
	//Verificando existe um $_SESSION execução executa ação
	if(!isset($_SESSION['usuarioadmin']) && (!isset($_SESSION['senhaadmin']))){
		unset($_SESSION['login']);
    	unset($_SESSION['senha']);
		//redireciona para pagina INDEX
    	header('location:../../index.php');
		exit();
	}
	