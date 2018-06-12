<?php
	//verificando com SELECT para db
	$select = "SELECT * FROM tb_postagens WHERE exibir='Sim' ORDER BY id DESC";
		
	try{
		//criando um coneção
		$result = $conexao->prepare($select);
		//executando SELECT
		$result->execute();
		//contando munero de dados retonado
		$contar = $result->rowCount();
		//guardado dados em variavel com OBJ
		$lista = $result->FETCH(PDO::FETCH_OBJ);

	}catch (PDOException $ex){
		//tratamento de erro login
		echo "ERRO".$ex;
	}
	
	//função para controla munero de caraquiteres a escreve
	function limitarTexto($texto, $limite){
		//contando caraquiteres do texto
		$contador = strlen($texto);
		if ( $contador >= $limite ) {
			$texto = trim(strip_tags($texto));
			$texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
			return $texto;
		}
		else{
			return $texto;
		}
	} 
?>