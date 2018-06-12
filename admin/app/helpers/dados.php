<?php 

	//verificando se dados digitado estão banco
	try{
		//verificando com SELECT para traz todos MSM 
		$select = "SELECT * FROM tb_contato ORDER BY id DESC";
		//criando um coneção
		$result = $conexao->prepare($select);
		//executando SELECT
		$result->execute();
		//contando numero de dados retomado do banco 
		$contarMSM = $result->rowCount();
		
		//verificando com SELECT para traz todos POSTAGEM
		$select = "SELECT * FROM tb_postagens ORDER BY id DESC";
		//criando um coneção
		$result = $conexao->prepare($select);
		//executando SELECT
		$result->execute();
		//contando numero de dados retomado do banco 
		$contarPOST = $result->rowCount();
		
		//verificando com SELECT para traz todos USUARIO
		$select = "SELECT * FROM login ORDER BY id DESC";
		//criando um coneção
		$result = $conexao->prepare($select);
		//executando SELECT
		$result->execute();
		//contando numero de dados retomado do banco 
		$contarUSER = $result->rowCount();
		
	}catch (PDOException $ex){
		//tratamento de erro login
		echo "ERRO".$ex;
	}