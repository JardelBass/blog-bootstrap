<?php

	$id = $_GET['id'];
	$select = "SELECT * FROM login WHERE id=:id";

	try{
		$result = $conexao->prepare($select);
		$result->bindParam(':id',$id, PDO::PARAM_INT);
		$result->execute();
		$userR = $result->FETCH(PDO::FETCH_OBJ);
		$contar = $result->rowCount();
		
	}catch (PDOException $ex){
		echo "ERRO".$ex;
	}
	

	$update = "UPDATE login SET nome=:nome, email=:email, senha=:senha, nivel=:nivel, usuario=:usuario WHERE id=:id";

	if(isset($_POST['edita-user'])){
		$id = $_GET['id'];
		$nome = trim(strip_tags($_POST['nome']));
		$email = trim(strip_tags($_POST['email']));
		$senha = trim(strip_tags($_POST['senha']));
		$nivel = trim(strip_tags($_POST['nivel']));
		$usuario = trim(strip_tags($_POST['usuario']));
		
		try{
			$result = $conexao->prepare($update);
			$result->bindParam(':id',$id, PDO::PARAM_INT);
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
			}else{
				echo "erro a cadastra";
			}

		}catch (PDOException $ex){
			//tratamento de erro login
			echo "ERRO".$ex;
		}
	}