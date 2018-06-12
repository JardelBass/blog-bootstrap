<?php

	$id = $_GET['id'];
	$select = "SELECT * FROM tb_contato WHERE id=:id";

	try{
		$result = $conexao->prepare($select);
		$result->bindParam(':id',$id, PDO::PARAM_INT);
		$result->execute();
		$msmR = $result->FETCH(PDO::FETCH_OBJ);
		$contar = $result->rowCount();
		
	}catch (PDOException $ex){
		echo "ERRO".$ex;
	}
