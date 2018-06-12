<?php
	//Verificando existe um $_GET com nome de 'DELETA-USER' para execução executa ação
	if(isset($_GET['deleta-user'])){
		//Recuperando id mando via $_GET
		$id = $_GET['deleta-user'];

		try{
			//verificando com DELETE de um POSTAGEM
			$deleta = "DELETE FROM login WHERE id=:id";
			//criando um coneção
			$result = $conexao->prepare($deleta);
			//Identificando as variáveis identificam anterior no INCET 
			//Identificando variável TITULO
			$result->bindParam(':id',$id, PDO::PARAM_INT);
			//executando meu DELETE
			$result->execute();
			//verificando se teve uma retono de 1 caso
			$contar = $result->rowCount();

			if($contar > 0){
				echo "<script> alert('Usuario DELETADA');</script>";
			}else{
				echo "<script> alert('ERRO a DELETADA');</script>";
			}
			
		 }catch(OPDWException $erro){
			 echo $erro;
		 }
	}