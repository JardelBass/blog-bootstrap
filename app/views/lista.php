<!-- Css para toca cor dos botão do menu -->
<style>
	#post{background-color: #7DA743;}
	#equipe,#home,#contato{background-color: #201E29;}
</style>
<!-- list-post-jr -->
<div class="list-post-jr">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php
				//verificando com SELECT para traz todos postagem ordenado do ultimo para primeiro 
				$select = "SELECT * FROM tb_postagens ORDER BY id DESC";
				//tratamento de erro quando executa ação 
				try{
					//preparando uma conexão com banco de dado 
					$result = $conexao->prepare($select);
					//executando SELECT 
					$result->execute();
					//contando numero de dados retomado do banco 
					$contar = $result->rowCount();
					
				}catch (PDOException $ex){
					//tratamento de erro login
					echo "ERRO".$ex;
				}
				//função para imprime número de linha contada com 2 parâmetros um texto e outro numero de linhas  
				function limitarTexto($texto, $limite){
					$contador = strlen($texto);
					$texto = trim(strip_tags($texto));
					if ( $contador >= $limite ) {      
						$texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
						return $texto;
					}
					else{
						return $texto;
					}
				} 
				//Verificando se não tem $_GET com nome de id  
				if(!isset($_GET['id'])){
			?>
			<!-- col-sm-8 -->
			<div class="col-sm-8">
				<!-- post-text-jr -->
				<div class="post-text-jr">
					<h1>TODOS OS POST</h1>
				<!-- /post-text-jr -->
				</div>
				<!-- div -->
				<div id="todosPost">
					<!-- row -->
					<div class="row">
						<!--Estrutura de repetição para imprime postagens -->
						<?php while($lista = $result->FETCH(PDO::FETCH_OBJ)){
							if($lista->exibir == "sim" || $lista->exibir == "Sim"){
						?>
							<!-- list-post -->
							<div class="list-post">
								<!-- post-list-text-jr -->
								<div class="post-list-text-jr">
									<a href="?lista&id=<?= $lista->id; ?>"><h2><?= $lista->titulo ?></h2></a>
									<p><?= limitarTexto($lista->descricao,$limeta=150); ?></p>
								<!-- /post-list-text-jr -->
								</div>
							<!-- /list-post -->
							</div>
						<?php }}?>
					<!-- /row -->
					</div>
				<!-- /div -->
				</div>
			<!-- /col-sm-8 -->
			</div>
			<!-- Se $_GET id for verdade -->
			<?php }else{
				//Recuperando id mando via $_GET
				$id = $_GET['id'];
				//Um SELECT para procura banco de dados postes com id recuperado 
				$select = "SELECT * FROM tb_postagens WHERE id=:id";
				try{
					//preparando uma conexão com banco de dado
					$result = $conexao->prepare($select);
					//Tratando a variável id indica anteriormente no SELECT para previne inserção de código 
					$result->bindParam(':id',$id, PDO::PARAM_INT);
					//executando SELECT
					$result->execute();
					//Transformando um resultado retomado em OBJ 
					$postR = $result->FETCH(PDO::FETCH_OBJ);
					//contando numero de dados retomado do banco
					$contar = $result->rowCount();

				}catch (PDOException $ex){
					//tratamento de erro login
					echo "ERRO".$ex;
				}
			?>
			<!-- col-sm-8 -->
			<div class="col-sm-8">
				<!-- post-text-jr -->
				<div class="post-text-jr">
					<h1><?= $postR->titulo;?></h1>
				<!-- /post-text-jr -->
				</div>
				<!-- #todosPost -->
				<div id="todosPost">
					<!-- col-sm-12 -->
					<div class="col-sm-12 post-ler-jr">
						<img class="col-sm-12" src="<?= "http://localhost/blog-bootstrap/admin/app/views/upload/".$postR->imagem; ?>" alt='Smiley face' /> 
						<p><?=$texto = trim(strip_tags($postR->descricao));?></p>
					<!-- /col-sm-12 -->
					</div>
				<!-- /#todosPost -->
				</div>
			<!-- col-sm-8 -->
			</div>
			<?php }?>
			<!-- col-ms-4 -->
			<div class="col-ms-4">
				
			<!-- /col-ms-4 -->
			</div>
		<!-- row -->
		</div>
	<!-- /container -->
	</div>
<!-- /list-post-jr -->
</div>
<!-- incluindo um aquivo de roda pé -->
<?php include_once("footer.php"); ?>