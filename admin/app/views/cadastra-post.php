<!-- Css para toca cor dos botão do menu -->
<style type="text/css">
	#cast-post{ border-left: 15px solid #7DA743;}
</style>
<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/cadastra.php");?>
<!-- col-sm-12 -->
<div class="col-sm-12">
	<!-- painel-jr -->
	<div class="painel-jr">
		<h1>CADASTRA POSTAGEM</h1>
		<!-- form cadastros de postagem -->
		<form id="edit-profile" class="cadastro-jr" method="post" action="" enctype="multipart/form-data">
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- TETULO -->
				<label for="email">Tetulo</label></br>
				<input type="text" id="titulo" placeholder="Digite titulo do podt" name="titulo">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- IMAGEM -->
				<label for="pwd">imagem</label></br>
				<input id="imagens-cads"type="file" multiple id="img" name="img[]">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-12 -->
			<div class="col-sm-12">
				<!-- CONTEUDO -->
				<label for="pwd">Conteudo</label></br>
				<textarea class="col-sm-12" id="conteudo" name="descricao" cols="100" rows="10" placeholder="Digite conteudo do post"></textarea>
			<!-- /col-sm-12 -->
			</div>
			<!-- col-sm-12 -->
			<div class="col-sm-12">
				<!-- EXBIR -->
				<label for="pwd">Exbir</label>
				<select id="exibir" name="exibir">
					<option>Sim</option>
					<option>Não</option>
				</select>
			<!-- /col-sm-12 -->
			</div>
			<!-- col-sm-12 -->
			<div class="butao-cadasto-jr col-sm-12">
				<!-- BOTÃO SALVAR E CANCELAR -->
				<input id="cadssalvar" type="submit" name="cadastrar" value="SALVAR">
				<input id="botao-cads-cancelar" type="reset" name="rest" value="CANCELAR">
			<!-- /col-sm-12 -->
			</div>
		<!-- form -->
		</form>
	<!-- /painel-jr -->
	</div>
<!-- /col-sm-12 -->
</div>