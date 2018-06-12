<?php 
	//Verificando existe um $_POT com nome de 'cadastrar' para execução executa ação
	if(isset($_POST['cadastrar'])){
		//Recuperando os dados envidado via $_POT e tradando variável para remover código inseridos
		//Recuperando TITULO
		$titulo = trim(strip_tags($_POST['titulo']));
		//Recuperando DATA
		$data = date('d/m/Y');
		//Recuperando DESCRIÇÃO
		$descricao = trim(strip_tags($_POST['descricao']));
		//Recuperando EXIBIR
		$exibir = trim(strip_tags($_POST['exibir']));
		
		//INFO IMAGEM
		$file 		= $_FILES['img'];
		$numFile	= count(array_filter($file['name']));
		
		//PASTA
		$folder		= 'upload/';
		
		//REQUISITOS
		$permite 	= array('image/jpeg', 'image/png');
		$maxSize	= 1024 * 1024 * 5;
		
		//MENSAGENS
		$msg		= array();
		$errorMsg	= array(
			1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
			2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
			3 => 'o upload do arquivo foi feito parcialmente',
			4 => 'Não foi feito o upload do arquivo'
		);
		
		if($numFile <= 0){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Selecione uma imagem!
					</div>';
			
		}else{
			for($i = 0; $i < $numFile; $i++){
				$name 	= $file['name'][$i];
				$type	= $file['type'][$i];
				$size	= $file['size'][$i];
				$error	= $file['error'][$i];
				$tmp	= $file['tmp_name'][$i];
				
				$extensao = @end(explode('.', $name));
				$novoNome = rand().".$extensao";
				
				if($error != 0)
					$msg[] = "<b>$name :</b> ".$errorMsg[$error];
				else if(!in_array($type, $permite))
					$msg[] = "<b>$name :</b> Erro imagem não suportada!";
				else if($size > $maxSize)
					$msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 5MB";
				else{
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						//$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
						//verificando se dados digitado estão banco
						$inset = "INSERT into tb_postagens (titulo, data,imagem, descricao, exibir) VALUES (:titulo, :data,:imagem, :descricao, :exibir)";

						try{
							//criando um coneção
							$result = $conexao->prepare($inset);
							//Identificando as variáveis identificam anterior no INCET 
							//Identificando variável TITULO
							$result->bindParam(':titulo',$titulo, PDO::PARAM_STR);
							//Identificando variável DATA
							$result->bindParam(':data',$data, PDO::PARAM_STR);
							//Identificando variável IMAGEM
							$result->bindParam(':imagem',$novoNome, PDO::PARAM_STR);
							//Identificando variável EXIBIR
							$result->bindParam(':exibir',$exibir, PDO::PARAM_STR);
							//Identificando variável DESCRIÇÃO
							$result->bindParam(':descricao',$descricao, PDO::PARAM_STR);
							//executando meu INSET
							$result->execute();
							//verificando se teve uma retono de 1 caso
							$contar = $result->rowCount();
							
							//Se numero de for maior 0 então redireciona para pagina lista postagim
							if($contar >0){
								echo "<script> alert('Postagem salva');</script>";
								header("Location: home.php?list-post");
							}else{
								echo "<script> alert('ERRO a salva Postagem');</script>";
							}

						}catch (PDOException $ex){
							//tratamento de erro login
							echo "ERRO".$ex;
						}

					}else
						$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
				
				}
				
				foreach($msg as $pop)
				echo '';
				//echo $pop.'<br>';
			}
		}
	}
?>