<?php 

	$id = $_GET['id'];
	$select = "SELECT * FROM tb_postagens WHERE id=:id";
	try{
		$result = $conexao->prepare($select);
		$result->bindParam(':id',$id, PDO::PARAM_INT);
		$result->execute();
		$postR = $result->FETCH(PDO::FETCH_OBJ);
		$contar = $result->rowCount();
		
	}catch (PDOException $ex){

		//tratamento de erro login
		echo "ERRO".$ex;
	}

	if(isset($_POST['editar'])){
		
		$titulo = trim(strip_tags($_POST['titulo']));
		$data = date('d/m/Y');
		$descricao = $_POST['descricao'];
		$exibir = trim(strip_tags($_POST['exibir']));

		if(!empty($_FILES['img']['name'])){
			$novoNome =$postR->imagem;
		}else{

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
						}else
							$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";

					}

					foreach($msg as $pop)
					echo '';
						//echo $pop.'<br>';
				}
			}

		}

		$update = "UPDATE tb_postagens SET titulo=:titulo, data=:data, imagem=:imagem, descricao=:descricao, exibir=:exibir WHERE id=:id";
		//$inset = "INSERT into tb_postagens (titulo,data,imagem,descricao,exibir) VALUES (:titulo, :data,:imagem,:descricao,:exibir)";

		try{
			$result = $conexao->prepare($update);
			$result->bindParam(':id',$id, PDO::PARAM_INT);
			$result->bindParam(':titulo',$titulo, PDO::PARAM_STR);
			$result->bindParam(':data',$data, PDO::PARAM_STR);
			$result->bindParam(':imagem',$novoNome, PDO::PARAM_STR);
			$result->bindParam(':exibir',$exibir, PDO::PARAM_STR);
			$result->bindParam(':descricao',$descricao, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			echo $contar;

			if($contar >0){
				header("Location: home.php?list-post");
			}else{
				echo "erro a cadastra";
			}

		}catch (PDOException $ex){
			//tratamento de erro login
			echo "ERRO".$ex;
		}
	}
?>