<?php

	if(isset($_POST['cadastrar-user'])){
		
		$nome = trim(strip_tags($_POST['nome']));
		$email = trim(strip_tags($_POST['email']));
		$senha = trim(strip_tags($_POST['senha']));
		$nivel = trim(strip_tags($_POST['nivel']));
		$usuario = trim(strip_tags($_POST['usuario']));
		
		$inset = "INSERT into login (nome, email, senha, nivel, usuario) VALUES (:nome, :email,:senha, :nivel, :usuario)";

		try{
			$result = $conexao->prepare($inset);
			$result->bindParam(':nome',$nome, PDO::PARAM_STR);
			$result->bindParam(':email',$email, PDO::PARAM_STR);
			$result->bindParam(':senha',$senha, PDO::PARAM_STR);
			$result->bindParam(':nivel',$nivel, PDO::PARAM_STR);
			$result->bindParam(':usuario',$usuario, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			echo $contar;

			if($contar >0){
				header("Location: home.php?list-user");
				//tratamento de deu certo
			}else{
				echo "ERRO a cadastrado";
				// erro 
			}

		}catch (PDOException $ex){
			//tratamento de erro login
			echo "ERRO".$ex;
		}
	}
