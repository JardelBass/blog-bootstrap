<?php
session_start();
	
	if(isset($_SESSION['usuarioadmin']) && (isset($_SESSION['senhaadmin']))){
		header("Location: app/views/home.php");
		exit;
	}

	include_once("app/db/conecta.php");

	if(isset($_POST['logar'])){
		//Recupera dados digitados
		$usuario = trim(strip_tags($_POST['usuario']));
		$senha = trim(strip_tags($_POST['senha']));
		
		//verificando se dados digitado estão banco
		$select = "SELECT * FROM login WHERE BINARY usuario=:usuario AND BINARY senha=:senha";
		
		try{
			$result = $conexao->prepare($select);
			$result->bindParam(':usuario',$usuario, PDO::PARAM_STR);
			$result->bindParam(':senha',$senha, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			echo $contar;
			
			if($contar >0){
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				$_SESSION['usuarioadmin'] = $usuario;
				$_SESSION['senhaadmin'] =$senha;
				header("Location: app/views/home.php");
				exit();
			}else{
				echo "dados digitados estão errados";
			}
			
		}catch (PDOException $ex){
			
			//tratamento de erro login
			echo "ERRO".$ex;
		}
		
	}