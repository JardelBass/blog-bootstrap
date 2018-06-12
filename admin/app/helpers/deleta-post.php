<?php
	//Verificando existe um $_GET com nome de 'DELETA' para execução executa ação 
	if(isset($_GET['deleta'])){
		//Recuperando id mando via $_GET
		$id = $_GET['deleta'];
		
		try{
			//verificando com DELETE de um POSTAGEM
			$deleta = "DELETE FROM tb_postagens WHERE id=:id";
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
				echo "<script> alert('Postagem DELETADA');</script>";
			}else{
				echo "<script> alert('ERRO a DELETADA');</script>";
			}

		 }catch(OPDWException $erro){
			 echo $erro;
		 }
	}
?>