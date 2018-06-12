<?php
	//Verificando existe um $_GET com nome de 'DELETA-MSM' para execução executa ação 
	if(isset($_GET['deleta-msm'])){
		//Recuperando id mando via $_GET
		$id = $_GET['deleta-msm'];

		try{
			//verificando com DELETE de um MSM 
			$deleta = "DELETE FROM tb_contato WHERE id=:id";
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
				echo "<script> alert('Mensagem DELETADA');</script>";
			}else{
				echo "<script> alert('Erro DELETADA');</script>";
			}
			
		 }catch(OPDWException $erro){
			 echo $erro;
		 }
	}