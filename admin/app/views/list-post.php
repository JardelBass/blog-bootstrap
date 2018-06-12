<!-- Css para toca cor dos botão do menu -->
<style type="text/css">
	#post-list{ border-left: 15px solid #7DA743;}
</style>
<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/deleta-post.php");?>
<?php
	//Um SELECT para procura banco de dados lista de postagem
	$select = "SELECT * FROM tb_postagens ORDER BY id DESC";

	try{
		//preparando uma conexão com banco de dado
		$result = $conexao->prepare($select);
		//executando SELECT
		$result->execute();
		//contando numero de dados retomado do banco 
		$contar = $result->rowCount();

		if($contar >0){
?>
		<!-- col-sm-12 -->
		<div class="col-sm-12">
			<!-- painel-jr -->
			<div class="painel-jr">
				<h1>LISTA DE POSTAGENS</h1>
				<!-- col-sm-12 -->
				<table class="col-sm-12">
					<thead>
					  <tr>
						<th>ID</th>
						<th>TITULO</th>
						<th>DATA</th>
						<th>EXIBIR</th>
						<th>EDITA</th>
						<th>DELETA</th>
					  </tr>
					</thead>
					<tbody>
					<?php 
						$i = 1;
						while($lista = $result->FETCH(PDO::FETCH_OBJ)){
					?>
						  <tr>
							<td><?= $i;?></td>
							<td><?= $lista->titulo; ?></td>
							<td><?= $lista->data; ?></td>
							<td><?= $lista->exibir; ?></td>
							<td class="edita"><a href='?edit-post&id=<?=$lista->id?>'>Edita</a></td>
							<td class="deleta"><a href='?list-post&deleta=<?=$lista->id?>'>Deleta</a></br></td>
						  </tr>
					<?php 
							$i++;
						}
					?>
					</tbody>
				<!-- col-sm-12 -->
				</table>
			<!-- /painel-jr -->
			</div>
		<!-- /col-sm-12 -->
		</div>
<?php
		}else{
			echo "dados digitados estão errados";
		}

	}catch (PDOException $ex){
	//tratamento de erro login
		echo "ERRO".$ex;
	}
?>


