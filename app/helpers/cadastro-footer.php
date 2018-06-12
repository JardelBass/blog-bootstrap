<?php

	//Verificando existe um $_POT com nome de 'contato' para execução executa ação 
	if(isset($_POST['contato'])){
		
		//Recuperando os dados envidado via $_POT e tradando variável para remover código inseridos
		//Recuperando NOME
		$nome = trim(strip_tags($_POST['nome']));
		//Recuperando E-MAIL
		$email = trim(strip_tags($_POST['email']));
		//Recuperando FONE
		$fone = trim(strip_tags($_POST['fone']));
		//Recuperando CONTEÙDO
		$texto = trim(strip_tags($_POST['texto']));
		//Recuperando DATA do dia
		$data = date('d/m/Y');
		
		//variável contendo um INSET que deverá inseres dados recuperado no banco  
		$inset = "INSERT into tb_contato (nome, email,fone, texto, data) VALUES (:nome, :email,:fone, :texto, :data)";

		try{
			//criando um coneção
			$result = $conexao->prepare($inset);
			//Identificando as variáveis identificam anterior no INCET 
			//Identificando variável NOME
			$result->bindParam(':nome',$nome, PDO::PARAM_STR);
			//Identificando variável E-MAIL
			$result->bindParam(':email',$email, PDO::PARAM_STR);
			//Identificando variável FONE
			$result->bindParam(':fone',$fone, PDO::PARAM_STR);
			//Identificando variável CONTEUDO
			$result->bindParam(':texto',$texto, PDO::PARAM_STR);
			//Identificando variável DATA
			$result->bindParam(':data',$data, PDO::PARAM_STR);
			//executando meu INSET
			$result->execute();
			//verificando se teve uma retono de 1 caso
			$contar = $result->rowCount();
			
			//tantando erro ou não
			if($contar >0){
				//tratamento de deu certo
			}else{
				// erro 
			}

		}catch (PDOException $ex){
			//tratamento de erro login
			echo "ERRO".$ex;
		}
	}
